@extends('frontLayout')

@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->blog; 
@endphp
@endsection

@section('content')



<div class="breadcumb-area" style="background: black !important">

<div class="container h-100">

<div class="row h-100 align-items-center">

<div class="col-12 col-md-6">

<div class="breadcumb-text">

<h2>Blog</h2>

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

{{-- <div class="row">

<div class="col-12"> --}}

{{-- <div class="section-heading "> --}}



<div class="row card p-3">


@foreach ($blogs as $element)

<div class="col-md-2 ">

<p class="text-success"> <strong>{{ date('d M Y', $element->created_at->timestamp) }}</strong></p>

</div>
<div class="col-md-10">
<h4 class="pb-1"> <strong>{{ $element->title }}</strong></h4>
<p class="pb-1">{!! Str::limit($element->des, 100) !!}</p>
<img src="{{ asset('img') }}/{{ $element->image }}" alt="" class="img-fluid img-thumbnail my-2" />
<div class="pb-4">
	<br>
<a href="{{ route('blog_single',['id'=>$element->id]) }}" class="btn-warning btn-outline-warning my-3 p-2 text-dark shadow-lg border-0"> Read More</a>	
</div>

</div>
<hr class="my-3">
@endforeach

{{ $blogs->links() }}
</div>


{{-- 	{{ dd($blogs) }} --}}

{{-- <p><strong>WHY YOU SHOULD INVEST IN CRYPTOCURRENCY NOW</strong></p>

<p>Cryptocurrency is the hottest investment for the 2020s.. And while many of us are taking advantage of the many opportunities that cryptocurrency affords, quite a lot of people still view cryptocurrency as a sort of alien technology that defies human understanding. Fiat money, goods, and services - that much, they understand. &ldquo;But how can you buy and sell virtual money?&rdquo; they ask. The answer is simple. Because, in the actual sense of the word, that is all that cryptocurrency is: virtual money.</p>
 
<p>If you are firmly in the group of those who are curious about cryptocurrency and wondering whether or not to jump on the merry bandwagon, here are a few reaons that will tip you solidly in the direction of investing:</p>

<p><strong>&nbsp;</strong></p>

<p><strong>Freedom and Independence: </strong>Cryptocurrency offers you the value of fiat money without the attendant, restrictive government policies. Although certain government policies are being put in place to control the trading and purchasing of cryptocurrencies, they are nowhere near as stifling as they are for fiat currencies (otherwise known as paper money). The level of independence that you get from buying, owning, and investing in cryptocurrencies is incomparable to what you get with fiat. Keeping money in yours or any other country&rsquo;s banking system keeps you at the mercy of that bank. You are subject to their rules and policies, and you take the interest rates they give you (if they do not deduct money from your acccount, anyway). And if your bank goes bankrupt or is robbed? Well, you can kiss your cash goodbye. Your money will be gone with the wind if your access to it is withdrawn or restricted by the government of your country. With Cryptocurrency, what is yours is yours. You have no need to rely on any other financial institutions to hold or transfer it for you. You do not need to pay them any fees for holding or transfering it either.</p>

<p>&nbsp;</p>

<p><strong>Insane Returns: </strong>A few short years ago, Bitcoin cost only a fraction of a dollar. On today&rsquo;s market, it costs over $35,000 USD for one single Bitcoin. A person who invested $100 in Bitcoin back then, would be a multi-millionaire by now. Even though they have only been with us for a short while, the rate at which demand for crypto has driven up market values is insane, and quite unprecedented. Cryptocurrencies have prices that change very quickly over a very short period of time. If you can wait, you are certain to get extremely high returns on your crypto - just as long as you sell when prices are high and buy when they&rsquo;re low.</p>

<p>&nbsp;</p>

<p><strong>Many Types</strong></p>

<p>There are many cryptocurrencies that you can invest in, and their availability offers you a lot of choice in your crypto investment journey. From Bitcoin to Ethereum, to Litecoin and Ripple, you have a wide choice of crypto to choose from.</p>

<p>&nbsp;</p>

<p><strong>Liquidity</strong></p>

<p>Any good asset must be liquid &ndash; easy to get, easy to dispose of. There are hardly any assets as liquid as crypto &ndash; not even gold or diamonds. Demand for cryptocurrency drives supply, and that makes it easy for them to be bought and sold off very easily. A variety of trading platforms also drive the liquidity of cryptocurrency, and you can always find someone who wants to buy crypto from you, or from whom you can buy.</p>

<p>&nbsp;</p>

<p><strong>Future</strong></p>

<p>Cryptocurrencies have only been around for a few years, but the world finance market already revolves around them. Even though price changes happen very often and very rapidly in cryptocurrencies, their significance is often greater when compared with normal fiat currencies. When cryptocurrencies grow, it is often very pronounced, running into hundreds and thousands of dollars. No matter what cryptocurrency you invest in, you are certain to have good future profits from it.</p>

<p>&nbsp;</p>

<p><strong>Simplicity</strong></p>

<p>Investing in global stock markets and business stock options will set you back thousands of dollars at least. You may also have to wait for months, even years, before you get your ROI. With cryptocurrencies, you have no such encumbrances. With as little as $100, you can be a proud owner of a cryptocurrency. You do not have to be a member of any institution: all you need to do is sign up for a wallet and start buying and saving your cryptocurrency.</p>

<p>&nbsp;</p>

<p>Like any other investment, you can be certain that investing in cryptocurrencies carries its own particular risk. But the benefits of investing in cryptocurrencies far outweigh the risks &ndash; unless you lose all your money, in which case, well&hellip; the risks become greater than the investments.</p> --}}

{{-- </div> --}}

{{-- </div>

</div> --}}

</div>

</div>



  @endsection  



  <style type="text/css">

  	/*p{

  	    color:white !important;

  	}

  	.cryptos-btn.btn-2 {

    background-color: #BC873C !important;

}



.contact-information .single-contact-info .contact-icon i {



	 background-color: #BC873C !important;

}*/

  </style>

@section('footer')

@endsection

