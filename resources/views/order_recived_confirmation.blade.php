@extends('frontLayout')
@section('meta')
@php
$meta=App\MetaTag::find(1)->first();
echo $meta->home;
@endphp
@endsection
@section('content')
<div class="container my-5 card" style="background-image:url(im/bg-img/bg-2.jpg);    position: relative;
    z-index: 2;
    background-position: center center;
    background-size: cover;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    border: 1px solid white;
    background-color: black ">
    <h1 style="text-align:center;margin-top:50px;color: white">Order Received</h1>
    <h2 style="text-align:center;margin-top:50px;color: white">....</h2>
    <p style="text-align: center;"><img src="thanks1.png" alt="Bitcoin Card" class="" width="200" height="180" style="" /></p>
    <div style="text-align:center;">
        <h4><strong style="color: white"> Thanks, We have Receive your order, Now it is on Manual
        review,</br> </br> Soon you will receive your payment in your account.</strong><h4>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-12">
            
            
            
            <div class="row" id="post-review-box">
                <div class="col-md-12">
                    
                </div>
            </div>
            
            
        </div>
    </div>
</div>
@endsection
@section('footer')

<style type="text/css" media="screen">
  *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    /*top:-9999px;*/
    display: none;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */  
</style>

<script>
    $(document).ready(function(){
   
$('.ratev').click(function(e){

let valRate=$(this).attr('valueget');


$('#ratings-hidden').val(valRate);


})
    });
</script>
@endsection