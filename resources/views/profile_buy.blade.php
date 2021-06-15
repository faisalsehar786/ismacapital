@extends('frontLayout')
@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->orderby; 
@endphp
@endsection
@section('content')

 <div class="card container rounded border" style="background: gainsboro;margin-bottom: 20px;margin-top: 20px;">
     <div id="merchants" style="text-align: center;">
<div class="panel-body">
<div class="">
<div class="col-md-16" align="center">
<div class="">
</div>
<div class="col-md-12">
<h2></h2>
<form action="{{ route('confirm_order_buy') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="paymentVal" value="{{ $order_data['paymethod'] }}">

<input type="hidden" name="hidden_commission_fee" value='@php
    echo CH::Get_Latest_Commision()->transaction_fee_buy;
@endphp'>

<input type="hidden" name="hidden_coinType" value='@php
    echo Session::get('coinType');
@endphp'>


<input type="hidden" name="hidden_currencyType" value='@php
    echo Session::get('currencyType');
@endphp'>

<input type="hidden" name="hidden_convertedAmount" value='@php
    echo Session::get('convertedAmount');
@endphp'>


<input type="hidden" name="hidden_recived_amount" value="{{ Session::get('convertedAmount') }}">
{{-- <input type="hidden" name="advcash_wallet_id" value="{{$order_data['reqData']['advcash_wallet_id'] }}">
<input type="hidden" name="advcash_wallet_id" value="{{$order_data['reqData']['advcash_wallet_id'] }}"> --}}
<table class="table">
<tbody >


<tr>
<td colspan="2"><h1 style="text-align: center;font:bold;">Buy {{ Session::get('coinType') }}</h1></td>
</tr>
<tr>
<td><strong style="font:bold;font-size:18px">Wallet Address</strong></td>
<td style="font:bold;font-size:18px;" class="thumbnail"><span class="shadow-lg p-2 border-0 text-success"><b>14nGXPBngxCmBaTekTr2gD6vyCqEi2bEEo</b></span></td>
{{-- <input type="hidden" name="wallet_address" value="13x7gfKZhVSHDU8hhKYkTREc4FXTgdt4Pb"> --}}
</tr>
<tr>
<td style="font:bold;font-size:18px"><b>Amount in {{ Session::get('currencyType') }}</b></td>
<td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $order_data['reqData']['bitcoin_entered_amount'] }} </b></td>
<input type="hidden" name="users_bitcoin_entered_amount" value="{{ $order_data['reqData']['bitcoin_entered_amount'] }}">

</tr>
<t><td style="font:bold;font-size:18px"><b>Waiting Your Order</b></td>
<td style="font:bold;font-size:18px">&nbsp;&nbsp;&nbsp;&nbsp; <b><script type="text/javascript">

(function () {
    var timeLeft = 300,
        cinterval;

    var timeDec = function (){
        timeLeft--;
        document.getElementById('countdown').innerHTML = timeLeft;
        if(timeLeft === 0){
            clearInterval(cinterval);

            window.location.href="/"
        }
    };

    cinterval = setInterval(timeDec, 1000);
})();

</script>
Send Before  <span id="countdown">0</span>. </b></td>
</tr>
{{-- <tr>
</tr> --}}
{{-- <tr style="margin-top: 5px">
<td style="vertical-align: middle;"><div class="spinner-border text-warning" role="status" style="width:110px;height: 110px; color: #BC873C !important;">
  <span class="sr-only">Loading...</span>
</div></td>
<td style="font:bold;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://blockchain.info/qr?data=bitcoin:14nGXPBngxCmBaTekTr2gD6vyCqEi2bEEo&amp;size=200" height="180px" width="200px" class="img-thumbnail shadow-lg p-2" style="border:1px solid black">
</td></tr> --}}
{{-- <tr>
</tr><tr>
<td colspan="2"><h4></h4><h4 style="text-align: center;"><span style="font-size: 20px;font:bold;">No Bitcoin Detected Yet, Page will Refresh Upon Receiving the Bitcoin</span></h4></td>
</tr><tr>
</tr><tr>
<td colspan="2"><h5 style="text-align: center;"><span style="font-size: 18px;font:bold;">If your Bitcoin Sent Successfully, Provide Transaction Detail Below and then Confirm</span></h5></td>
</tr><tr>
</tr>
 --}}
<tr>
<td style="font:bold;font-size:18px"><b>Email Address</b>
</td>

<td>
<input type="text" name="order_email" class="form-control" id="order_email"  placeholder="" required="">
</td>

</tr>
<tr>
<td style="font:bold;font-size:18px"><b>Your Wallet Address</b>
</td>

<td>
<input type="text" name="walletAddress" class="form-control" id="walletAddress"  placeholder="" required="">
</td>

</tr>
<tr>
<td style="font:bold;font-size:18px"><b>Transaction ID Or URL</b>
</td>

<td>
<input type="text" name="transection_url" class="form-control" id="confirm_oder_pay_id"  placeholder="" >
</td>

</tr>

<tr>
<td style="font:bold;font-size:18px"><b>Invoice</b>
</td>

<td>
<input type="file" name="invoice" class="form-control"  required="">
</td>

</tr>

<tr>
<td colspan="2"><h2 style="font:bold;">Order Detail</h2></td>
</tr>

<tr><td style="font:bold;font-size:18px">&nbsp;&nbsp;&nbsp;&nbsp;@php
    $six_digit_random_number = time() . uniqid();
    echo $six_digit_random_number;
    echo "<input type='hidden' name='order_number' value='$six_digit_random_number'>";
@endphp 
</td>
</tr>
  
<tr>
<td style="font:bold;font-size:18px"><b>1 {{ Session::get('coinType') }} = </b></td>
<td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp;<b> @php
               
     echo Session::get('BtcValLatest');
            echo "<input type='hidden' name='bitcoin_current_val' value=".Session::get('BtcValLatest').">";                
@endphp  {{ Session::get('currencyType') }} </b></td>
</tr>

<tr>
{{-- <td style="font:bold;font-size:18px"><b>Total Amount</b></td>
<td style="font:bold;font-size:18px">&nbsp;&nbsp;&nbsp;&nbsp;<b>@php
                           // echo ((CH::Get_Latest_Bitcoin_value()[0]->price+
                           //  CH::Get_Latest_Additional_price()[0]->cryptocurrency_additional_buy_price)*$order_data['reqData']['bitcoin_entered_amount']);


$convertedAmount=Session::get('convertedAmount')+CH::Get_Latest_Additional_price()->cryptocurrency_additional_buy_price;
  echo (($convertedAmount-CH::Get_Latest_Additional_price()->cryptocurrency_decremental_buy_price)*$order_data['reqData']['bitcoin_entered_amount']);

@endphp  {{ Session::get('coinType') }} </b></td> --}}
</tr>
 

<tr>
<td style="font:bold;font-size:18px"><b>Total {{ Session::get('coinType') }} Order </b></td>
<td style="font:bold;font-size:18px">&nbsp;&nbsp;&nbsp;&nbsp; <b>@php
                           echo Session::get('Origenalorder');
@endphp {{ Session::get('coinType') }}</b> </td>
</tr>

<tr>
<td style="font:bold;font-size:18px"><b>Commission Fee</b></td>
<td style="font:bold;font-size:18px">&nbsp;&nbsp;&nbsp;&nbsp; <b>@php
                           echo CH::Get_Latest_Commision()->transaction_fee_buy;
@endphp %</b> </td>
</tr>

<tr>
</tr>

<tr>
<td style="font:bold;font-size:18px"><b>You will receive</b></td>
<td style="font:bold;font-size:18px"><b>&nbsp;&nbsp;&nbsp;&nbsp;@php
                    // $bitcoin_value=CH::Get_Latest_Bitcoin_value()[0]->price;

                    //  $bitcoin_value=Session::get('convertedAmount');
   
                    // $additional_value=CH::Get_Latest_Additional_price()->cryptocurrency_additional_buy_price;


                    // $additional_decriment_value=CH::Get_Latest_Additional_price()->cryptocurrency_decremental_buy_price;

                    // $coinSetValplus= $bitcoin_value+$additional_value;

                    // $coinSetValminus=$coinSetValplus-$additional_decriment_value;

                    // $user_bitcoin_entered_count=$order_data['reqData']['bitcoin_entered_amount'];

                    // $transaction_fee_buy=CH::Get_Latest_Commision()->transaction_fee_buy;
                           

                    // $total_value_of_bitcoin=($coinSetValminus)*$user_bitcoin_entered_count;

                    // $commission_fee=($total_value_of_bitcoin)*($transaction_fee_buy/100);

                    // echo $total_value_of_bitcoin-$commission_fee;


                        echo Session::get('convertedAmount');
@endphp  {{ Session::get('coinType') }} </b></td>
</tr>
<tr>
<td style="font:bold;font-size:18px"><b>You will Get Paid with</b></td>
<td style="font:bold;font-size:18px"><b> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['paymentVal'] }}</b></td>
</tr>



@if($order_data['reqData']['paymentVal']=="paypal")

    <input type="hidden" name="paypal_email" value="{{$order_data['reqData']['paypal_email'] }}">
    <tr>
    <td style="font:bold;font-size:18px">Your Paypal Email</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['paypal_email'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="bTransfer")
    
   <input type="hidden" name="bTransfer_bank_name" value="{{$order_data['reqData']['bTransfer_bank_name'] }}">
    <input type="hidden" name="bTransfer_account" value="{{$order_data['reqData']['bTransfer_account'] }}">
    <input type="hidden" name="bTransfer_ac_name" value="{{$order_data['reqData']['bTransfer_ac_name'] }}">
    <input type="hidden" name="bTransfer_ref" value="{{$order_data['reqData']['bTransfer_ref'] }}">
   




    <tr>
    <td style="font:bold;font-size:18px">Bank Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bTransfer_bank_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Account Number</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bTransfer_account'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Account name</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bTransfer_ac_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Reference</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bTransfer_ref'] }}</td>
    </tr>

   


@elseif($order_data['reqData']['paymentVal']=="cashDeposit")
    
   <input type="hidden" name="cashDeposit_bank_name" value="{{$order_data['reqData']['cashDeposit_bank_name'] }}">
    <input type="hidden" name="cashDeposit_account" value="{{$order_data['reqData']['cashDeposit_account'] }}">
    <input type="hidden" name="cashDeposit_ac_name" value="{{$order_data['reqData']['cashDeposit_ac_name'] }}">
    <input type="hidden" name="cashDeposit_ref" value="{{$order_data['reqData']['cashDeposit_ref'] }}">
   




    <tr>
    <td style="font:bold;font-size:18px">Bank Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['cashDeposit_bank_name'] }}</td>
    </tr>
 
    <tr>
    <td style="font:bold;font-size:18px">Account Number</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['cashDeposit_account'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Account name</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['cashDeposit_ac_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Reference</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['cashDeposit_ref'] }}</td>
    </tr>

   
@elseif($order_data['reqData']['paymentVal']=="bank_wire")
    
   <input type="hidden" name="bankwire_holder_name" value="{{$order_data['reqData']['bankwire_holder_name'] }}">
    <input type="hidden" name="bankwire_swift_card" value="{{$order_data['reqData']['bankwire_swift_card'] }}">
    <input type="hidden" name="bankwire_bank_name" value="{{$order_data['reqData']['bankwire_bank_name'] }}">
    <input type="hidden" name="bankwire_iban" value="{{$order_data['reqData']['bankwire_iban'] }}">
    <input type="hidden" name="bankwire_country" value="{{$order_data['reqData']['bankwire_country'] }}">




    <tr>
    <td style="font:bold;font-size:18px">A/c Holder Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bankwire_holder_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Swift Card</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bankwire_swift_card'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Bank Name</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bankwire_bank_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">IBAN</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bankwire_iban'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Country</td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['bankwire_country'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="westren_union")
    
    <input type="hidden" name="westrenunion_full_name" value="{{$order_data['reqData']['westrenunion_full_name'] }}">
    <input type="hidden" name="westrenunion_address" value="{{$order_data['reqData']['westrenunion_address'] }}">
    <input type="hidden" name="westrenunion_country" value="{{$order_data['reqData']['westrenunion_country'] }}">
    <input type="hidden" name="westrenunion_phone_no" value="{{$order_data['reqData']['westrenunion_phone_no'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Full Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['westrenunion_full_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Address</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['westrenunion_address'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Country</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['westrenunion_country'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Phone No</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['westrenunion_phone_no'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="perfect_money")

    <input type="hidden" name="perfectmoney_pm_id" value="{{$order_data['reqData']['perfectmoney_pm_id'] }}">
    
    <tr>
    <td style="font:bold;font-size:18px">PM ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['perfectmoney_pm_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="payza")

    <input type="hidden" name="payza_payza_email" value="{{$order_data['reqData']['payza_payza_email'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Payza Email</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['payza_payza_email'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="payoneer")

    <input type="hidden" name="payoneer_payoneer_email" value="{{$order_data['reqData']['payoneer_payoneer_email'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Payoneer Email</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['payoneer_payoneer_email'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="webmoney")
    
    <input type="hidden" name="webmoney_webmoney_purse" value="{{$order_data['reqData']['webmoney_webmoney_purse'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Webmoney Purse</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['webmoney_webmoney_purse'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="okpay")
    
    <input type="hidden" name="okpay_okpay_email" value="{{$order_data['reqData']['okpay_okpay_email'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Okpay Email</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['okpay_okpay_email'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="skrill")
    
    <input type="hidden" name="skrill_skrill_email" value="{{$order_data['reqData']['skrill_skrill_email'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Skrill Email</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['skrill_skrill_email'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="nettler")
    
    <input type="hidden" name="nettler_nettler_id" value="{{$order_data['reqData']['nettler_nettler_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Nettler ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['nettler_nettler_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="dash")
    
    <input type="hidden" name="dash_dash_id" value="{{$order_data['reqData']['dash_dash_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">dash ID</td>
    <td style="font:bold;font-size:18px" > &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['dash_dash_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="money_gram")
    
    <input type="hidden" name="moneygram_full_name" value="{{$order_data['reqData']['moneygram_full_name'] }}">
    <input type="hidden" name="moneygram_address" value="{{$order_data['reqData']['moneygram_address'] }}">
    <input type="hidden" name="moneygram_country" value="{{$order_data['reqData']['moneygram_country'] }}">
    <input type="hidden" name="moneygram_phone_no" value="{{$order_data['reqData']['moneygram_phone_no'] }}">
    <tr>
    <td style="font:bold;font-size:18px">Full Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['moneygram_full_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Address</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['moneygram_address'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Country</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['moneygram_country'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Phone No</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['moneygram_phone_no'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="credit_card")
   
    <input type="hidden" name="creditcard_card_number" value="{{$order_data['reqData']['creditcard_card_number'] }}">
    <input type="hidden" name="creditcard_expiry" value="{{$order_data['reqData']['creditcard_expiry'] }}">
    <input type="hidden" name="creditcard_cvv" value="{{$order_data['reqData']['creditcard_cvv'] }}">
    <tr>
    <td style="font:bold;font-size:18px">Card Number</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['creditcard_card_number'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Expiry m/y</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['creditcard_expiry'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">CVV</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['creditcard_cvv'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="instaforex")
    
    <input type="hidden" name="instaforex_instaforex_id" value="{{$order_data['reqData']['instaforex_instaforex_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Instaforex</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['instaforex_instaforex_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="solid_trust_pay")
    
    <input type="hidden" name="solidtrustpay_std_id" value="{{$order_data['reqData']['solidtrustpay_std_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">STD ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['solidtrustpay_std_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="us_bank")
    
    <input type="hidden" name="usbank_us_id" value="{{$order_data['reqData']['usbank_us_id'] }}">
    <input type="hidden" name="usbank_expiry" value="{{$order_data['reqData']['usbank_expiry'] }}">
    <input type="hidden" name="usbank_cvv" value="{{$order_data['reqData']['usbank_cvv'] }}">

    <tr>
    <td style="font:bold;font-size:18px">US ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['usbank_us_id'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Expiry m/y</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['usbank_expiry'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">CVV</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['usbank_cvv'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="advcash")
    
    <input type="hidden" name="advcash_wallet_id" value="{{$order_data['reqData']['advcash_wallet_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Wallet ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['advcash_wallet_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="alipay_china")
    
    <input type="hidden" name="alipaychina_email_id" value="{{$order_data['reqData']['alipaychina_email_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Email ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['alipaychina_email_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="paysafecard")
    
    <input type="hidden" name="paysafecard_email_id" value="{{$order_data['reqData']['paysafecard_email_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Email ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['paysafecard_email_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="onecard")
    
    <input type="hidden" name="onecard_email_id" value="{{$order_data['reqData']['onecard_email_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Email ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['onecard_email_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="sofort")
    
    <input type="hidden" name="sofort_email_id" value="{{$order_data['reqData']['sofort_email_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Email ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['sofort_email_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="qivi_wallet")
    
    <input type="hidden" name="qiviwallet_id" value="{{$order_data['reqData']['qiviwallet_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['qiviwallet_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="entromoney")
    
    <input type="hidden" name="entromoney_wallet_address" value="{{$order_data['reqData']['entromoney_wallet_address'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Wallet Address</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['entromoney_wallet_address'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="mobile_wallet")
    
    <input type="hidden" name="mobilewallet_full_name" value="{{$order_data['reqData']['mobilewallet_full_name'] }}">
    <input type="hidden" name="mobilewallet_phone_number" value="{{$order_data['reqData']['mobilewallet_phone_number'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Full Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['mobilewallet_full_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Phone Number</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['mobilewallet_phone_number'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="wordremit")
    
    <input type="hidden" name="wordremit_wallet_address" value="{{$order_data['reqData']['wordremit_wallet_address'] }}">
    <input type="hidden" name="wordremit_swift_card" value="{{$order_data['reqData']['wordremit_swift_card'] }}">
    <input type="hidden" name="wordremit_bank_name" value="{{$order_data['reqData']['wordremit_bank_name'] }}">
    <input type="hidden" name="wordremit_iban" value="{{$order_data['reqData']['wordremit_iban'] }}">
    <input type="hidden" name="wordremit_country" value="{{$order_data['reqData']['wordremit_country'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Wallet Address</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['wordremit_wallet_address'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Swift Card</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['wordremit_swift_card'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Bank Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['wordremit_bank_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">IBAN</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['wordremit_iban'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Country</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['wordremit_country'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="mobile_pay")
    
    <input type="hidden" name="mobilepay_full_name" value="{{$order_data['reqData']['mobilepay_full_name'] }}">
    <input type="hidden" name="mobilepay_phone_number" value="{{$order_data['reqData']['mobilepay_phone_number'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Full Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['mobilepay_full_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Phone Number</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['mobilepay_phone_number'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="capital_one")
    
    <input type="hidden" name="capitalone_email_id" value="{{$order_data['reqData']['capitalone_email_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Email ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['capitalone_email_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="apple_pay")
   
   <input type="hidden" name="applepay_full_name" value="{{$order_data['reqData']['applepay_full_name'] }}">
   <input type="hidden" name="applepay_phone_number" value="{{$order_data['reqData']['applepay_phone_number'] }}">

   <tr>
    <td style="font:bold;font-size:18px">Full Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['applepay_full_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Phone Number</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['applepay_phone_number'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="chase_quick_pay")
    
    <input type="hidden" name="chasequickpay_email_id" value="{{$order_data['reqData']['chasequickpay_email_id'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Email ID</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['chasequickpay_email_id'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="transfer_wise")
    
    <input type="hidden" name="transferwise_email_address" value="{{$order_data['reqData']['transferwise_email_address'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Email Address</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['transferwise_email_address'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="venmo_mobile_payment")
    
    <input type="hidden" name="venmomobilepayment_full_name" value="{{$order_data['reqData']['venmomobilepayment_full_name'] }}">
    <input type="hidden" name="venmomobilepayment_phone_number" value="{{$order_data['reqData']['venmomobilepayment_phone_number'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Full Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['venmomobilepayment_full_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Phone Number</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['venmomobilepayment_phone_number'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="xoom_money_transfer")
    
    <input type="hidden" name="xoommoneytransfer_email_address" value="{{$order_data['reqData']['xoommoneytransfer_email_address'] }}">

    <tr>
    <td style="font:bold;font-size:18px">Email Address</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['xoommoneytransfer_email_address'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="swift_transfer")
    
    <input type="hidden" name="swifttransfer_holder_name" value="{{$order_data['reqData']['swifttransfer_holder_name'] }}">
    <input type="hidden" name="swifttransfer_swift_card" value="{{$order_data['reqData']['swifttransfer_swift_card'] }}">
    <input type="hidden" name="swifttransfer_bank_name" value="{{$order_data['reqData']['swifttransfer_bank_name'] }}">
    <input type="hidden" name="swifttransfer_iban" value="{{$order_data['reqData']['swifttransfer_iban'] }}">
    <input type="hidden" name="swifttransfer_country" value="{{$order_data['reqData']['swifttransfer_country'] }}">
    <tr>
    <td style="font:bold;font-size:18px">A/c Holder Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['swifttransfer_holder_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Swift Card</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['swifttransfer_swift_card'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Bank Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['swifttransfer_bank_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">IBAN</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['swifttransfer_iban'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Country</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['swifttransfer_country'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="direct_bank_deposit")
    
    <input type="hidden" name="directbankdeposit_holder_name" value="{{$order_data['reqData']['directbankdeposit_holder_name'] }}">
    <input type="hidden" name="directbankdeposit_bank_name" value="{{$order_data['reqData']['directbankdeposit_bank_name'] }}">
    <input type="hidden" name="directbankdeposit_iban" value="{{$order_data['reqData']['directbankdeposit_iban'] }}">
    <input type="hidden" name="directbankdeposit_country" value="{{$order_data['reqData']['directbankdeposit_country'] }}">
    <tr>
    <td style="font:bold;font-size:18px">A/c Holder Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['directbankdeposit_holder_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Bank Name</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['directbankdeposit_bank_name'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">IBAN</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['directbankdeposit_iban'] }}</td>
    </tr>

    <tr>
    <td style="font:bold;font-size:18px">Country</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['directbankdeposit_country'] }}</td>
    </tr>

@elseif($order_data['reqData']['paymentVal']=="buy_virtual_card")
    
    <input type="hidden" name="buyvirtualcard_email_address" value="{{$order_data['reqData']['buyvirtualcard_email_address'] }}">
    <tr>
    <td style="font:bold;font-size:18px">Email Address</td>
    <td style="font:bold;font-size:18px"> &nbsp;&nbsp;&nbsp;&nbsp; {{$order_data['reqData']['buyvirtualcard_email_address'] }}</td>
    </tr>

@endif

<td style="font:bold;font-size:18px"><b>Order Date</b></td>
<td style="font:bold;font-size:18px">&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ date('d-m-yy') }}</b>
    <input type="hidden" name="order_date" value="{{ date('d-m-yy') }}">
</td>
</tr>
<tr>

</tr>
</tbody>
</table>

{{-- <input type="submit" name="confirm_oder" id="confirm_order" class="form-control" value="Confirm" style="    background-color:#fab915;
  font-weight: bold; "> --}}
<button type='submit' class="text-white btn-block btn btn-success btn-lg shadow-sm border-0">Confirm</button>
</form>
</div>
<div class="col-md-3">
</div>
</div>
</div>
</div> <p>&nbsp;</p>
</div>


 </div>
  @endsection  
@section('footer')
@endsection
