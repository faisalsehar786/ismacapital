@extends('frontLayout')

@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->support; 
@endphp
@endsection

@section('content')



<div class="breadcumb-area" style="background: black !important">

<div class="container h-100">

<div class="row h-100 align-items-center">

<div class="col-12 col-md-6">

<div class="breadcumb-text">

<h2>Support</h2>

</div>

</div>

</div>

</div>



<div class="breadcumb-thumb-area">

<div class="container">

<div class="row">

<div class="col-12">

<div class="breadcumb-thumb">

<img src="img/bg-img/breadcumb.png" alt="">

</div>

</div>

</div>

</div>

</div>

</div>

<div class="contact-map-area ">

<div class="container">

<div class="row">

<div class="col-12">

<div class="section-heading ">

<p><strong>ABOUT US</strong></p>

<p>Crypto is the currency of the future. ISM Capital offers you the most straightforward access to the best financial markets of the world. Whether you are an individual or an organization, new to cryptocurrency trading or an experienced enthusiast, ISM Capital was founded to empower you. We are here to give you a shot at the freedom that the cryptocurrency movement offers.</p>

<p>&nbsp;</p>

<p>Our products and services are based on the three-pronged pillars of freedom, security, and integrity. They are guaranteed to revolutionize the way you trade, exchange, and use money. With ISM Capital, you can save, sell, and buy cryptocurrency at your convenience.</p>

<p>&nbsp;</p>

<p>Our team is made up of experts in the various fields of trading, engineering, industry, finance, and customer service. Join us and you will bring greater opportunities, independence, and security to your cryptocurrency trading and exchange experience.</p>

<p>&nbsp;</p>

<p><strong>FAQ</strong></p>

<p><strong>Which countries do you operate in?</strong></p>

<p>Our services are available in almost every country of the world. We service well over 150 countries</p>

<p>&nbsp;</p>

<p><strong>What currencies do you accept?</strong></p>

<p>We mainly trade with the USD and the Euro but you can buy and sell in any currency of your choice by converting to USD, following the current exchange rate at the time of the trade or exchange. You may be charged an additional fee by your banking institution following these exchanges, and ISM Capital has no control over this.</p>

<p>&nbsp;</p>

<p><strong>What is your minimum order size?</strong></p>

<p>We have a minimum exchange of 50 Euros or 50 USD.</p>

<p>&nbsp;</p>

<p><strong>Why do I need to verify my identity?</strong></p>

<p>As with any financial institution, our verification process at ISM Capital is routine. It arises from the CDD (Customer Due Diligence) and KYC (Know Your Customer) protocols. Both of these protocols are simple anti-money laundering and anti-fraud protocols. When you verify your identity, it is proof that the institution you are dealing with is a legal and legitimate entity. If a site does not ask you to verify your identity, you should give them a wide berth.</p>

<p>&nbsp;</p>

<p><strong>Do you follow security protocols?</strong></p>

<p>Absolutely. We know that it takes a lot for you to trust us, and we are demonstrably worthy of that trust at every point. We have strict limits you cannot exceed without verification and we will never accept a deposit of over $500 from an unverified entity. IN this way, we can guarantee that the monies and assets of our customers and traders are always safe.</p>

<p>&nbsp;</p>

<p><strong>Can I trust you with my personal information?</strong></p>

<p>Again, yes. Your privacy is important to us, and we will never share your information or data with others &ndash; with or without your permission. We never share your information, period. We only keep your personal data for only as long as is absolutely necessary, after which it is expunged from our databases &ndash; forever! Check out our privacy policy for more information on how we use your data.</p>

<p>&nbsp;</p>

<p><strong>What identification documents do you need?</strong></p>

<p>Any legal document that proves you are who you say you are: a valid driver&rsquo;s license, an international passport, a government-issued national identity card or a permanent resident card. We are unable to process ID cards that merely show proof of age, National ID cards with Arabic or non-Latin letters, paper IDs, or laminated IDs.</p>

<p>&nbsp;</p>

<p><strong>What if I forget my password?</strong></p>

<p>Easy. We will send a reset link to your email. From there, you can reset your password.</p>

<p>&nbsp;</p>

<p><strong>Can I use debit/credit cards?</strong></p>

<p>Yes. We support a wide range of payments, including Perfect Money, Western Union, PayPal, Credit and Debit Cards, Bank transfers, direct deposits, and more.</p>

<p>&nbsp;</p>

<p><strong>What are your business hours?</strong></p>

<p>24 hours, 7 days, 365 days of the year (366 if it&rsquo;s a leap year).</p>

<p>&nbsp;</p>

<p><strong>How do I contact you?</strong></p>

<p>At any point in time, you can reach us through our website&rsquo;s live chat, our email address, or on our customer care phone number.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

</div>

</div>

</div>

</div>

</div>



  @endsection  



  <style type="text/css">

  	p{

  	    color:white !important;

  	}

  	.cryptos-btn.btn-2 {

    background-color: #BC873C !important;

}



.contact-information .single-contact-info .contact-icon i {



	 background-color: #BC873C !important;

}

  </style>

@section('footer')

@endsection

