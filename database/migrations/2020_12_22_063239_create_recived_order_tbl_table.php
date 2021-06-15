<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecivedOrderTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recived_order_tbl', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('order_number')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('paypal_email')->nullable();
            $table->string('bankwire_holder_name')->nullable();
            $table->string('bankwire_swift_card')->nullable();
            $table->string('bankwire_bank_name')->nullable();
            $table->string('bankwire_iban')->nullable();
            $table->string('bankwire_country')->nullable();
            $table->string('westrenunion_full_name')->nullable();
            $table->string('westrenunion_address')->nullable();
            $table->string('westrenunion_country')->nullable();
            $table->string('westrenunion_phone_no')->nullable();
            $table->string('perfectmoney_pm_id')->nullable();
            $table->string('payza_payza_email')->nullable();
            $table->string('payoneer_payoneer_email')->nullable();
            $table->string('webmoney_webmoney_purse')->nullable();
            $table->string('okpay_okpay_email')->nullable();
            $table->string('skrill_skrill_email')->nullable();
            $table->string('nettler_nettler_id')->nullable();
            $table->string('dash_dash_id')->nullable();
            $table->string('moneygram_full_name')->nullable();
            $table->string('moneygram_address')->nullable();
            $table->string('moneygram_country')->nullable();
            $table->string('moneygram_phone_no')->nullable();
            $table->string('creditcard_card_number')->nullable();
            $table->string('creditcard_expiry')->nullable();
            $table->string('creditcard_cvv')->nullable();
            $table->string('instaforex_instaforex_id')->nullable();
            $table->string('solidtrustpay_std_id')->nullable();
            $table->string('usbank_us_id')->nullable();
            $table->string('usbank_expiry')->nullable();
            $table->string('usbank_cvv')->nullable();
            $table->string('advcash_wallet_id')->nullable();
            $table->string('alipaychina_email_id')->nullable();
            $table->string('paysafecard_email_id')->nullable();
            $table->string('onecard_email_id')->nullable();
            $table->string('sofort_email_id')->nullable();
            $table->string('qiviwallet_id')->nullable();
            $table->string('entromoney_wallet_address')->nullable();
            $table->string('mobilewallet_full_name')->nullable();
            $table->string('mobilewallet_phone_number')->nullable();
            $table->string('wordremit_wallet_address')->nullable();
            $table->string('wordremit_swift_card')->nullable();
            $table->string('wordremit_bank_name')->nullable();
            $table->string('wordremit_iban')->nullable();
            $table->string('wordremit_country')->nullable();
            $table->string('mobilepay_full_name')->nullable();
            $table->string('mobilepay_phone_number')->nullable();
            $table->string('capitalone_email_id')->nullable();
            $table->string('applepay_full_name')->nullable();
            $table->string('applepay_phone_number')->nullable();
            $table->string('chasequickpay_email_id')->nullable();
            $table->string('transferwise_email_address')->nullable();
            $table->string('venmomobilepayment_full_name')->nullable();
            $table->string('xoommoneytransfer_email_address')->nullable();
            $table->string('swifttransfer_holder_name')->nullable();
            $table->string('swifttransfer_swift_card')->nullable();
            $table->string('swifttransfer_bank_name')->nullable();
            $table->string('swifttransfer_iban')->nullable();
            $table->string('swifttransfer_country')->nullable();
            $table->string('directbankdeposit_holder_name')->nullable();
            $table->string('directbankdeposit_bank_name')->nullable();
            $table->string('directbankdeposit_iban')->nullable();
            $table->string('directbankdeposit_country')->nullable();
            $table->string('buyvirtualcard_email_address')->nullable();
            $table->string('reciver_wallet_address')->nullable();
            $table->string('transection_id')->nullable();
            $table->string('recived_total_amount')->nullable();
            $table->string('recived_bitcoin')->nullable();
            $table->string('transection_url')->nullable();
            $table->string('order_date')->nullable();
            $table->double('commission_fee')->nullable();
            $table->string('bitcoin_current_val')->nullable();
            $table->enum('status', ['on','off'])->default('off');
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
        Schema::dropIfExists('recived_order_tbl');
    }
}
