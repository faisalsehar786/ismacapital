@extends('frontLayout')
@section('title', 'Home')
@section('content')


<form action="{{ route('make_order') }}" method="post">
<div class=" card container" style="margin-top:30px;margin-bottom: 30px">
	<div class="row" style="margin-top: 20px;">
		<div class="col-sm-3">
			
		</div>
		 <div class="col-sm-6">
		 	<div class="input-group mb-3">
                <select   id="bitcoin_value" class="cointType" name="bitcoin_convert_to" style="background-color:#e9ecef;width:100% !important;margin-bottom: 20px">
                		<option value="select_currency">Select Currency</option>
	                    @foreach ($View_Bit_Cry_Prices as  $Prices)
                            <option value="{{$Prices->symbol }}" coin-id='{{$Prices->id }}' >{{$Prices->symbol }}</option>
                        @endforeach
                    </select>

                    <input type="number" name="bitcoin_entered_amount"  id="bitcoin_value" class="form-control bitcoin_valuefConverion" min="1" value="1" style="background-color:#e9ecef;margin-bottom:20px">


                    <select  id="bitcoin_convert_to" class="currencyType select_currency" name="bitcoin_convert_to" style="background-color:#e9ecef;width:100% !important;margin-bottom:20px">
		 		 		<option value="select_currency_to">Select Currency You Need</option>
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


			            <input type="number" name="bitcoin_converted_amount"  id="bitcoin_value" class="form-control bitcoin_converted_amount select_currency" readonly="">
        		</select>


            </div>
		 </div>
	</div>


{{-- <div class="row" style="margin-top: 20px;margin-bottom:20px;">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
		 	<div class="input-group mb-3">
                <input type="number" name="bitcoin_entered_amount"  id="bitcoin_value" class="form-control bitcoin_valuefConverion" min="1" value="1" style="background-color:#e9ecef">
            </div>
		 </div>
</div> --}}




{{-- <div class="row" style="margin-top: 20px;">
		<div class="col-sm-3">
			
		</div>
		 <div class="col-sm-6">
		 	<div class="input-group mb-3">
		 		 <select  id="bitcoin_convert_to" class="currencyType select_currency" name="bitcoin_convert_to" style="background-color:#e9ecef;width:100% !important;margin-bottom:20px">
		 		 		<option value="select_currency_to">Select Currency You Need</option>
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


			            <input type="number" name="bitcoin_converted_amount"  id="bitcoin_value" class="form-control bitcoin_converted_amount select_currency" readonly="">
        		</select>
            </div>
		 </div>
	</div> --}}



	<div class="row" style="margin-top: 20px;margin-bottom:20px;">
		<div class="col-sm-3">
			
		</div>
		 <div class="col-sm-6">
		 	<div class="input-group mb-3">
                <select id="bitcoin_value" class="paymentVal" name="paymentVal" style="width: 100%;background-color:#e9ecef">
                	<option>Select Payment Method</option>
                    <option value="paypal">Paypal</option>
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
                    <option value="buy_virtual_card">Buy Virtual Card</option>
                </select>
                                        
            </div>
		 </div>
	</div>

	






<div class="row" style="margin-top: 20px;margin-bottom:20px;">

		<div class="col-sm-3">
			
		</div>

		 <div class="col-sm-6">
		 	<div class="input-group mb-3">
                <input type="text" name="paypal_email" class="paypal" placeholder="e.g abc@gmail.com" id="account_id" style="width: 100% !important;margin-bottom:20px" required >
                <input type="text" name="bankwire_holder_name"  placeholder="A/c Holder Name" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px" required>
                <input type="text" name="westrenunion_full_name"  placeholder="Full Name" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px" required>
                <input type="text" name="perfectmoney_pm_id"  placeholder="PM ID" id="account_id" class="perfect_money" style="width: 100% !important;margin-bottom:20px" required>
                <input type="email" name="payza_payza_email"  placeholder="Payza Email" id="account_id" class="payza" style="width: 100% !important;margin-bottom:20px" required>
                <input type="email" name="payoneer_payoneer_email"  placeholder="Payoneer Email" id="account_id" class="payoneer" style="width: 100% !important;margin-bottom:20px" required>
                <input type="text" name="webmoney_webmoney_purse"  placeholder="Webmoney Purse" id="account_id" class="webmoney" style="width: 100% !important;margin-bottom:20px" required>
                <input type="email" name="okpay_okpay_email"  placeholder="Okpay Email" id="account_id" class="okpay" style="width: 100% !important;margin-bottom:20px" required>
                <input type="email" name="skrill_skrill_email"  placeholder="Skrill Email" id="account_id" class="skrill" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="nettler_nettler_id"  placeholder="Nettler ID" id="account_id" class="nettler" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="dash_dash_id"  placeholder="Dash ID" id="account_id" class="dash" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="moneygram_full_name"  placeholder="Full Name" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="creditcard_card_number"  placeholder="Card Number" id="account_id" class="credit_card" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="instaforex_instaforex_id"  placeholder="Instaforex ID" id="account_id" class="instaforex" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="solidtrustpay_std_id"  placeholder="STD ID" id="account_id" class="solid_trust_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="usbank_us_id"  placeholder="US ID" id="account_id" class="us_bank" style="width: 100% !important;margin-bottom:20px" required>
                                        
                <input type="text" name="advcash_wallet_id"  placeholder="Wallet ID" id="account_id" class="advcash" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="alipaychina_email_id"  placeholder="Email ID" id="account_id" class="alipay_china" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="paysafecard_email_id"  placeholder="Email ID" id="account_id" class="paysafecard" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="onecard_email_id"  placeholder="Email ID" id="account_id" class="onecard" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="sofort_email_id"  placeholder="Email ID" id="account_id" class="sofort" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="qiviwallet_id"  placeholder="ID" id="account_id" class="qivi_wallet" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="wordremit_wallet_address"  placeholder="Wallet Address" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px" required>

{{-- Start///////////////////////////////////Start --}}
                <input type="text" name="mobilepay_full_name"  placeholder="Full Name" id="account_id" class="mobile_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="capitalone_email_id"  placeholder="Email ID" id="account_id" class="capital_one" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="applepay_full_name"  placeholder="Full Name" id="account_id" class="apple_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="chasequickpay_email_id"  placeholder="Email ID" id="account_id" class="chase_quick_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="transferwise_email_address"  placeholder="Email Address" id="account_id" class="transfer_wise" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="venmomobilepayment_full_name"  placeholder="Full Name" id="account_id" class="venmo_mobile_payment" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="riamoneytransfer_email_address"  placeholder="Email Address" id="account_id" class="ria_money_transfer" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="xoommoneytransfer_email_address"  placeholder="Email Address" id="account_id" class="xoom_money_transfer" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="swifttransfer_holder_name"  placeholder="A/c Holder Name" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="directbankdeposit_holder_name"  placeholder="A/c Holder Name" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="buyvirtualcard_email_address"  placeholder="Email Address" id="account_id" class="buy_virtual_card" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="mobilewallet_full_name"  placeholder="Full Name" id="account_id" class="mobile_wallet" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name=""  placeholder="Wallet Address" id="account_id" class="payco" style="width: 100% !important;margin-bottom:20px" required>
                                        
                <input type="text" name="entromoney_wallet_address"  placeholder="Wallet Address" id="account_id" class="entromoney" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="yandexmoney_email_address"  placeholder="Email Address" id="account_id" class="yandex_money" style="width: 100% !important;margin-bottom:20px" required>

                <input type="email" name="googlepay_gmail_id"  placeholder="Gmail ID" id="account_id" class="google_pay" style="width: 100% !important;margin-bottom:20px" required>

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



				<button type="submit" class="btn btn-primary mb-5" style="width:250px;background-color: orange;border:1px solid orange;height: 60px">Order Now</button>
                                        
            </div>
		 </div>
	</div>



	





</div>
</form>



<div class="container-fluid">
            <div class="row table_rows" style="background-color:white">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <center><div class=" " >
                        
                        <div class="card-body text-center shadow-lg border rounded mb-4">
                            
                            <div class="table-responsive">
                                <table id="coins-info-table" class="display coins-table dataTable table table-striped">
                                    <thead>
                                        <tr role="row">
                                            <th class="mobile-hide">Id</th>
                                            <th >Coin Name</th>
                                            <th >Price</th>
                                            <th class="mobile-hide">Market Cap</th>
                                            <th  class="mobile-hide" >Volume (24hr)</th>
                                            <th  class="mobile-hide">Supply</th>
                                            <th  class="mobile-hide">Change (24hr)</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($View_Bit_Cry_Prices as  $Prices)
                                        
                                        
                                        <tr>
                                            <td class="mobile-hide">{{ $Prices->id }}</td>
                                            <td>
                                                <span class="sprite sprite-{{ $Prices->slug }} small_coin_logo"></span>
                                                <div class="coin-code">{{ $Prices->symbol }}</div> <strong>{{ $Prices->name }}</strong>
                                            </td>
                                            <td class="market_capital  sorting_1" style="font-size:19px;font-weight: 600;width: 310px">$@php
                                               echo CH::Get_Latest_Additional_price()[0]->cryptocurrency_additional_price +$Prices->price;
                                            @endphp</td>
                                            <td class="price mobile-hide" data-usd="17,819.1743" style="font-size:19px;font-weight: 600;">{{ $Prices->num_market_pairs }}</td>
                                            <td class="volume mobile-hide" style="font-size:19px;font-weight: 600;">${{ $Prices->volume_24h }}</td>
                                            <td class="supply mobile-hide" style="font-size:19px;font-weight: 600;">${{ $Prices->total_supply }}</td>
                                            <td class="increment change mobile-hide" style="font-size:19px;font-weight: 600;">${{ $Prices->percent_change_24h }}</td>
                                            
                                        </tr>
                                        @endforeach
                                        {{--  @foreach ($View_Bit_Cry_Prices as $key => $Prices)
                                        <tr>
                                            <td>
                                                <span class="sprite sprite-{{ $Prices['id'] }} small_coin_logo"></span>
                                                <div class="coin-code">{{ $Prices['symbol'] }}</div> <strong>{{ $Prices['name'] }}</strong>
                                            </td>
                                            <td class="market_capital mobile-hide sorting_1" style="font-size:19px;font-weight: 600;width: 310px">{{ $Prices['marketCapUsd'] }}</td>
                                            <td class="price" data-usd="17,819.1743" style="font-size:19px;font-weight: 600;">{{ $Prices['priceUsd'] }}</td>
                                            <td class="volume mobile-hide" style="font-size:19px;font-weight: 600;"> {{ $Prices['volumeUsd24Hr'] }}</td>
                                            <td class="supply mobile-hide" style="font-size:19px;font-weight: 600;"> {{ $Prices['supply'] }}</td>
                                            <td class="increment change mobile-hide" style="font-size:19px;font-weight: 600;"> {{ $Prices['changePercent24Hr'] }}</td>
                                            
                                        </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>





@section('footer')

<script>
                    $(document).ready(function () {
    
                        $('.paypal').prop('required',true);
                       function GetbtcConvertedValues(){
                      var   coinid=$('option:selected').attr('coin-id');
                    
                    var coinVal= $('.bitcoin_valuefConverion').val();
                    var coinType= $('.cointType').val();
                    var currencyVal= $('.bitcoin_converted_amount').val();
                    var currencyType= $('.currencyType').val();
                    console.log(coinVal,coinType,currencyVal,currencyType,coinid);
                    // $('.loadercovreter').show();
                    $.ajax({
                    url:"{{ route('converter') }}",
                    type:"POST",
                    dataType:"json",
                    data:{coinVal:coinVal,coinType:coinType,currencyVal:currencyVal,currencyType:currencyType,coinid:coinid,_token:"{{ csrf_token() }}"},
                    success:function(res)
                    {

                        var converted_amount= + res.data.quote[currencyType].price + +{{ CH::Get_Latest_Additional_price()[0]->cryptocurrency_additional_price }};
                    $('.bitcoin_converted_amount').val(converted_amount);
                    // $('.loadercovreter').hide();
                    
                    console.log(res.data.quote[currencyType]);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log("Status: " + textStatus); console.log("Error: " + errorThrown);console.log("Error: " + errorThrown);
                    }
                    });
                 
                    }

                        GetbtcConvertedValues();
                   
                    $(".bitcoin_valuefConverion,.cointType,.currencyType").change(function() {
                    
                     GetbtcConvertedValues();
                    });
                   
                    
                    $('#coins-info-table').DataTable( {
                    
                    "pageLength": 25
                    } );
                    });
                    </script>
                    <style type="text/css">

                    .paypal,.bank_wire,.westren_union,.perfect_money,.payza,.payoneer,.webmoney,.okpay,.skrill,.nettler,.dash,.money_gram,.credit_card,.instaforex,.solid_trust_pay,.us_bank,.advcash,.alipay_china,.paysafecard,.onecard,.sofort,.qivi_wallet,.entromoney,.mobile_wallet,.mobile_pay,.capital_one,.apple_pay,.chase_quick_pay,.transfer_wise,.venmo_mobile_payment,.xoom_mobile_payment,.swift_transfer,.direct_bank_deposit,.buy_gift_card,.buy_virtual_card,.google_pay,.yandex_money,.payco,.ria_money_transfer,.xoom_money_transfer,.wordremit,.select_currency_to,.select_currency{
                    display: none;
                    </style>




{{-- payment method Javascript --}}
                    <script>
                    
                    let classesCss=['paypal','bank_wire','westren_union','perfect_money','payza','payoneer','webmoney','okpay','skrill','nettler','dash','money_gram','credit_card','instaforex','solid_trust_pay','us_bank','advcash','alipay_china','paysafecard','onecard','sofort','qivi_wallet','entromoney','mobile_wallet','mobile_pay','capital_one','apple_pay','chase_quick_pay','transfer_wise','venmo_mobile_payment','chase_quick_pay','swift_transfer','direct_bank_deposit','buy_gift_card','buy_virtual_card','google_pay','yandex_money','payco','ria_money_transfer','xoom_money_transfer','wordremit'];
                    
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


{{-- Currency you need  --}}


{{-- <script>
                    let classesCss1=['select_currency_to'];
                    
                    $('.currencyType').on('change', function() {
                    classesCss1.filter(word => word !=this.value);
                    classesCss1.map(function(key1, index) {
                    
                    $('.'+key1).show();
                      $('.'+key1).prop('required',false);
                    console.log(key1);
                    
                    });
                    $('.'+this.value).hide();
                     $('.'+this.value).prop('required',true);

                    });
</script> --}}



{{-- Select Currency like BTC,ETH --}}

    <script>
                    let classesCss1=['select_currency'];
                    
                    $('.cointType').on('change', function() {
                    classesCss1.filter(word => word !=this.value);
                    classesCss1.map(function(key1, index) {
                    
                    $('.'+key1).show();
                      $('.'+key1).prop('required',false);
                    console.log(key1);
                    
                    });
                    $('.'+this.value).hide();
                     $('.'+this.value).prop('required',true);

                    });
    </script>	

 @endsection  
 @endsection  