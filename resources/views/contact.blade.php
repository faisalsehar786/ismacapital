@extends('frontLayout')

@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->contact; 
@endphp
@endsection

@section('content')



<div class="breadcumb-area" style="background: black !important">

<div class="container h-100">

<div class="row h-100 align-items-center">

<div class="col-12 col-md-6">

<div class="breadcumb-text">

<h2>Contact</h2>

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

<div class="section-heading text-center mx-auto">

<h4 class='text-white'> <strong>Do you still have unanswered questions?</strong></h4>



</div>

</div>

</div>

<section class="contact-area ">

<div class="container">

<div class="row">



<div class="col-12 col-lg-12">

<div class="contact-information text-center mx-auto ">



<!--<div class="contact-social-info d-flex mt-50 mb-50">-->

<!--<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>-->

<!--<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->

<!--<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>-->

<!--<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>-->

<!--<a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>-->

<!--<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>-->

<!--</div>-->



<div class="single-contact-info ">

<div class="contact-icon mr-15">

<i class="fa fa-map"></i>

</div>

<p class="text-white">Office Address: Unit 303 18 Lower Burg St, Cape Town City Centre, Cape Town, 8000</p>

</div>



<div class="single-contact-info ">

<div class="contact-icon mr-15">

<i class="fa fa-phone"></i>

</div>

<p class="text-white"> <br> Office: +27 21 137 7000</p>

</div>



<div class="single-contact-info">

<div class="contact-icon mr-15">

<i class="fa fa-envelope-o"></i>

</div>

<p class="text-white">info@ismcapitals.com</p>

</div>

</div>

</div>





</div>

</div>

</section>

  @endsection  



  <style type="text/css">

  	

  	.cryptos-btn.btn-2 {

    background-color: #BC873C !important;

}



.contact-information .single-contact-info .contact-icon i {



	 background-color: #BC873C !important;

}

  </style>

@section('footer')

@endsection

