@extends('frontLayout')

@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->home; 
@endphp
@endsection

@section('content')

<div class="container pt-2">

    <div class="row">
       <div class="col-md-3">
            
        </div>
         <div class="col-md-3">
          <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
<a href="/sell" class=" btn-outline-success  btn-lg text-white font-weight-bold shadow-lg text-decoration-none text-capitalize btn-block text-center" style=";
    background-color: #28A745;
    border: 1px solid orange;
    border-radius: 27px;"> SELL BTC:$ {{  CH::Get_Sell_Setting_price() }}</a>
</p> 
        </div> 
         <div class="col-md-3">

              <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
<a href="/buy" class=" btn-warning btn-lg text-white font-weight-bold shadow-lg text-decoration-none text-capitalize btn-block text-center" style=";
   
    border: 1px solid orange;
    border-radius: 27px;">BUY BTC:$ {{  CH::Get_Buy_Setting_price() }}</a> 
</p> 

          
        </div>  
  
         <div class="col-md-3">
            
        </div> 
    </div>
    
 
    
</div>
<img src="{{asset('img/coins (1) (2).png')}}" style="margin-top: 30px">

<div class="pt-3 pb-3 mt-2 mb-5" style='background-image: url("{{ asset('banner1-1.jpg') }}");
  background-color: #000000;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;'>
<div class="container ">
    {{-- success message display --}}

@if(session('message'))

<div class="alert alert-success alert-dismissible">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Success!</strong> {{ session('message') }}

</div>

@endif



{{-- error message display if company added --}}

@if(session('error'))

<div class="alert alert-danger alert-dismissible">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Alert!</strong> {{ session('error') }}

</div>

@endif
<div class="row align-items-center">
<div class="col-12">
<div class="dots"></div>
<div class="row align-items-center">
<div class="col-lg-7 ml-auto order-lg-2 aos-init aos-animate" data-aos="fade-right" data-aos-delay="400">
<img src="{{ asset('imgbtcthumb2.png') }}" alt="Image" class="img-fluid shadow-lg border img-thumbnail rounded">
</div> 
<div class="col-lg-5">
<  <h1 class="text-white text-capitalize" style="color:#BC873C !important;"><strong> ISM Capital The most <span style="color:#28A745">secure</span>  cryptocurrency <span style="color:#ffff"> solution for you</span></strong> </h1>
<div class="excerpt aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
<p class='text-white'>Crypto is the currency of the future. ISM Capital offers you the most straightforward access to the best financial markets of the world.</p>
</div> 

{{-- <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
<a href="/buy" class=" btn-primary btn-lg text-white font-weight-bold shadow-lg text-decoration-none" style=";
    background-color: #28A745;
    border: 1px solid orange;
    border-radius: 27px;">Buy Coin</a> 
<a href="/sell" class=" btn-outline-primary  btn-lg text-white font-weight-bold shadow-lg text-decoration-none" style=";
    background-color: #BC873C ;
    border: 1px solid orange;
    border-radius: 27px;">Sell Coin</a>
</p> --}}



</div> 
</div>
</div>
</div> 
</div>
</div>


<div class="container">

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


                // echo CH::Get_Latest_Additional_price()[0]->cryptocurrency_additional_price +$Prices->price;

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

<!-- ##### Course Area Start ##### -->







<div class="cryptos-feature-area " style=" background-color: #BC873C !important;">

<div class="container">

    

    <div class="text-center white mx-auto ">

         <h4 class="text-white py-5"><strong>WITH ISM CAPITAL, YOU CAN</strong></h4>

        </div>

    

<div class="row">

    <!-- Single Course Area -->

    <div class="col-12 col-lg-6 col-xl-3">

        <div class="single-feature-area active mb-100  rounded text-justify">

            <i class="icon-safebox text-center"></i>

            <h4 class="text-center  text-white">Buy Cryptocurrency Online</h4>

            <p>Purchase cryptocurrency on ISM CAPITAL instantaneously, in real time, with no delays</p>

        </div>

    </div>

    <!-- Single Course Area -->

    <div class="col-12 col-lg-6 col-xl-3">

        <div class="single-feature-area active mb-100 rounded text-justify">

            <i class="icon-bitcoin text-center"></i>

            <h4 class="text-center  text-white">Sell Cryptocurrency</h4>

            <p>Choose your rates when you sell your cryptocurrency on ISM CAPITAL. Get paid using any payment method of your choice.</p>

        </div>

    </div>

    <!-- Single Course Area -->

    <div class="col-12 col-lg-6 col-xl-3">

        <div class="single-feature-area active mb-100 rounded text-justify">

            <i class="icon-exchange text-center"></i>

            <h4 class="text-center text-white">Trade Securely</h4>

            <p style="padding-bottom:25px">We hold your cryptocurrency securely in our escrow until your trade has been successfully completed</p>

        </div>

    </div>

    <!-- Single Course Area -->

    <div class="col-12 col-lg-6 col-xl-3">

        <div class="single-feature-area active mb-100 rounded text-justify">

            <i class="icon-wallet text-center"></i>

            <h4 class="text-center  text-white">Earn Extra Income</h4>

            <p style="padding-bottom:25px">Get a steady stream of income when you invite others to trade, buy, and sell on ISM CAPITAL</p>

        </div>

    </div>

</div>

</div>

</div>

<!-- ##### Course Area End ##### -->

<!-- ##### About Area Start ##### -->

<div class="container-fluid let_exchange_class" style="background-color:rgb(34, 39, 41) !important">

<div class="row">

<div class="col-md-1">

    

</div>

<!--<div class="col-md-10">-->

<!--    <h4 class="text-center text-white" style="margin-top:20px;">Lorem Ipsum</h4>-->

<!--    <p class="text-justify text-white" style="margin-top: 30px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->

<!--    {{-- <img src="img/download.jpg" width="600" style="margin-top:30px"> --}}-->

<!--</div>-->





</div>

<div class="container" style="padding-bottom:40px;">



<!--<div class="col-md-5 ">-->

<!--    <img src="img/bitcoin.jpg" width="600" style="border-radius:20px;border:1px solid">-->

<!--</div>-->



<div class="text-center white mx-auto ">

         <h4 class="text-white py-5"><strong> WHAT WE OFFER</strong></h4>

        </div> 

<!-- Services section -->

    <section id="what-we-do">

    	<div class="container-fluid">

		<p class="text-center text-white">Many Ways to Buy, Sell, and Trade Cryptocurrency

Select your favorite payment method

</p>

			<div class="row mt-5">

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-1">

							<h3 class="card-title">Fast Payouts</h3>

							<p class="card-text">Get your cryptocurrency in real time - no delays, no waits.</p>

						

						</div>

					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-2">

							<h3 class="card-title">Best Commissions</h3>

							<p class="card-text">All transactions are carried out with no hidden charges or fees.</p>

						

						</div>

					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-3">

							<h3 class="card-title">Payments Globally</h3>

							<p class="card-text">We support over 150 countries and payments are accepted from almost anywhere</p>

							

						</div>

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card" >

						<div class="card-block block-4">

							<h3 class="card-title">ID Verification</h3>

							<p class="card-text">Get verified in 5 minutes, courtesy of our fast data processing.</p>

						

						</div>

					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-5">

							<h3 class="card-title">Live Support, 24/7</h3>

							<p class="card-text">We are available 24 hours a day, 7 days a week to answer all your questions by live chat and email.</p>

						

						</div>

					</div>

				</div>

				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-6">

							<h3 class="card-title">Vision and Mission</h3>

							<p class="card-text">Our aim at ISM Capital is to lead change in the world of finance and cryptocurrency trading. Our mission is to provide crypto solutions to traders and investors all around the world.</p>

						

						</div>

					</div>

				</div>

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-6">

							<h3 class="card-title">Live Charts </h3>

							<p class="card-text">We give you live cryptocurrency prices, and you can track their movements with our updated live and interactive charts. </p>

						

						</div>

					</div>

				</div>

				

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-6">

							<h3 class="card-title">Access Top Cryptos</h3>

							<p class="card-text">From the pioneering Bitcoin and the fast-growing Ethereum to the ubiquitous Ether, trade in any cryptocurrency of your choice. With over 100 cryptos on our list, we offer the most comprehensive list of Cryptocurrencies for you to buy, sell and trade. </p>

						

						</div>

					</div>

				</div>

				

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

					<div class="card">

						<div class="card-block block-6">

							<h3 class="card-title">Connect Your Money</h3>

							<p class="card-text">Buy, sell, trade, deposit, and withdraw in any currency whatsoever. Whether it’s Dollars, Euros, Pounds Sterling, or Lira, ISM Capital supports currencies from all over the world. Move your cryptocurrency very easily and execute trades in seconds. Use your debit and credit cards to purchase your digital currencies on ISM Capital. </p>

						

						</div>

					</div>

				</div>

			</div>

		</div>	

	</section>

	<!-- /Services section -->



   

 





</div>

<!-- ##### About Area End ##### -->

<!-- ##### Currency Area Start ##### -->

<section class="currency-calculator-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">

<div class="container">

<div class="row">

    <div class="col-12">

        <div class="section-heading text-center white mx-auto text-justify">

            

             <h4 class="text-white mb-4"><strong>WHY CHOOSE US?</strong></h4>

             

             <p>Cryptocurrency currently boasts the world&rsquo;s highest market cap in finance. Fiat currencies are slowly giving way to cryptocurrencies and the freedom that they offer their holders. And since the introduction of the Bitcoin and its leveraging of blockchain technology in 2009, many cryptocurrencies have quickly followed suit and gained enormous popularity.</p>

<p>The different values at which different cryptocurrencies exchange has quickly opened a hitherto unknown avenue into the world of cryptocurrency trading, buying, selling, and holding for speculative reasons.</p>

<p>Tens, then hundreds of exchange platforms, services, and websites have created to help people trade their Bitcoins and cryptocurrencies for a small fee - or even absolutely free. The milliondollar question, however is, how many of those platforms can be trusted with your information, your money, and your assets - both your cryptocurrencies and your money.</p>

<p>ISM Capital is one of the largest exchange services on the market today, with extremely high trust ratings. we are dominating the cryptocurrency market with a list of cryptocurrencies that are hard to find anywhere else. We have a database of millions of users who trust us with their trades and assets.</p>

<p>We do not prevent our users from buying large amounts of cryyptocurrencies or trading in them in any way. Rather, we encourage our website users and our traders to buy and trade as much as they want. Restricitng users and traders from purchasing high quantities of crytocurrencies can be discouraging, especially to full-time traders and investors who want to buy large amounts of cryptocurrencies. Our message to you is that we are open for trading, however and whenever you want. Our policies are free and fair to everyone, and whether you are a small-time trader or an accomplished investor, they are specially tailored to meet your specific purchase, selling, and trading needs.</p>

<p>One thing that sets ISM Capital apart from other trading platforms is our policy of reserving prices as soon as orders are made and confirmed.</p>

<p>The speed and rate at which ISM Capital executes trades and exchanges, and the speed and flexibility of our transfers of funds as well as cryptocurrencies, is unprecedented. What would take other exchange platforms weeks, we can do in a matter of hours on ISM Capital.</p>
<br>
<iframe width="100%" height="400"
src="{{asset('VID-20210125-WA0020.mp4')}}">
</iframe>
          </div>

</div>

</section>

<!-- ##### Currency Area End ##### -->

<!-- ##### Blog Area Start ##### -->

<section class="cryptos-blog-area section-padding-100" style="background-color: black;">

<div class="container card" style="padding: 40px;border-radius:20px  ">

      <h3 class="text-dark mb-4 text-center  py-4"><strong>  Our Features</strong></h3>

  

    <div class="row align-items-center">

        <div class="col-12 col-lg-6">

            <div class="blog-area">

                <div class="single-blog-area d-flex align-items-start ">

                    <div class="blog-thumbnail">

                        <img src="img/blog-img/paypal (2).png" alt="" style="border-radius:20px">

                    </div>

                    <div class="blog-content">

                        <h5><strong> Cryptocurrency to PayPal</strong> </h5>

                        <p class="text-dark">Our systems support the instant exchange of cryptocurrencies on PayPal. Hold, sell, and buy cryptocurrencies on PayPal and trade them on ISM Capital. </p>

                    </div>

                </div>

                <div class="single-blog-area d-flex align-items-start">

                    <div class="blog-thumbnail">

                        <img src="/directtrans.jpg" alt="" style="border-radius:20px">

                    </div>

                    <div class="blog-content">

                       <h5><strong> Withdraw Directly to Your Bank Account</strong> </h5>

                        <p class="text-dark">From your account on ISM Capital, you can withdraw directly to any bank account anywhere in the world. Receive money directly into your account though seamless and smooth wire transfers and direct deposits, with no hidden fees or charges.  </p>

                    </div>

                </div>

                <!--<div class="single-blog-area d-flex align-items-start">-->

                <!--    <div class="blog-thumbnail">-->

                <!--        <img src="img/blog-img/withdraw.png" alt="" style="border-radius:20px">-->

                <!--    </div>-->

                <!--    <div class="blog-content">-->

                <!--        <a href="#" class="post-title">Lorem lllIpsum</a>-->

                <!--        <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>-->

                <!--    </div>-->

                <!--</div>-->

                <!--<div class="single-blog-area d-flex align-items-start">-->

                <!--    <div class="blog-thumbnail">-->

                <!--        <img src="img/blog-img/westernunio.png" alt="" style="border-radius:20px;height: 90px">-->

                <!--    </div>-->

                <!--    <div class="blog-content">-->

                <!--        <a href="#" class="post-title">Lorem Ipsum</a>-->

                <!--        <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>-->

                <!--    </div>-->

                <!--</div>-->

            </div>

        </div>

        <div class="col-12 col-lg-6">

            <div class="blog-area">

                <div class="single-blog-area d-flex align-items-start">

                    <div class="blog-thumbnail">

                        {{-- <img src="img/blog-img/1.jpg" alt="" style="border-radius:20px"> --}}

                          <img src="img/blog-img/perfectmoney.png" alt="" style="border-radius:20px">

                    </div>

                    <div class="blog-content">

                       <h5><strong> 

Crypto on Perfect Money 

</strong> </h5>

                        

                        <p class="text-dark">Buy Bitcoins with your Perfect Money account on ISM Capital. ISM Capital is one of the very few exchange websites that offers you the opportunity to purchase Bitcoins with the convenience that Perfect Money offers. </p>

                    </div>

                </div>

                <div class="single-blog-area d-flex align-items-start">

                    <div class="blog-thumbnail">

                        {{-- <img src="img/blog-img/1.jpg" alt="" style="border-radius:20px"> --}}

                        <img src="/Western-Union.png" alt="" style="border-radius:20px">

                    </div>

                    <div class="blog-content">

                                    <h5><strong> 

Transfer from Western Union

</strong> </h5>

                        

                        <p class="text-dark">Western Union is one of the global leaders in the finance industry. To benefit from no restrictions on purchases and a more open approach to buying cryptocurrency, buy directly from Western Union on ISM Capital.  </p>

                    </div>

                </div>

            

            </div>

        </div>

    </div>

    

    

</section>

<!-- ##### Blog Area End ##### -->

<!-- Newsletter Area -->

<!--<div class="container-fluid" style="background-color:black;padding-left:130px;padding-right:130px;padding-bottom:40px">-->

<!--    <div class="row">-->

<!--        <div class="col-12">-->

<!--            <div class="newsletter-area mt-100" style="border-radius:20px; background-color: #BC873C !important;">-->

<!--                <div class="section-heading mx-auto">-->

<!--                    <h3 class="text-white text-center">Lorem Ipsum</h3>-->

<!--                    <p class="text-justify text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>-->

<!--                </div>-->

<!--                <div class="row">-->

<!--                    <div class="col-md-3">-->

                        

<!--                    </div>-->

<!--                    <div class="col-md-5 ">-->

<!--                        <img src="img/profile_image.jpg" class="rounded-circle">-->

<!--                    </div>-->

<!--                    <div class="col-md-4">-->

<!--                        <h3>Author Profile</h3><br><br>-->

<!--                        <strong>Name :</strong><span>Lorem Ipsum</span><br><br>-->

<!--                        <strong>Date of birth : </strong><span>01/01/0001</span><br><br>-->

<!--                        <strong>Address:</strong><span>Lorem Ipsum</span><br><br>-->

<!--                        <strong>Article post date : </strong><span>01/01/0001</span><br><br>-->

<!--                        <strong>Last updated :</strong><span>none</span><br><br>-->

<!--                        <strong>Total Views : </strong><span>00000</span>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->

<!--        </div>-->

<!--    </div>-->

<!--</div>-->

@endsection

@section('footer')

<script >

$(document).ready(function () {

$('.paypal').prop('required',true);

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
var multipyCount=res.PRICE*coinVal;

var CointPlusVal= + multipyCount + +{{ CH::Get_Latest_Additional_price()->cryptocurrency_additional_sell_price }};

var converted_amount=CointPlusVal-{{ CH::Get_Latest_Additional_price()->cryptocurrency_decremental_sell_price   }};

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

    .card{  

background: gainsboro !important;
    }
/*.coinValassign{
    display: none; 
}*/
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

.paypal,.bank_wire,.westren_union,.perfect_money,.payza,.payoneer,.webmoney,.okpay,.skrill,.nettler,.dash,.money_gram,.credit_card,.instaforex,.solid_trust_pay,.us_bank,.advcash,.alipay_china,.paysafecard,.onecard,.sofort,.qivi_wallet,.entromoney,.mobile_wallet,.mobile_pay,.capital_one,.apple_pay,.chase_quick_pay,.transfer_wise,.venmo_mobile_payment,.xoom_mobile_payment,.swift_transfer,.direct_bank_deposit,.buy_gift_card,.buy_virtual_card,.google_pay,.yandex_money,.payco,.ria_money_transfer,.xoom_money_transfer,.wordremit,.select_currency_to,.select_currency{

display: none;

}

</style>

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