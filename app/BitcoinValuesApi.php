<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BitcoinValuesApi extends Model
{
    


    protected $fillable=[
    	'id',
		'name',
		'symbol',
		'slug',
		'num_market_pairs',
		'date_added',
		'max_supply',
		'circulating_supply',
		'total_supply',
		'platform',
		'cmc_rank',
		'last_updated',
		'price',
		'img_url',
		'volume_24h',
		'percent_change_1h',
		'percent_change_24h',
		'percent_change_7d',
		'market_cap',
		'lasts_updated',
    ];
    protected $table='tbl_bitcoin_values';
}
