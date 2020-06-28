<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function files(){
        $user = auth()->user();
        $username= $user->name;
        $files = $user->files()->paginate();
        return view('files',compact('files','username'));
    }

    public function download($txid){
        $file = File::where(compact('txid'))->firstOrFail();
        $user = auth()->user();
        if($file->user_id != $user->id){
            //Check balance
        }

        $filename = $file->name;
        return response()->noContent(200,[
            'Content-Disposition'=>"attachment; filename=\"$filename\"",
            'X-Accel-Redirect'=>"/storage/app/public/$txid",
            'X-Sendfile'=>base_path("/storage/app/public/$txid")
        ]);
    }
}
