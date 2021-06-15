<?php
namespace App\helpers;

use Carbon\Carbon;
use DB;
use Auth;
use Session;
use Cookie;
use App;
use App\SettingsAdmin;
use Illuminate\Support\Facades\Crypt;
class CustomHelper
{

 public function Get_Latest_Bitcoin_value()
 {
  
    $bitcoin_value=DB::select("SELECT * from tbl_bitcoin_values WHERE slug='BTC'");
    return $bitcoin_value;

 }

 public function Get_Latest_Commision()
 {
  
    $transection_fee=SettingsAdmin::find(1)->first();
    return $transection_fee;

 }

 public function Get_Latest_Additional_price()
 {
  
    $additional_price=SettingsAdmin::find(1)->first();
    return $additional_price;

 }


public function Get_Sell_Setting_price()
 {
  
 $additional_price=SettingsAdmin::find(1)->first();
 $bitcoin_value=DB::select("SELECT * from tbl_bitcoin_values WHERE slug='BTC'");
  

 $btcvalplus= $bitcoin_value[0]->price+ $additional_price->cryptocurrency_additional_sell_price;
  


  $btcvalTotal=$btcvalplus-$additional_price->cryptocurrency_decremental_sell_price; 
    return $btcvalTotal;

 }


public function Get_Buy_Setting_price()
 {
  
 $additional_price=SettingsAdmin::find(1)->first();
 $bitcoin_value=DB::select("SELECT * from tbl_bitcoin_values WHERE slug='BTC'");
 
  
 $btcvalplus= $bitcoin_value[0]->price+ $additional_price->cryptocurrency_additional_buy_price;
  

  $btcvalTotal=$btcvalplus-$additional_price->cryptocurrency_decremental_buy_price; 


    return $btcvalTotal;

 }
 


}