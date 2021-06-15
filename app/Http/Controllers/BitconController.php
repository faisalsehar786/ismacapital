<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
use App\BitcoinValuesApi;

class BitconController extends Controller
{
    public function store()
    {




$Bit_Cry_Prices=Http::get('https://www.blockchain.com/prices/api/coin-list-page?limit=100&tsym=USD')->json();




       foreach ($Bit_Cry_Prices['Data'] as $value) {


        $checkcount=BitcoinValuesApi::where('symbol',$value['RAW']['USD']['FROMSYMBOL'])->count();
     
        if ($checkcount>0) {


        $id=$value['CoinInfo']['Id'];
        $name=$value['CoinInfo']['FullName'];
        $symbol=$value['RAW']['USD']['FROMSYMBOL'];
        $slug=$value['CoinInfo']['Name'];
        $max_supply=$value['CoinInfo']['MaxSupply'];
        $total_supply=$value['RAW']['USD']['SUPPLY'];
        $price=$value['RAW']['USD']['PRICE'];
        $volume_24h=$value['RAW']['USD']['VOLUME24HOUR'];
        $percent_change_1h=$value['RAW']['USD']['CHANGEPCTHOUR'];
        $percent_change_24h=$value['RAW']['USD']['CHANGEPCT24HOUR'];
        $market_cap=$value['RAW']['USD']['MKTCAP'];
        $lasts_updated=date("Y-m-d H:i:s", $value['RAW']['USD']['LASTUPDATE']);
        $img_url=$value['RAW']['USD']['IMAGEURL'];


         BitcoinValuesApi::where('symbol',$value['RAW']['USD']['FROMSYMBOL'])->update([
        'id'=>$id,
        'name'=>$name,
        'symbol'=>$symbol,
        'slug'=>$slug,
        'max_supply'=>$max_supply,
        'total_supply'=>$total_supply,
        'price'=>$price,
        'volume_24h'=>$volume_24h,
        'last_updated'=>  $lasts_updated,
        'percent_change_1h'=>$percent_change_1h,
        'percent_change_24h'=>$percent_change_24h,
        'market_cap'=>$market_cap,
        'img_url'=> $img_url,

        ]);
       
        }else{

      
        $id=$value['CoinInfo']['Id'];
        $name=$value['CoinInfo']['FullName'];
        $symbol=$value['RAW']['USD']['FROMSYMBOL'];
        $slug=$value['CoinInfo']['Name'];
        $max_supply=$value['CoinInfo']['MaxSupply'];
        $total_supply=$value['RAW']['USD']['SUPPLY'];
        $price=$value['RAW']['USD']['PRICE'];
        $volume_24h=$value['RAW']['USD']['VOLUME24HOUR'];
        $percent_change_1h=$value['RAW']['USD']['CHANGEPCTHOUR'];
        $percent_change_24h=$value['RAW']['USD']['CHANGEPCT24HOUR'];
        $market_cap=$value['RAW']['USD']['MKTCAP'];
        $lasts_updated=date("Y-m-d H:i:s", $value['RAW']['USD']['LASTUPDATE']);
        $img_url=$value['RAW']['USD']['IMAGEURL'];


    
        BitcoinValuesApi::create([
        'id'=>$id,
        'name'=>$name,
        'symbol'=>$symbol,
        'slug'=>$slug,
        'max_supply'=>$max_supply,
        'total_supply'=>$total_supply,
        'price'=>$price,
        'last_updated'=>  $lasts_updated,
        'volume_24h'=>$volume_24h,
        'percent_change_1h'=>$percent_change_1h,
        'percent_change_24h'=>$percent_change_24h,
        'market_cap'=>$market_cap,
        'img_url'=> $img_url,

        ]);

        
        }



    }

    }
}
