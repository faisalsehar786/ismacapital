@extends('frontLayout')

@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->legal; 
@endphp
@endsection

@section('content')



<div class="breadcumb-area" style="background: black !important">

<div class="container h-100">

<div class="row h-100 align-items-center">

<div class="col-12 col-md-6">

<div class="breadcumb-text">

<h2>Legal</h2>

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

<p><strong>TERMS OF USE</strong></p>

<p><strong>Acceptance of Terms</strong></p>

<p>By using this website and our services, you agree that you have read, understood, and agreed to these terms of service. If you disagree with any of the terms, please do not continue to this website.</p>

<p>&nbsp;</p>

<p><strong>Our Service</strong></p>

<p>We enable our users to transfer payments and make monetary deposits to third parties. Such third parties are not restricted to brokerage services, cryptocurrency exchanges, financial institutions, and marketplaces. You may not perform any fraudulent or false transactions on this website.</p>

<p>You may not use this website if you are below eighteen (18) years old.</p>

<p>You accept that all information that you supply us with is true and accurate to the best of your knowledge.</p>

<p>You agree that we are not responsible for the behavior of any exchanges or third party marketplaces or their services.</p>

<p>We will not be liable for the exchange rate, reliability, quality, usability, or the type of services provided by the marketplace or exchange.</p>

<p>If you incur any losses from such exchanges and/or marketplaces, we will not be liable or held responsible for it.</p>

<p>&nbsp;</p>

<p><strong>Registration and User Account</strong></p>

<p>To access our services, you must be registered with us by providing valid and accurate personal details via the registration form available on our website. Your registration is subject to verification, and if we discover that you have intentionally provided false information, your access to our services may be temporarily or permanently revoked.</p>

<p>&nbsp;</p>

<p><strong>PRIVACY POLICY</strong></p>

<p><strong>At ISM Capital, we are committed to protecting your privacy and the integrity of the information you supply us with. This privacy policy therefore informs you of the ways in which we use your data and personal information, and the rights and options that you have as a user of this website, and by extension, our services. </strong></p>

<p><strong>&nbsp;</strong></p>

<p><strong>Consent</strong></p>

<p>By using this site, you agree to the terms of this privacy policy. If you disagree with the terms of this policy as stated below, please do not access or use this website in any way whatsoever.</p>

<p><strong>&nbsp;</strong></p>

<p><strong>Information we collect</strong></p>

<p>We collect non-identifiable information through which it is impossible for you to be personally identified, and non-personal information like your computer&rsquo;s operating system, your screen resolution, the type of browser with which you access our services, the duration of time you spend on our website, and your keyboard language. Non-personal information is only collected to help us assess your eligibility to use the services on our website. If, at any time, any non-personal information can be linked to you, or may be used in personally identifying you, we regard it as personal information.</p>

<p>We also collect personal information which through reasonable effort may be used to personally identify you. Information like your IP Address and device identifiers are collected for personalization and for the prevention of fraud. You may be required to fill in a form that provides us with your full name, email address, billing address, physical address, government-issued identity card, gender, nationality, banking details, card details, and country of residence.</p>

<p>Should you decide not to provide this information, you may be unable to use our services.</p>

<p>&nbsp;</p>

<p><strong>For What Reasons Do We Collect Information?</strong></p>

<p>We collect non-personal and personal information for billing, risk analysis, and to operate our services; for research, statistical and analytical purposes; to discover, avoid and, when necessary, address fraud such as financial fraud, or in some cases, identity fraud and some technical or security issues; to meet our regulatory obligations; to help us further improve on our services and to personalize our services to our users; to provide statistical data to our business partners and financiers; to provide answers to support questions and requests; to satisfy any and every regulation, government request and/or legal process; to protect our rights as a company, and the rights of our users as well as those of the general public; and to implement this privacy policy as well as to investigate any violations or infractions thereof.</p>

<p><strong>&nbsp;</strong></p>

<p><strong>Third Parties</strong></p>

<p>We may disclose personal information with third parties in cases of banks that acquire and issue credit and debit cards, with authenticators and data services, and with our cloud service providers.</p>

<p>&nbsp;</p>

<p><strong>Storing and Retaining Information</strong></p>

<p>Any information that we store is done so on secure servers all around the world. We only hold on to your personal information for only as long as is necessary. If you wish to delete your information with us, please contact us.</p>

<p>&nbsp;</p>

<p><strong>Minors</strong></p>

<p>To be eligible to use our services, you must be a legal adult over the age of eighteen (18). We may request proof of age if we suspect that a minor is trying to use our services.</p>

<p>&nbsp;</p>

<p><strong>Cookies</strong></p>

<p>We use cookies that may store information on your computer and which help us offer you more personalized services that are tailored towards your needs.</p>

<p>&nbsp;</p>

<p><strong>Changes to the Privacy Policy</strong></p>

<p>We reserve the right to make changes to this privacy policy without issuing prior notice.</p>

<p>&nbsp;</p>

<p><strong>Questions</strong></p>

<p>If you have any questions concerning the terms of this privacy policy, please contact us.</p>

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

