@extends('frontLayout')
@section('meta')
@php
$meta=App\MetaTag::find(1)->first();
echo $meta->home;
@endphp
@endsection
@section('content')
<div class="container my-5 card">
   
    <div class="row" style="margin-top:10px;">
        <div class="col-md-12">
            
            
            
            <div class="row" id="post-review-box">
                <div class="col-md-12">
                    <form accept-charset="UTF-8" action="{{ route('review') }}" method="post">
                        @csrf

                       
                         <input  name="order_id" type="hidden" required="" value="{{  $orderId }}">
                        <input id="ratings-hidden" name="rating" type="hidden" required="">
                        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5" required=""></textarea>
                        <br>
                        <div class="text-right">
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" class="ratev" title="5" valueget="5">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4"  class="ratev" title="4"  valueget="4">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" class="ratev" title="3"  valueget="3">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                            </div>
                            
                            <button class="btn btn-success btn-lg mt-3 mb-3" type="submit">Submit</button>
                        </div>
                    </form>
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