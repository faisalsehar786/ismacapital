<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App\BitcoinValuesApi;
use Illuminate\Support\Facades\Http;
class TestCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test cron';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
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
         'last_updated'=>  $lasts_updated,
        'volume_24h'=>$volume_24h,
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



    //         $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    //     $parameters = [
 
    //     'convert' => 'USD'
    //     ];

    // $headers = [
    //   'Accepts: application/json',
    //   'X-CMC_PRO_API_KEY: 7d526d9e-ae36-4909-bee8-0e5c121081c0'
    // ];
    // $qs = http_build_query($parameters); // query string encode the parameters
    // $request = "{$url}?{$qs}"; // create the request URL


    // $curl = curl_init(); // Get cURL resource
    // // Set cURL options
    // curl_setopt_array($curl, array(
    //   CURLOPT_URL => $request,            // set the request URL
    //   CURLOPT_HTTPHEADER => $headers,     // set the headers 
    //   CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
    // ));

    // $response = curl_exec($curl); // Send the request, save the response

    

    
    // curl_close($curl); // Close request
    // // dd(json_decode($response)->data[0]->quote->USD->price);
    // $response_value=json_decode($response)->data;
    // $key='1';
    // foreach ($response_value as $value) {

    //     $checkcount=BitcoinValuesApi::where('slug',$value->slug)->count();
       
    //     if ($checkcount>0) {


    //     $id=$value->id;
    //     $name=$value->name;
    //     $symbol=$value->symbol;
    //     $slug=$value->slug;
    //     $num_market_pairs=$value->num_market_pairs;
    //     $date_added=$value->date_added;
    //     $max_supply=$value->max_supply;
    //     $circulating_supply=$value->circulating_supply;
    //     $total_supply=$value->total_supply;
    //     $platform=$value->platform;
    //     $cmc_rank=$value->cmc_rank;
    //     $last_updated=$value->last_updated;
    //     $price=$value->quote->USD->price;
    //     $volume_24h=$value->quote->USD->volume_24h;
    //     $percent_change_1h=$value->quote->USD->percent_change_1h;
    //     $percent_change_24h=$value->quote->USD->percent_change_24h;
    //     $percent_change_7d=$value->quote->USD->percent_change_7d;
    //     $market_cap=$value->quote->USD->market_cap;
    //     $lasts_updated=$value->quote->USD->last_updated;


    //      BitcoinValuesApi::where('slug',$value->slug)->update([
    //     'id'=>$id,
    //     'name'=>$name,
    //     'symbol'=>$symbol,
    //     'slug'=>$slug,
    //     'num_market_pairs'=>$num_market_pairs,
    //     'date_added'=>$date_added,
    //     'max_supply'=>$max_supply,
    //     'circulating_supply'=>$circulating_supply,
    //     'total_supply'=>$total_supply,
    //     'platform'=>'',
    //     'cmc_rank'=>$cmc_rank,
    //     'last_updated'=>$last_updated,
    //     'price'=>$price,
    //     'volume_24h'=>$volume_24h,
    //     'percent_change_1h'=>$percent_change_1h,
    //     'percent_change_24h'=>$percent_change_24h,
    //     'percent_change_7d'=>$percent_change_7d,
    //     'market_cap'=>$market_cap,
    //     'lasts_updated'=>$lasts_updated,

    //     ]);
       
    //     }else{

    //     $id=$value->id;
    //     $name=$value->name;
    //     $symbol=$value->symbol;
    //     $slug=$value->slug;
    //     $num_market_pairs=$value->num_market_pairs;
    //     $date_added=$value->date_added;
    //     $max_supply=$value->max_supply;
    //     $circulating_supply=$value->circulating_supply;
    //     $total_supply=$value->total_supply;
    //     $platform=$value->platform;
    //     $cmc_rank=$value->cmc_rank;
    //     $last_updated=$value->last_updated;
    //     $price=$value->quote->USD->price;
    //     $volume_24h=$value->quote->USD->volume_24h;
    //     $percent_change_1h=$value->quote->USD->percent_change_1h;
    //     $percent_change_24h=$value->quote->USD->percent_change_24h;
    //     $percent_change_7d=$value->quote->USD->percent_change_7d;
    //     $market_cap=$value->quote->USD->market_cap;
    //     $lasts_updated=$value->quote->USD->last_updated;


    
    //     BitcoinValuesApi::create([
    //     'id'=>$id,
    //     'name'=>$name,
    //     'symbol'=>$symbol,
    //     'slug'=>$slug,
    //     'num_market_pairs'=>$num_market_pairs,
    //     'date_added'=>$date_added,
    //     'max_supply'=>$max_supply,
    //     'circulating_supply'=>$circulating_supply,
    //     'total_supply'=>$total_supply,
    //     'platform'=>'',
    //     'cmc_rank'=>$cmc_rank,
    //     'last_updated'=>$last_updated,
    //     'price'=>$price,
    //     'volume_24h'=>$volume_24h,
    //     'percent_change_1h'=>$percent_change_1h,
    //     'percent_change_24h'=>$percent_change_24h,
    //     'percent_change_7d'=>$percent_change_7d,
    //     'market_cap'=>$market_cap,
    //     'lasts_updated'=>$lasts_updated,

    //     ]);

        
    //     }



    // }




//     $response_value=(Http::get('https://api.coincap.io/v2/assets')->json());
   
//   foreach ($response_value['data' ] as $key=> $value) {
    
//     $checkcount=BitcoinValuesApi::where('slug',$value['id'])->count();
       
//       if ($checkcount>0) {


//         $id=$value['rank'];
//         $name=$value['name'];
//         $symbol=$value['symbol'];
//         $slug=$value['id'];
//         $total_supply=$value['supply'];
//         $max_supply=$value['maxSupply'];
//         $market_cap=$value['marketCapUsd'];
//         $percent_change_24h=$value['changePercent24Hr'];
//         $volume_24h=$value['volumeUsd24Hr'];
//         $price=$value['priceUsd'];

//         BitcoinValuesApi::where('slug',$value['id'])->update([
//       'id'=>$id,
//         'name'=>$name,
//         'symbol'=>$symbol,
//         'slug'=>$slug,
//         'max_supply'=>$max_supply,
//         'total_supply'=>$total_supply,
//         'price'=>$price,
//         'volume_24h'=>$volume_24h,
//         'percent_change_24h'=>$percent_change_24h,
//         'market_cap'=>$market_cap,

//       ]);
       
//       }
//       else{

//      $id=$value['rank'];
//         $name=$value['name'];
//         $symbol=$value['symbol'];
//         $slug=$value['id'];
//         $total_supply=$value['supply'];
//         $max_supply=$value['maxSupply'];
//         $market_cap=$value['marketCapUsd'];
//         $percent_change_24h=$value['changePercent24Hr'];
//         $volume_24h=$value['volumeUsd24Hr'];
//         $price=$value['priceUsd'];

//       BitcoinValuesApi::create([
       
//       'id'=>$id,
//         'name'=>$name,
//         'symbol'=>$symbol,
//         'slug'=>$slug,
//         'total_supply'=>$total_supply,
//         'price'=>$price,
//         'volume_24h'=>$volume_24h,
//         'percent_change_24h'=>$percent_change_24h,
//         'market_cap'=>$market_cap,

//       ]);

        
//       }



//     }
   
}
}