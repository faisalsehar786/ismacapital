@extends('frontLayout')

@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->sell; 
@endphp
@endsection

@section('content')

 

<form action="{{ route('make_order') }}" method="post">

    @csrf

    <input type="hidden" name="finalbtcVal"  class="finalbtcVal">


    <input type="hidden" name="hiddenbtcsellPrice" class="hiddenbtcsellPrice" value="{{CH::Get_Sell_Setting_price()}} ">

    <img src="{{asset('img/coins (1) (2).png')}}" style="margin-top: 30px">

    <div class="container">

<style type="text/css">
    
    .arrow {
  border: solid #BC873C;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  color: white;
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}
</style>



        {{--  <h4 class="text-center text-white" style="color:#BC873C !important;"><strong> ISM Capital The most secure cryptocurrency solution for you</strong> </h4> --}}
<div class="row mt-3">
<div class="col-md-4">
<div class=" p-1 " style="color:#BC873C;">

<label class="bg-success rounded-circle shadow-lg px-3 py-4 text-white" style="border: 2px solid #BC873C;">Step 1</label> --------<i class="arrow right"></i><br>
<strong>How to Sell</strong><br>
Select Coin > Enter the amount you want to sell > Select Currency > Select Payment Method
</div>
 </div> 
 <div class="col-md-4">
<div class=" p-1 " style="color:#BC873C;">

<label class="bg-success rounded-circle shadow-lg px-3 py-4 text-white" style="border: 2px solid #BC873C;">Step 2</label> --------<i class="arrow right"></i><br>
<strong>Provide Payment Details</strong><br>
Fill out your payment details for immediate payment
</div>
 </div> 
 <div class="col-md-4">
<div class=" p-1" style="color:#BC873C;">

<label class="bg-success rounded-circle shadow-lg px-3 py-4 text-white" style="border: 2px solid #BC873C;">Step 3</label> --------<i class="arrow right"></i><br>
<strong>Wallet Address/QR Code</strong><br>
Copy our Wallet Address or scan our QR Code for payment
</div>
 </div> 
 <div class="col-md-4">
<div class=" p-1" style="color:#BC873C;">

<label class="bg-success rounded-circle shadow-lg px-3 py-4 text-white" style="border: 2px solid #BC873C;">Step 4</label> --------<i class="arrow right"></i><br>
<strong>Make Payment</strong><br>
Send the bitcoin amount you want to sell from your Wallet to our Wallet Address or QR Code
</div>
 </div> 
 <div class="col-md-4">
<div class=" p-1 " style="color:#BC873C;">

<label class="bg-success rounded-circle shadow-lg px-3 py-4 text-white" style="border: 2px solid #BC873C;">Step 5</label> --------<i class="arrow right"></i><br>
<strong>Upload Payment Screenshot</strong><br>Upload payment screenshot from the confirmation page provided by your bitcoin wallet
</div>
 </div> 
</div>



        <div class="row" style="margin-top: 20px;">

            

            <div class="col-sm-8 px-lg-5 px-md-5 mx-auto">

                <h2 class="text-center my-2 bg font-weight-bolder" style="color: #BC873C ;">Sell Cryptocurrency Coins</h2>

                {{-- iconsssss --}}

                @foreach ($View_Bit_Cry_Prices as  $Prices)

                <p class="sprite sprite-{{$Prices->slug }} small_coin_logo select_currency {{$Prices->symbol }}"></p>

                <style type="text/css">

                .{{$Prices->symbol }}{

                display: none;

                }

                </style>  

                @endforeach

                {{-- <p class="sprite sprite-bitcoin small_coin_logo select_currency BTC"></p>

                <p class="sprite sprite-tether small_coin_logo select_currency USDT"></p>

                <p class="sprite sprite-cardano  small_coin_logo select_currency ETH"></p> --}}

                <div class="coiniconlive mb-2">

                    

                </div>

                

                <div class="input-group mb-3">



                    <label class="text-white">Select Coin</label>

                    <select   id="bitcoin_value" class="cointType" name="coniType" style="background-color:#e9ecef;width:100% !important;margin-bottom: 20px">

                        <option value="select_currency">Select Currency</option>

                        @foreach ($View_Bit_Cry_Prices as  $Prices)

                        <option value="{{$Prices->symbol }}" coin-id='{{$Prices->id }}' >{{$Prices->symbol }} - {{$Prices->name }}</option>

                        @endforeach

                    </select>



                    <label class="text-white" style="width: 100%;">Exchange Amount</label>

                    <input type="number" name="bitcoin_entered_amount"  id="bitcoin_value" class="form-control bitcoin_valuefConverion" min="0" value="1" style="background-color:#e9ecef;margin-bottom:20px" step="any">

                    <label class="text-white select_currency " style="width: 100%;">Select Currency</label>

                    <select  id="bitcoin_convert_to" class="currencyType select_currency" name="bitcoin_convert_to_currency" style="background-color:#e9ecef;width:100% !important;margin-bottom:20px">

                        {{-- <option value="">Select Currency You Need</option> --}}

                        <option value="USD">USD</option>

                        <option value="EUR">EUR</option>

                        <option value="ALL">ALL</option>

                        <option value="DZD">DZD</option>

                        <option value="ARS">ARS</option> 

                        <option value="AMD">AMD</option>

                        <option value="AUD">AUD</option>

                        <option value="AZN">AZN</option>

                        <option value="BHD">BHD</option>

                        <option value="BDT">BDT</option>

                        <option value="BYN">BYN</option>

                        <option value="BMD">BMD</option>

                        <option value="BOB">BOB</option>

                        <option value="BAM">BAM</option>

                        <option value="BRL">BRL</option>

                        <option value="BGN">BGN</option>

                        <option value="KHR">KHR</option>

                        <option value="CAD">CAD</option>

                        <option value="CLP">CLP</option>

                        <option value="CNY">CNY</option>

                        <option value="COP">COP</option>

                        <option value="CRC">CRC</option>

                        <option value="HRK">HRK</option>

                        <option value="CUP">CUP</option>

                        <option value="CZK">CZK</option>

                        <option value="DKK">DKK</option>

                        <option value="PHP">PHP</option>

                        <option value="PLN">PLN</option>

                        <option value="GBP">GBP</option>

                        <option value="QAR">QAR</option>

                        <option value="RON">RON</option>

                        <option value="RUB">RUB</option>

                        <option value="SAR">SAR</option>

                        <option value="RSD">RSD</option>

                        <option value="SGD">SGD</option>

                        <option value="ZAR">ZAR</option>

                        <option value="KRW">KRW</option>

                        <option value="SSP">SSP</option>

                        <option value="VES">VES</option>

                        <option value="LKR">LKR</option>

                        <option value="SEK">SEK</option>

                        <option value="CHF">CHF</option>

                        <option value="THB">THB</option>

                        <option value="TTD">TTD</option>

                        <option value="TND">TND</option>

                        <option value="TRY">TRY</option>

                        <option value="UGX">UGX</option>

                        <option value="UAH">UAH</option>

                        <option value="AED">AED</option>

                        <option value="UYU">UYU</option>

                        <option value="UZS">UZS</option>

                        <option value="VND">VND</option>

                        <option value="DOP">DOP</option>

                        <option value="EGP">EGP</option>

                        <option value="GEL">GEL</option>

                        <option value="GHS">GHS</option>

                        <option value="GTQ">GTQ</option>

                        <option value="HNL">HNL</option>

                        <option value="HKD">HKD</option>

                        <option value="HUF">HUF</option>

                        <option value="ISK">ISK</option>

                        <option value="INR">INR</option>

                        <option value="IDR">IDR</option>

                        <option value="IRR">IRR</option>

                        <option value="IQD">IQD</option>

                        <option value="ILS">ILS</option>

                        <option value="JMD">JMD</option>

                        <option value="JPY">JPY</option>

                        <option value="JOD">JOD</option>

                        <option value="KZT">KZT</option>

                        <option value="KES">KES</option>

                        <option value="KWD">KWD</option>

                        <option value="KGS">KGS</option>

                        <option value="LBP">LBP</option>

                        <option value="MKD">MKD</option>

                        <option value="MYR">MYR</option>

                        <option value="MUR">MUR</option>

                        <option value="MXN">MXN</option>

                        <option value="MDL">MDL</option>

                        <option value="MNT">MNT</option>

                        <option value="MAD">MAD</option>

                        <option value="MMK">MMK</option>

                        <option value="NAD">NAD</option>

                        <option value="NPR">NPR</option>

                        <option value="TWD">TWD</option>

                        <option value="NZD">NZD</option>

                        <option value="NIO">NIO</option>

                        <option value="NGN">NGN</option>

                        <option value="NOK">NOK</option>

                        <option value="OMR">OMR</option>

                        <option value="PKR">PKR</option>

                        <option value="PAB">PAB</option>

                        <option value="PEN">PEN</option>

                      

                    </select>

                        <label class="text-white select_currency_to" style="width:100%;">Converted Amount</label>

                      <input type="number" name="bitcoin_converted_amount"  id="bitcoin_value" class="form-control bitcoin_converted_amount select_currency" readonly="" required>

                </div>

                {{-- <span class="sprite sprite-bitcoin small_coin_logo"></span> --}}

            </div>

        </div>

        <div class="row classrowpaddincustom" style="margin-top: 10px;margin-bottom:5px;">

            

            <div class="col-lg-8 mx-auto">

                <div class="input-group mb-3">

                     <img src="/paymenticon/card.png" class="img-thumbnail paymenticonimg" alt="Cinque Terre" style="

    width: 88px;

    height: 53px;

   

display:none">

                    <label class="text-white select_currency_to" style="width:100%;">Select Payment Method</label>

                    <select id="bitcoin_value" class="paymentVal select_currency_to" name="paymentVal" style="width: 100%;background-color:#e9ecef" required="">

                        <option>Select Payment Method</option>
                        <option value="bTransfer">Bank Transfer</option>
                        <option value="cashDeposit">Cash Deposit</option>
                      {{--   <option value="paypal">Paypal</option>

                        <option value="bank_wire">Bank Wire</option>

                        <option value="westren_union">Western Union</option>

                        <option value="perfect_money">Perfect Money</option>

                        <option value="payza">Payza</option>

                        <option value="payoneer">Payoneer</option>

                        <option value="webmoney">Webmoney</option>

                        <option value="okpay">Okpay</option>

                        <option value="skrill">Skrill</option>

                        <option value="nettler">Nettler</option>

                        <option value="dash">Dash</option>

                        <option value="money_gram">Money Gram</option>

                        <option value="credit_card">Credit Card</option>

                        <option value="instaforex">Instaforex</option>

                        <option value="solid_trust_pay">Solid Trust Pay</option>

                        <option value="us_bank">US Bank</option>

                        <option value="advcash">AdvCash</option>

                        <option value="alipay_china">Alipay China</option>

                        <option value="paysafecard">Paysafecard</option>

                        <option value="onecard">OneCard</option>

                        <option value="sofort">SOFORT</option>

                        <option value="qivi_wallet">QIWI Wallet</option>

                        <option value="entromoney">Entromoney</option>

                        <option value="mobile_wallet">Mobile Wallet</option>

                        <option value="wordremit">Word Remit</option>

                        <option value="mobile_pay">Mobile Pay</option>

                        <option value="capital_one">Capital One</option>

                        <option value="apple_pay">Apple Pay</option>

                        <option value="chase_quick_pay">Chase Quick Pay</option>

                        <option value="transfer_wise">TransferWise</option>

                        <option value="venmo_mobile_payment">Venmo Mobile Payment</option>

                        <option value="xoom_money_transfer">Xoom Money Transfer</option>

                        <option value="swift_transfer">Swift Transfer</option>

                        <option value="direct_bank_deposit">Direct Bank Deposit</option>

                        <option value="buy_virtual_card">Buy Virtual Card</option> --}}

                    </select>

                    

                </div>

            </div>

        </div>

        

        <div class="row classrowpaddincustom" style="margin-top: 5px;margin-bottom:20px;">

            

            <div class="col-lg-8 mx-auto">

                <div class="input-group mb-3">

                    <input type="text" name="paypal_email" class="paypal" placeholder="e.g abc@gmail.com" id="account_id" style="width: 100% !important;margin-bottom:20px" required >
                      <input type="text" name="bTransfer_bank_name"  placeholder="First National Bank" id="account_id" class="bTransfer" style="width: 100% !important;margin-bottom:20px" required>
                        <input type="text" name="bTransfer_account"  placeholder="62869540031" id="account_id" class="bTransfer" style="width: 100% !important;margin-bottom:20px;" required>

                            <input type="text" name="bTransfer_ac_name"  placeholder="ISM Capital Global (Pty) Ltd" id="account_id" class="bTransfer" style="width: 100% !important;margin-bottom:20px;" required>

                                <input type="text" name="bTransfer_ref"  placeholder="Member ID Eg 98211xxx" id="account_id" class="bTransfer" style="width: 100% !important;margin-bottom:20px;" required>


                                 <input type="text" name="cashDeposit_account"  placeholder="62869540031" id="account_id" class="cashDeposit" style="width: 100% !important;margin-bottom:20px;" required>

                            <input type="text" name="cashDeposit_ac_name"  placeholder="ISM Capital Global (Pty) Ltd" id="account_id" class="cashDeposit" style="width: 100% !important;margin-bottom:20px;" required>

                                <input type="text" name="cashDeposit_ref"  placeholder="Member ID Eg 98211xxx" id="account_id" class="cashDeposit" style="width: 100% !important;margin-bottom:20px;" required>


                    <input type="text" name="bankwire_holder_name"  placeholder="A/c Holder Name" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="westrenunion_full_name"  placeholder="Full Name" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="perfectmoney_pm_id"  placeholder="PM ID" id="account_id" class="perfect_money" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="payza_payza_email"  placeholder="Payza Email" id="account_id" class="payza" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="payoneer_payoneer_email"  placeholder="Payoneer Email" id="account_id" class="payoneer" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="webmoney_webmoney_purse"  placeholder="Webmoney Purse" id="account_id" class="webmoney" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="okpay_okpay_email"  placeholder="Okpay Email" id="account_id" class="okpay" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="skrill_skrill_email"  placeholder="Skrill Email" id="account_id" class="skrill" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="nettler_nettler_id"  placeholder="Nettler ID" id="account_id" class="nettler" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="dash_dash_id"  placeholder="Dash ID" id="account_id" class="dash" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="moneygram_full_name"  placeholder="Full Name" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="creditcard_card_number"  placeholder="Card Number" id="account_id" class="credit_card" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="instaforex_instaforex_id"  placeholder="Instaforex ID" id="account_id" class="instaforex" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="solidtrustpay_std_id"  placeholder="STD ID" id="account_id" class="solid_trust_pay" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="usbank_us_id"  placeholder="US ID" id="account_id" class="us_bank" style="width: 100% !important;margin-bottom:20px" required>

                    

                    <input type="text" name="advcash_wallet_id"  placeholder="Wallet ID" id="account_id" class="advcash" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="alipaychina_email_id"  placeholder="Email ID" id="account_id" class="alipay_china" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="paysafecard_email_id"  placeholder="Email ID" id="account_id" class="paysafecard" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="onecard_email_id"  placeholder="Email ID" id="account_id" class="onecard" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="sofort_email_id"  placeholder="Email ID" id="account_id" class="sofort" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="qiviwallet_id"  placeholder="ID" id="account_id" class="qivi_wallet" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="wordremit_wallet_address"  placeholder="Wallet Address" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px" required>

                    {{-- Start///////////////////////////////////Start --}}

                    <input type="text" name="mobilepay_full_name"  placeholder="Full Name" id="account_id" class="mobile_pay" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="capitalone_email_id"  placeholder="Email ID" id="account_id" class="capital_one" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="applepay_full_name"  placeholder="Full Name" id="account_id" class="apple_pay" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="chasequickpay_email_id"  placeholder="Email ID" id="account_id" class="chase_quick_pay" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="transferwise_email_address"  placeholder="Email Address" id="account_id" class="transfer_wise" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="venmomobilepayment_full_name"  placeholder="Full Name" id="account_id" class="venmo_mobile_payment" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="riamoneytransfer_email_address"  placeholder="Email Address" id="account_id" class="ria_money_transfer" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="xoommoneytransfer_email_address"  placeholder="Email Address" id="account_id" class="xoom_money_transfer" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="swifttransfer_holder_name"  placeholder="A/c Holder Name" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="directbankdeposit_holder_name"  placeholder="A/c Holder Name" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="buyvirtualcard_email_address"  placeholder="Email Address" id="account_id" class="buy_virtual_card" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="mobilewallet_full_name"  placeholder="Full Name" id="account_id" class="mobile_wallet" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name=""  placeholder="Wallet Address" id="account_id" class="payco" style="width: 100% !important;margin-bottom:20px" required>

                    

                    <input type="text" name="entromoney_wallet_address"  placeholder="Wallet Address" id="account_id" class="entromoney" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="yandexmoney_email_address"  placeholder="Email Address" id="account_id" class="yandex_money" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="googlepay_gmail_id"  placeholder="Gmail ID" id="account_id" class="google_pay" style="width: 100% !important;margin-bottom:20px" required>

                    <input type="text" name="bankwire_swift_card"  placeholder="Swift Card" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="bankwire_bank_name"  placeholder="Bank Name" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="bankwire_iban"  placeholder="IBAN" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="bankwire_country"  placeholder="Country" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="wordremit_swift_card"  placeholder="Swift Card" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="wordremit_bank_name"  placeholder="Bank Name" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="wordremit_iban"  placeholder="IBAN" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="wordremit_country"  placeholder="Country" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="westrenunion_address"  placeholder="Address" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="westrenunion_country"  placeholder="Country" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="westrenunion_phone_no"  placeholder="Phone No" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="moneygram_address"  placeholder="Address" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="moneygram_country"  placeholder="Country" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="moneygram_phone_no"  placeholder="Phone No" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="creditcard_expiry"  placeholder="Expiry m/y" id="account_id" class="credit_card" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="creditcard_cvv"  placeholder="CVV" id="account_id" class="credit_card" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="usbank_expiry"  placeholder="Expiry m/y" id="account_id" class="us_bank" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="usbank_cvv"  placeholder="CVV" id="account_id" class="us_bank" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="mobilewallet_phone_number"  placeholder="Phone Number" id="account_id" class="mobile_wallet" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="mobilepay_phone_number"  placeholder="Phone Number" id="account_id" class="mobile_pay" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="applepay_phone_number"  placeholder="Phone Number" id="account_id" class="apple_pay" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="venmomobilepayment_phone_number"  placeholder="Phone Number" id="account_id" class="venmo_mobile_payment" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="swifttransfer_swift_transfer"  placeholder="Swift Code" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="swifttransfer_bank_name"  placeholder="Bank Name" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="swifttransfer_iban"  placeholder="IBAN" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="swifttransfer_country"  placeholder="Country" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="directbankdeposit_swift_code"  placeholder="Swift Code" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="directbankdeposit_bank_name"  placeholder="Bank Name" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="directbankdeposit_iban"  placeholder="IBAN" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px;" required>

                    <input type="text" name="directbankdeposit_country"  placeholder="Country" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px;" required>

                    <button type="submit" class="btn btn-primary mb-5 font-weight-bold" style="width:250px;background-color:#28A745;border:1px solid orange;height: 60px;border-radius: 27px;">Order Now</button>

                    

                </div>

            </div>

        </div>

        

    </div>

</form>

<style>
    .carousel-wrap {
  margin: 90px auto;
  padding: 0 5%;
  width: 80%;
  position: relative;
}

/* fix blank or flashing items on carousel */
.owl-carousel .item {
  position: relative;
  z-index: 100; 
  -webkit-backface-visibility: hidden; 
}

/* end fix */
.owl-nav > div {
  margin-top: -26px;
  position: absolute;
  top: 50%;
  color: #cdcbcd;
}

.owl-nav i {
  font-size: 52px;
}

.owl-nav .owl-prev {
  left: -30px;
}

.owl-nav .owl-next {
  right: -30px;
}
</style>


<div class="container">
<div class="carousel-wrap" style="width:100% !important;margin: 0px 0px 52px 0px;">
  <div class="owl-carousel">
      @foreach ($View_Bit_Cry_Prices as  $Prices)
    <div class="item card p-2 text-center" style="background: #a0763c82;">
<div class="row">
     <div class="col-6">
         <img src="https://www.blockchain.com/explorer-frontend/_next/image?url=https%3A%2F%2Fwww.cryptocompare.com{{ $Prices->img_url }}&w=96&q=75" alt="" class="img-thumbnail" width="50" height="50" style="width: 44%;"> 
     </div>
      <div class="col-6">
          <div class="coin-code">{{ $Prices->symbol }}</div>
     </div>

      <div class="col-12">
        <strong class="text-success">
         Price $ @php

               
             $btcvalplus= $Prices->price+ CH::Get_Latest_Additional_price()->cryptocurrency_additional_sell_price;

  $btcvalTotal=$btcvalplus-CH::Get_Latest_Additional_price()->cryptocurrency_decremental_sell_price; 
       echo $btcvalTotal;


            @endphp 
            </strong>

            <p class="text-info pb-0">Change (24hr)</p>
            <p class="text-danger">
                $ {{ $Prices->percent_change_24h }}
            </p>
      </div>
     </div>
    </div>
    @endforeach
  </div>
</div>
    <div class=" card row table_rows mb-4 table-responsive mx-auto" style="background: gainsboro;">

        

        

        <table class="table table-hover table-sm table-borderless">

            <thead>

                <tr>

                    <th>Icon</th>

                    <th class="mobile-hide">Coin Name</th>

                    <th >Price</th>

                    <th class="mobile-hide">Market Cap</th>

                    {{--  <th  class="mobile-hide" >Volume (24hr)</th>

                    <th  class="mobile-hide">Supply</th> --}}

                    <th  class="mobile-hide">Change (24hr)</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($View_Bit_Cry_Prices as  $Prices)

                <tr>

                    <td scope="row">

                        {{--  <span class="sprite sprite-{{ $Prices->slug }} small_coin_logo"></span> --}}

                        <img src="https://www.blockchain.com/explorer-frontend/_next/image?url=https%3A%2F%2Fwww.cryptocompare.com{{ $Prices->img_url }}&w=96&q=75" alt="" class="img-thumbnail" width="50" height="50">

                    </td>

                    <td class="mobile-hide">

                    <div></span>

                <strong>{{ $Prices->name }}</strong></div>

                <div class="coin-code">{{ $Prices->symbol }}</div>

            </td>

            <td class="market_capital  sorting_1" style="font-size:19px;font-weight: 600;width: 310px">$ @php

               
             $btcvalplus= $Prices->price+ CH::Get_Latest_Additional_price()->cryptocurrency_additional_sell_price;

  $btcvalTotal=$btcvalplus-CH::Get_Latest_Additional_price()->cryptocurrency_decremental_sell_price; 
       echo $btcvalTotal;


            @endphp</td>

            <td class="price mobile-hide" data-usd="17,819.1743" style="font-size:19px;font-weight: 600;">$ {{ $Prices->market_cap}}</td>

            

            <td class="increment change mobile-hide" style="font-size:19px;font-weight: 600;">$ {{ $Prices->percent_change_24h }}</td>

        </tr>

        @endforeach

    </tbody>

</table>

<div class="text-center mx-auto">

    

    {{ $View_Bit_Cry_Prices->links() }}

</div>





</div>

</div>

@endsection

@section('footer')

<script >

$(document).ready(function () {

$('.paypal').prop('required',true);

var hiddenbtcsellPrice=$('.hiddenbtcsellPrice').val();
   
   $('.coinValassign').addClass('bg-success');
    $('.coinValassign').text("SELL BTC:$"+hiddenbtcsellPrice);

function GetbtcConvertedValues(){

$('.loader').show();

var   coinid=$('option:selected').attr('coin-id');

var coinVal= $('.bitcoin_valuefConverion').val();

var coinType= $('.cointType').val();

var currencyVal= $('.bitcoin_converted_amount').val();

var currencyType= $('.currencyType').val();

console.log(coinVal,coinType,currencyVal,currencyType,coinid);

// $('.loader').show();

$.ajax({

url:"{{ route('converter') }}",

type:"POST",

dataType:"json",

data:{coinVal:coinVal,coinType:coinType,currencyVal:currencyVal,currencyType:currencyType,coinid:coinid,_token:"{{ csrf_token() }}"},

success:function(res)

{


var btcvalcurrent=res.PRICE;


var calculatebtc=+ btcvalcurrent + +{{ CH::Get_Latest_Additional_price()->cryptocurrency_additional_sell_price }};
var finalbtcVal=calculatebtc-{{ CH::Get_Latest_Additional_price()->cryptocurrency_decremental_sell_price}};


// console.log('Final Btc'+finalbtcVal);
var multipyCount=finalbtcVal*coinVal;



var converted_amount=multipyCount;
$('.coinValassign').text(`SELL ${coinType}:${converted_amount} ${currencyType}`); 

// console.log(converted_amount);
$('.finalbtcVal').val(finalbtcVal);

$('.bitcoin_converted_amount').val(converted_amount);

$('.coiniconlive').html('<img src="https://www.blockchain.com/explorer-frontend/_next/image?url=https%3A%2F%2Fwww.cryptocompare.com'+res.IMAGEURL+'&amp;w=96&amp;q=75" alt="" class="img-thumbnail" width="50" height="50">');

$('.loader').hide();

},

error: function(XMLHttpRequest, textStatus, errorThrown) {

console.log("Status: " + textStatus); console.log("Error: " + errorThrown);console.log("Error: " + errorThrown);

}

});

}

GetbtcConvertedValues();

$(".bitcoin_valuefConverion,.cointType,.currencyType").change(function() {





if($('.cointType').val()=='select_currency'){

alert('Please Select Coin First');

}else{



    GetbtcConvertedValues();

}

    





});

$('#coins-info-table').DataTable( {

"pageLength": 25

} );

});




</script>

<style type="text/css">

    @media (min-width: 768px) and (max-width: 1024px) {
  
  /* CSS */

  #what-we-do .card{

    height: 630px !important;
}
.mobile-hide{
    display:none !important;;
}
  
}

/* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  
  /* CSS */

#what-we-do .card{

    height: 480px !important;
}

.mobile-hide{
    display:none !important;;
}


  
}

.coin-code {

display: inline-block;

font-size: 10px;

padding: 2px 5px;

border: 1px solid #fcc118;

color: #fcc118;

border-radius: 4px;

margin-right: 10px;

}

.navbar-toggle {

margin-top: 25px;

}

table.dataTable thead th {

position: relative;

background-image: none !important;

}

table.dataTable thead th.sorting:after, table.dataTable thead th.sorting_asc:after, table.dataTable thead th.sorting_desc:after {

position: absolute;

top: 12px;

right: 8px;

display: block;

}

.navbar-inverse {

background-color: #101820;

border-color: #101820;

margin-bottom: 0px;

}

.navbar-brand {

float: left;

height: 50px;

padding: 33px 30px 50px 0px;

font-size: 18px;

line-height: 20px;

}

.navbar-inverse .navbar-nav>li>a {

color: #ffffff;

}

.well {

min-height: 20px;

padding: 19px;

margin-bottom: 20px;

background-color: #f9f9f9;

border: 1px solid #eee;

border-radius: 4px;

-webkit-box-shadow: none;

box-shadow: none;

}

tr.increment td{

background-color:rgba(0,255,0,.4)!important;

transition:all .7s ease;

}

tr.decrement td{

background-color:rgba(255,0,0,.4)!important;

transition:all .7s ease;

}

.container.content {

padding: 40px;

background: #fff;

}

.container.content.chart {

background: #f9f9f9;

padding: 40px;

border-top: 1px solid #eee;

border-bottom: 1px solid #eee;

}

.header-bar {

font-size: 16px;

padding: 15px 0 17px 0;

text-align: center;

background: #fcc118;

color: #fff;

}

.banner-ad {

text-align: center;

margin-bottom: 30px;

}

.banner-ad img {

max-width: 100%;

}

a.header-link:hover {

text-decoration: none;

}

.btn-value {

background: #fcc118;

color: #101820;

border: 2px solid #fcc118;

border-radius: 210px;

padding: 10px 25px;

font-weight: bold;

}

form.navbar-form.navbar-right {

padding: 15px 0;

}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {

padding: 15px;

line-height: 1.42857143;

vertical-align: top;

border-top: 1px solid #ddd;

}

.coin-header {

font-size: 16px;

text-transform: uppercase;

font-weight: 600;

}

.tx {

}

footer {

background: #101820;

padding: 0px 0;

text-align: center;

}

footer img {

-webkit-filter: grayscale(100%);

-moz-filter: grayscale(100%);

-ms-filter: grayscale(100%);

-o-filter: grayscale(100%);

filter: grayscale(100%);

opacity: 0.3;

}

@keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

/* Firefox < 16 */

@-moz-keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

/* Safari, Chrome and Opera > 12.1 */

@-webkit-keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

/* Internet Explorer */

@-ms-keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

/* Opera < 12.1 */

@-o-keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

@media (min-width: 992px) {

/* 992px and above */

.affix-sidebar.affix {

top: 30px;

/* Top Position */

width: 294px;

/* Widget Width (small desktop) */

}

}

@media (min-width: 1200px) {

/* 1200px and above */

.affix-sidebar.affix {

width: 364px;

/* Widget Width (large desktop) */

}

}

@media (max-width: 991px) {

/* 991px and below */

.affix-sidebar.affix {

position: static;

}

.mobile-hide {

display: none;

}

.mobile-center {

text-align: center;

}

.mobile-center h2 {

margin-bottom: 30px;

}

.table-responsive {

border: 0px;

}

.well {

margin-bottom: 0px;

}

.col-lg-6 {

width: 50%;

display: inline-block;

}

.container.content {

padding: 15px 0;

}

}

@media (min-width: 768px) {

.navbar-nav>li>a {

padding-top: 35px;

padding-bottom: 35px;

}

}

#account_id

{

background-color:#e9ecef;

}

.paypal,.bank_wire,.westren_union,.bTransfer,.cashDeposit,.perfect_money,.payza,.payoneer,.webmoney,.okpay,.skrill,.nettler,.dash,.money_gram,.credit_card,.instaforex,.solid_trust_pay,.us_bank,.advcash,.alipay_china,.paysafecard,.onecard,.sofort,.qivi_wallet,.entromoney,.mobile_wallet,.mobile_pay,.capital_one,.apple_pay,.chase_quick_pay,.transfer_wise,.venmo_mobile_payment,.xoom_mobile_payment,.swift_transfer,.direct_bank_deposit,.buy_gift_card,.buy_virtual_card,.google_pay,.yandex_money,.payco,.ria_money_transfer,.xoom_money_transfer,.wordremit,.select_currency_to,.select_currency{

display: none;

}

</style>

<script>



let classesCss=['paypal','bTransfer','cashDeposit','bank_wire','westren_union','perfect_money','payza','payoneer','webmoney','okpay','skrill','nettler','dash','money_gram','credit_card','instaforex','solid_trust_pay','us_bank','advcash','alipay_china','paysafecard','onecard','sofort','qivi_wallet','entromoney','mobile_wallet','mobile_pay','capital_one','apple_pay','chase_quick_pay','transfer_wise','venmo_mobile_payment','chase_quick_pay','swift_transfer','direct_bank_deposit','buy_gift_card','buy_virtual_card','google_pay','yandex_money','payco','ria_money_transfer','xoom_money_transfer','wordremit'];

$('.paymentVal').on('change', function() {

classesCss.filter(word => word !=this.value);

classesCss.map(function(key, index) {

$('.'+key).hide();

$('.'+key).prop('required',false);

console.log(key);

});

$('.'+this.value).show();

$('.'+this.value).prop('required',true);

//alert( this.value );

});

</script>

{{-- Select Currency like BTC,ETH --}}

<script>

let classesCss1=['select_currency'];

$('.cointType').on('change', function() {

// alert($('.currencyType ').val());

if(this.value=="select_currency"){

alert("Please Select Currency");

}else if($('.currencyType ').val()=='USD'){



classesCss1.filter(word => word !=this.value);

classesCss1.map(function(key1, index) {

$('.loader').show();

$('.'+key1).show();

$('.'+key1).prop('required',false);

console.log(key1);

});

$('.'+this.value).hide();

$('.'+this.value).prop('required',true);

$('.select_currency_to').show();

}

else

{

classesCss1.filter(word => word !=this.value);

classesCss1.map(function(key1, index) {

$('.loader').show();

$('.'+key1).show();

$('.'+key1).prop('required',false);

console.log(key1);

});

$('.'+this.value).hide();

$('.'+this.value).prop('required',true);

}

});

</script>

<script>

let classesCss2=['select_currency_to'];

$('.currencyType').on('change', function() {

classesCss2.filter(word => word !=this.value);

classesCss2.map(function(key2, index) {

$('.loader').show();

$('.'+key2).show();

$('.'+key2).prop('required',false);

console.log(key2);

});

// $('.loader').hide();

$('.'+this.value).hide();

$('.'+this.value).prop('required',true);

});



$(".paymentVal ").change(function(){



$('.paymenticonimg').attr("src","/paymenticon/"+$(this).val()+".png");

$(".paymenticonimg").show();



})


$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
})


// A $( document ).ready() block.



</script>

<style>

.coin-code {

border: 1px  solid #BC873C !important;

color: #BC873C  !important;



}

#bitcoin_value {

border-radius: 26px;

border: #BC873C solid !important;

}

#account_id {

border-radius: 26px;

border: #BC873C solid !important;

}

#bitcoin_convert_to{

border-radius: 26px;



border: #BC873C solid !important;

}





section .section-title{

    text-align:center;

    color:#007b5e;

    margin-bottom:50px;

    text-transform:uppercase;

}



#what-we-do .card{

    height: 350px;

    padding: 1rem!important;

    border: none;

    margin-bottom:1rem;

    -webkit-transition: .5s all ease;

    -moz-transition: .5s all ease;

    transition: .5s all ease;

}

#what-we-do .card:hover{

    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);

    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);

    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);

}





    #what-we-do .card .card-block{

       



    position: relative;

    top: 12%;

     

    }

   #what-we-do .card .card-block .card-title,.card-text{

       

text-align: center;

     

    }  

    

    

#what-we-do .card .card-block a{

    color: #007b5e !important;

    font-weight:700;

    text-decoration:none;

}

#what-we-do .card .card-block a i{

    display:none;

    

}

#what-we-do .card:hover .card-block a i{

    display:inline-block;

    font-weight:700;

    

}

.single-feature-area.active{

    height: 496px;

}





</style>

@endsection