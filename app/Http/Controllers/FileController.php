<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Coin;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Foundation\FileReceiver;

class FileController extends Controller
{
    const ADDRESS = 'MBTphHnW8qHD3sw6vP7rBbKb6rbeuqnSCS';
    
    public function files(){
        $user = auth()->user();
        $username= $user->name;
        $files = $user->files()->orderByDesc('id')->paginate();
        return view('files',compact('files','username'));
    }

    public function upload(){
        $receiver = new FileReceiver(request());
        return $receiver->receiveChunks('file', function (UploadedFile $file) {
            $blocknumber = 0;
            $txid = 0;
            $size = $file->getSize();
            $name = $file->getClientOriginalName();
            
            $AmountPerMbFileSize = $size / (1024 * 1024);
            $user = auth()->user();

            if ($user->balance < $AmountPerMbFileSize){
                abort(response("Payment Required",402));
            }

            $client = Coin::find(1)->client;    
            $txid = $client->sendtoaddress(self::ADDRESS, (float) 0.001);
            $blockhash = $client->getrawtransaction($txid, 1)['blockhash'];
            $blocknumber = $client->getblock($blockhash)['height'];

            $user->wallets->first()->transactions()->create(["status" => "completed", "amount" => $AmountPerMbFileSize, "type" => "withdraw", "data" => ["address" => "", "exchange" => true]]);
            $user->files()->create(compact('txid', 'blocknumber', 'name', 'size'));
            $file->move(storage_path('app/public'), $txid);
            return 'ready';
        });
    }

    public function download($txid){
        $file = File::where(compact('txid'))->firstOrFail();
        $user = auth()->user();
        if($file->user_id != $user->id){
            $masterNodeAmount = $user->hasMasternode ? 2 : 1;
            $AmountPerMbFileSize = $file->size / (1024 * 1024)/(10 * $masterNodeAmount);
            if ($user->balance < $AmountPerMbFileSize)
                abort(402, "Payment Required");

            $user->wallets->first()->transactions()->create(["status" => "completed", "amount" => $AmountPerMbFileSize, "type" => "withdraw", "data" => ["address" => "", "exchange" => true]]);
            $model->model->user->wallets->first()->transactions()->create(["status" => "completed", "amount" => $AmountPerMbFileSize / (10 / $masterNodeAmount), "type" => "deposit", "data" => ["address" => "", "exchange" => true]]);
        }

        $filename = $file->name;
        return response()->noContent(200,[
            'Content-Disposition'=>"attachment; filename=\"$filename\"",
            'X-Accel-Redirect'=>"/storage/app/public/$txid",
            'X-Sendfile'=>base_path("/storage/app/public/$txid")
        ]);
    }
}
