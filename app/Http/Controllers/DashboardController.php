<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();
        $balance = number_format_coin($user->balance);
        $coin = Coin::find(1);
        $currency = $coin->symbol;
        $coin_price = $coin->market->getPrice();
        $btc_price = Coin::find(2)->market->getPrice();
        $file_count = $user->files()->count();
        return view('dashboard',compact('balance','currency','coin_price','btc_price','file_count')); 
    }

    public function stats(){
        $space = human_filesize(disk_total_space(storage_path()));
        $cpu = sys_getloadavg()[0]*100;
        $usage = human_filesize(disk_total_space(storage_path())-disk_free_space(storage_path()));
        return response()->json(compact('space','cpu','usage'));
    }

    public function deposit(){
        $user = auth()->user();
        $hasMasterNode = $user->hasMasterNode;
        $coin = Coin::find(1);
        $coin_price = $coin->market->getPrice();
        $btc_price = Coin::find(2)->market->getPrice();
        return view('deposit',compact('hasMasterNode','coin_price','btc_price'));
    }

    public function activateMasterNode(){
        $data = $this->validate(request(),['pubkey' => 'required|string|masternode']);
        $user = auth()->user();
        $user->hasMasterNode = true;
        $user->save();
        return redirect()->back();
    }

    public function masternodes(){
        $coin = Coin::find(1);
        $volume = $coin->market->getVolume();
        $coin_price = number_format_coin($coin->market->getPrice());
        $coin = $coin->client;

        $getinfo = \Cache::remember('getinfo', 600, function () use ($coin) {
            return $coin->getinfo();
        });
        
        $masternodes = \Cache::remember('masternodes', 600, function () use ($coin) {
            return collect($coin->listmasternodes());
        });

        $count = $masternodes->count();
        
        $masternodes = $masternodes->forPage(request('page',0),10)->map(function ($e) use($coin) {
            //$masternodeAddress = isset($e['addr']) ? $coin->getaddressbalance([["addresses" => [ $e['addr'] ]]]) : ['balance'=>0,'received'=>0];
            return [
                "txhash" => $e['txhash'] ?? "",
                "wallet" => $e['addr'] ?? "",
                "status" => $e["status"] ?? "",
                "lastseen" => $e["lastseen"] * 1000,
                "balance" => 0, //$masternodeAddress['balance'],
                "received" => 0, // $masternodeAddress['received']
            ];
        })->sortByDesc('lastseen')->values();

        return view('masternodes',compact('masternodes','count','getinfo','coin_price','volume'));
    }

    public function mymasternodes(){
        $user = auth()->user();
        $coin = Coin::find(1);
        $volume = $coin->market->getVolume();
        $coin_price = number_format_coin($coin->market->getPrice());
        $coin = $coin->client;

        $getinfo = \Cache::remember('getinfo', 600, function () use ($coin) {
            return $coin->getinfo();
        });
        
        $masternodes = \Cache::remember('mymasternodes_'.$user->id, 600, function () use ($coin,$user) {
            return $user->masternodes->map(function ($m) use ($coin) {
                return ($coin->listmasternodes($m->address)[0] ?? [
                    'txhash'=>'',
                    'addr'=>$m->address,
                    'status'=>'DISABLE',
                    'lastseen'=>0
                ])+['name'=>$m->name];
            });
        });
        $allCount = $coin->getmasternodecount()['total'];
        $count = $masternodes->count();
        
        $masternodes = $masternodes->forPage(request('page',0),10)->map(function ($e) use($coin) {
            //$masternodeAddress = isset($e['addr']) ? $coin->getaddressbalance([["addresses" => [ $e['addr'] ]]]) : ['balance'=>0,'received'=>0];
            return [
                'name' => $e['name'],
                "txhash" => $e['txhash'] ?? "",
                "wallet" => $e['addr'] ?? "",
                "status" => $e["status"] ?? "",
                "lastseen" => $e["lastseen"] * 1000,
                "balance" => 0, //$masternodeAddress['balance'],
                "received" => 0, // $masternodeAddress['received']
            ];
        })->sortByDesc('lastseen')->values();

        return view('mymasternodes',compact('masternodes','count','getinfo','coin_price','volume','allCount'));
    }

    public function addMasternode(){
        $data = $this->validate(request(),['address'=>'required|string|unique:masternodes,address','name'=>'required|string']);
        $user = auth()->user();
        $user->masternodes()->create($data);
        \Cache::forget('mymasternodes_'.$user->id);
        return redirect()->back();
    }
}
