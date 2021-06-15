<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingsAdmin extends Model
{
    protected $fillable=[
    	 "transaction_fee_sell",
  "cryptocurrency_additional_sell_price",
  "cryptocurrency_decremental_sell_price" ,
  "transaction_fee_buy",
  "cryptocurrency_additional_buy_price",
  "cryptocurrency_decremental_buy_price",
    ];
    protected $table='commission_values';
}
