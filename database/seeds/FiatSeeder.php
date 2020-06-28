<?php

use App\Foundation\Clients\DASH;
use App\Foundation\Clients\BTC;
use App\Models\Coin;
use Illuminate\Database\Seeder;
use App\Foundation\Markets\Coingecko;

class FiatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Coin $coin */
        Coin::create([
            "name" => "Simple Software Solutions",
            "key" => "simple-software-solutions",
            "symbol" => "SSS",
            "gateway" => DASH::class,
            "rpc_url" => "http://sdjvndflhbvdflbh:akjfngvklebgvlkfsdbgvlkfds@199.247.7.91:6740",
            "market" => Coingecko::class,
            "height" => 0,
            "enable" => true,
            "block_time" => 60
        ]);

        Coin::create([
            "name" => "Bitcoin",
            "key" => "bitcoin",
            "symbol" => "BTC",
            "gateway" => BTC::class,
            "rpc_url" => "http://127.0.0.1:3200",
            "market" => Coingecko::class,
            "height" => 0,
            "enable" => false,
            "block_time" => 60
        ]);
    }
}
