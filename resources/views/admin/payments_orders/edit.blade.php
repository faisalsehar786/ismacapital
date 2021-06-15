@extends('admin_layout')
@section('admin_content')


	<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<div class="h5 pd-20 mb-0">Edit Order</div>
					</div>
					<div class="box-content">
						
		
						@if(!empty($all_data))	
						@foreach($all_data as $data)
						<form class="form-horizontal" action="{{URL::to('/update-order-value',$data->id)}}" method="post">
						  <fieldset>
							{{csrf_field()}} 

							 @php
                           App\Recived_Orders::where('id',$data->id)->update(['view_admin'=>'yes']);

                                        @endphp
                            <input type="hidden" name="Order_idC" class="Order_idC" value="{{ $data->id }}">
							<div class="control-group">
							  <label class="control-label" for="date01"><b>Order Number</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="order_number" value="{{ $data->order_number }}" required>
							  </div>

							</div>

							
							<div class="control-group">
							  <label class="control-label" for="date01"><b>Payment Method</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="payment_method" value="{{ $data->payment_method }}" required readonly="">
							  </div>
							  
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01"><b>Reciver Wallet Address</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="reciver_wallet_address" value="{{ $data->reciver_wallet_address }}" required>
							  </div>
							  
							</div>



							<div class="control-group">
							  <label class="control-label" for="date01"><b>Transection ID</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="transection_id" value="{{ $data->transection_id }}" >
							  </div>
							  
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01"><b>Transection URL</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="transection_url" value="{{ $data->transection_url }}" >
							  </div>
							  
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01"><b>Recived {{ $data->coinType }}</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="recived_bitcoin" value="{{ $data->recived_bitcoin}}" required readonly="">
							  </div>
							  
							</div>


								<div class="control-group">
							  <label class="control-label" for="date01"><b>Invoice Click here</b></label>

							  <div class="controls">
								<a href="{{ asset('invoice') }}/{{ $data->invoice }}">Invoice</a>
							  </div>
							  
							</div>



							<div class="control-group">
							  <label class="control-label" for="date01"><b>{{ $data->coinType }} Value</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="bitcoin_current_val" value="{{ $data->bitcoin_current_val }}" required readonly="">
							  </div>
							  
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01"><b>Commission Fee</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="commission_fee" value="{{ $data->commission_fee }}" required>
							  </div>
							  
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01"><b>Recived Total Amount</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="recived_total_amount" value="{{ $data->recived_total_amount }}" required readonly="">
							  </div>
							  
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01"><b>Order Date</b></label>

							  <div class="controls">
								<input type="text" class="form-control" name="order_date" value="{{ $data->order_date	 }}" required>
							  </div>
							  
							</div>
   

							<div class="control-group">
							  <label class="control-label" for="date01"><b>Status</b></label>
                              <select name="status" class="form-control statusc" >
                              	<?php if ($data->status=='off'): ?>
                              	<option value="off" selected="">Pendding</option>
                              	<option value="on">Recived </option>
                              	<?php endif ?>

                              	<?php if ($data->status=='on'): ?>
                                 <option value="on" selected="">Recived</option>
                              	<option value="off">Pendding</option>
                              	
                              	<?php endif ?>
                            
                              </select>
						
							  
							</div>


							@php
								
							$payment_method=$data->payment_method;


								
							if($payment_method=='paypal')
						      {

						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Paypal Email</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='paypal_email' value='$data->paypal_email' required>
											</div>
											  
											</div>";
						      }else if($payment_method=='bTransfer')
						      {

						       echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Bank Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bTransfer_bank_name' value='$data->bTransfer_bank_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Account Number</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bTransfer_account' value='$data->bTransfer_account' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Account name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bTransfer_ac_name' value='$data->bTransfer_ac_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Reference</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bTransfer_ref' value='$data->bTransfer_ref' required>
											</div>
											  
											</div>";									
						      }
                             else if($payment_method=='cashDeposit')
						      {

						       echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Bank Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='cashDeposit_bank_name' value='$data->cashDeposit_bank_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Account Number</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='cashDeposit_account' value='$data->cashDeposit_account' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Account name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='cashDeposit_ac_name' value='$data->cashDeposit_ac_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Reference</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bTransfer_ref' value='$data->cashDeposit_ref' required>
											</div>
											  
											</div>";									
						      }else if($payment_method=='bank_wire')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Bank Holder Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bankwire_holder_name' value='$data->bankwire_holder_name' required>
											</div>
											  
											</div>

											<div class='control-group'>
											<label class='control-label' for='date01'><b>Bankwire Swift Card</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bankwire_swift_card' value='$data->bankwire_swift_card' required>
											</div>
											  
											</div>


											<div class='control-group'>
											<label class='control-label' for='date01'><b>Bank Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bankwire_bank_name' value='$data->bankwire_bank_name' required>
											</div>
											  
											</div>


											<div class='control-group'>
											<label class='control-label' for='date01'><b>IBAN</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bankwire_iban' value='$data->bankwire_iban' required>
											</div>
											  
											</div>";
								
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Country</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='bankwire_country' value='$data->bankwire_country' required>
											</div>
											  
											</div>";												
						      }




						      else if($payment_method=='westren_union')
						      {

						       echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Full Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='westrenunion_full_name' value='$data->westrenunion_full_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Address</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='westrenunion_address' value='$data->westrenunion_address' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Country</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='westrenunion_country' value='$data->westrenunion_country' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Phone No</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='westrenunion_phone_no' value='$data->westrenunion_phone_no' required>
											</div>
											  
											</div>";									
						      }
						      else if($payment_method=='perfect_money')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>PM ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='perfectmoney_pm_id' value='$data->perfectmoney_pm_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='payza')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Payza Email</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='payza_payza_email' value='$data->payza_payza_email' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='payoneer')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Payoneer Email</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='payoneer_payoneer_email' value='$data->payoneer_payoneer_email' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='webmoney')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Webmoney Purse</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='webmoney_webmoney_purse' value='$data->webmoney_webmoney_purse' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='okpay')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Okpay Email</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='okpay_okpay_email' value='$data->okpay_okpay_email' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='skrill')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Skrill Email</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='skrill_skrill_email' value='$data->skrill_skrill_email' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='nettler')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Nettler ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='nettler_nettler_id' value='$data->nettler_nettler_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='dash')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Dash ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='dash_dash_id' value='$data->dash_dash_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='money_gram')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Full Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='moneygram_full_name' value='$data->moneygram_full_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Moneygram Address</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='moneygram_address' value='$data->moneygram_address' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Country</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='moneygram_country' value='$data->moneygram_country' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Phone No</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='moneygram_phone_no' value='$data->moneygram_phone_no' required>
											</div>
											  
											</div>";									
						      }
						      else if($payment_method=='credit_card')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Card Number</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='creditcard_card_number' value='$data->creditcard_card_number' required>
											</div>
											  
											</div>";

								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Card Expiry</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='creditcard_expiry' value='$data->creditcard_expiry' required>
											</div>
											  
											</div>";

								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>CVV</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='creditcard_cvv' value='$data->creditcard_cvv' required>
											</div>
											  
											</div>";

						      }
						      else if($payment_method=='instaforex')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Instaforex ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='instaforex_instaforex_id' value='$data->instaforex_instaforex_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='solid_trust_pay')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>STD ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='solidtrustpay_std_id' value='$data->solidtrustpay_std_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='us_bank')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>US ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='usbank_us_id' value='$data->usbank_us_id' required>
											</div>
											  
											</div>";

								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Expiry</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='usbank_expiry' value='$data->usbank_expiry' required>
											</div>
											  
											</div>";

								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>CVV</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='usbank_cvv' value='$data->usbank_cvv' required>
											</div>
											  
											</div>";						
						      }
						      else if($payment_method=='advcash')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Wallet ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='advcash_wallet_id' value='$data->advcash_wallet_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='alipay_china')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='alipaychina_email_id' value='$data->alipaychina_email_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='paysafecard')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='paysafecard_email_id' value='$data->paysafecard_email_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='onecard')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='onecard_email_id' value='$data->onecard_email_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='sofort')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='sofort_email_id' value='$data->sofort_email_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='qivi_wallet')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='qiviwallet_id' value='$data->qiviwallet_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='entromoney')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Wallet_Address</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='entromoney_wallet_address' value='$data->entromoney_wallet_address' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='mobile_wallet')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Full Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='mobilewallet_full_name' value='$data->mobilewallet_full_name' required>
											</div>
											  
											</div>";

								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Phone Number</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='mobilewallet_phone_number' value='$data->mobilewallet_phone_number' required>
											</div>
											  
											</div>";			
						      }
						      else if($payment_method=='wordremit')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Wallet Address</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='wordremit_wallet_address' value='$data->wordremit_wallet_address' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Swift Card</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='wordremit_swift_card' value='$data->wordremit_swift_card' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Bank Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='wordremit_bank_name' value='$data->wordremit_bank_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>IBAN</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='wordremit_iban' value='$data->wordremit_iban' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Country</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='wordremit_country' value='$data->wordremit_country' required>
											</div>
											  
											</div>";												
						      }
						      else if($payment_method=='mobile_pay')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Full Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='mobilepay_full_name' value='$data->mobilepay_full_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Phone Number</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='mobilepay_phone_number' value='$data->mobilepay_phone_number' required>
											</div>
											  
											</div>";			
						      }
						      else if($payment_method=='capital_one')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='capitalone_email_id' value='$data->capitalone_email_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='apple_pay')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Full Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='applepay_full_name' value='$data->applepay_full_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Phone Number</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='applepay_phone_number' value='$data->applepay_phone_number' required>
											</div>
											  
											</div>";			
						      }
						      else if($payment_method=='chase_quick_pay')
						      {
						        		echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email ID</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='chasequickpay_email_id' value='$data->chasequickpay_email_id' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='transfer_wise')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email Address</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='transferwise_email_address' value='$data->transferwise_email_address' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='venmo_mobile_payment')
						      {
						        	echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Full Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='venmomobilepayment_full_name' value='$data->venmomobilepayment_full_name' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='xoom_money_transfer')
						      {
						      	echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email Address</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='xoommoneytransfer_email_address' value='$data->xoommoneytransfer_email_address' required>
											</div>
											  
											</div>";
						      }
						      else if($payment_method=='swift_transfer')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Holder Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='swifttransfer_holder_name' value='$data->swifttransfer_holder_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Swift Card</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='swifttransfer_swift_card' value='$data->swifttransfer_swift_card' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Bank Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='swifttransfer_bank_name' value='$data->swifttransfer_bank_name' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>IBAN</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='swifttransfer_iban' value='$data->swifttransfer_iban' required>
											</div>
											  
											</div>";
								echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Country</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='swifttransfer_country' value='$data->swifttransfer_country' required>
											</div>
											  
											</div>";												
						      }
						      else if($payment_method=='direct_bank_deposit')
						      {
						        	echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Holder Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='directbankdeposit_holder_name' value='$data->directbankdeposit_holder_name' required>
											</div>
											  
											</div>";
									echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Bank Name</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='directbankdeposit_bank_name' value='$data->directbankdeposit_bank_name' required>
											</div>
											  
											</div>";
									echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>IBAN</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='directbankdeposit_iban' value='$data->directbankdeposit_iban' required>
											</div>
											  
											</div>";
									echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Country</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='directbankdeposit_country' value='$data->directbankdeposit_country' required>
											</div>
											  
											</div>";																  
						      }
						      else if($payment_method=='buy_virtual_card')
						      {
						        echo "<div class='control-group'>
											<label class='control-label' for='date01'><b>Email Address</b></label>

											<div class='controls'>
												<input type='text' class='form-control' name='buyvirtualcard_email_address' value='$data->buyvirtualcard_email_address' required>
											</div>
											  
											</div>";
						      }
							@endphp





          				<!-- <div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update</button>
							</div> -->
							 </fieldset>
						</form>  
							@endforeach
							@endif
						  

					</div>
				</div>
			</div>




@endsection

@section('footer')
<script type="text/javascript">
	
	$(document).ready(function () {
function sendMailtoudUser(idofo){
$.ajax({
url:"{{ route('sendMailConf_ajax') }}",
 
type:"POST",

dataType:"json",

data:{orderIdret:idofo,_token:"{{ csrf_token() }}"},

success:function(res2)
{
console.log(res2);
}
});

}
   
    $('.statusc').change(function(){

	var Order_status=$(this).val();
	var Order_idC=$('.Order_idC').val();
	

   $.ajax({


url:"{{ route('update_order_value_ajax') }}",
 
type:"POST",

dataType:"json",

data:{orderId:Order_idC,Order_status:Order_status,_token:"{{ csrf_token() }}"},

success:function(res)
{
if(res.status=='done'){

swal({
  title: "Status Update Successfully Are Want Send Email  To User ?",
  text: "",
  icon: "success",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

  	sendMailtoudUser(res.orderIdret);
    // swal("Poof! Your imaginary file has been deleted!", {
    //   icon: "success",
    // });
  } else {
    // swal("Your imaginary file is safe!");
  }
});


// swal({
//   title: "Status Updated Successfully",
//   text: "",
//   icon: "success",
//   button: "ok",
// });

}


}

});

});



	});
</script>
@endsection