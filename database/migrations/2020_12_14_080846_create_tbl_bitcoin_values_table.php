<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBitcoinValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bitcoin_values', function (Blueprint $table) {
            $table->Increments('tbl_id');
            $table->integer('id')->nullable();
            $table->string('name')->nullable();
            $table->string('symbol')->nullable();
            $table->string('slug')->nullable();
            $table->Double('num_market_pairs')->nullable();
            $table->string('date_added')->nullable();
            $table->Double('max_supply')->nullable();
            $table->Double('circulating_supply')->nullable();
            $table->Double('total_supply')->nullable();
            $table->string('platform')->nullable();
            $table->text('img_url')->nullable();
            $table->Double('cmc_rank')->nullable();
            $table->string('last_updated')->nullable();
            $table->Double('price')->nullable();
            $table->Double('volume_24h')->nullable();
            $table->Double('percent_change_1h')->nullable();
            $table->Double('percent_change_24h')->nullable();
            $table->Double('percent_change_7d')->nullable();
            $table->Double('market_cap')->nullable();
            $table->string('lasts_updated')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bitcoin_values');
    }
}
