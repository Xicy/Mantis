<?php

namespace App\Foundation\Markets;

/**
 * Class Coingecko
 * @package App\Foundation\Markets
 */
class Coingecko extends Base
{
    private static $url = "https://api.coingecko.com/api/v3/coins/%s?localization=en&tickers=false&market_data=true&community_data=false&developer_data=false&sparkline=false";

    private function getFileContent(){
        $key = $this->key;
        $url = self::$url;
        return \Cache::remember("coingecko_$key\_data", 600, function () use ($key,$url) {
            return json_decode(file_get_contents(sprintf($url, $key)), true);
        });
    }

    protected function getAbstractPrice($pair)
    {
        $json = $this->getFileContent();
        return $json["market_data"]["current_price"][strtolower($pair)];
    }

    protected function getAbstractVolume()
    {
        $json = $this->getFileContent();
        return $json["market_data"]["total_volume"]["usd"];
    }

    protected function getAbstractCirculatingSupply()
    {
        $json = $this->getFileContent();
        return $json["market_data"]["circulating_supply"];
    }
}
