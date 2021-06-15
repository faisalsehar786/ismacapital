<!DOCTYPE html>
<html lang="en">
  <head>
    @yield('meta')
    {{-- include all css files and meta tags --}}
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('Bs4.min.css') }}">
    
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Core Stylesheet -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('toastalert.min.css') }}">
    <style type="text/css">
    .breakpoint-off .classynav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-box;
    
    }
    
    #preloader {
    display: none !important;
    }
    .loader {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: fixed;
    background: #1e1d1d82;
    z-index: 100;
    }
    .overlay__inner {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: absolute;
    }
    .overlay__content {
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    }
    .spinner {
    width: 120px;
    height: 120px;
    background: transparent;
    border: 16px solid #f3f3f3;
    border-radius: 50% !important;
    border-top: 16px solid #BC873C;
    display: inline-block;
    animation: spin 1s infinite linear;
    border-radius: 100%;
    border-style: solid;
    }
    html,body,p,h1,h2,h3,h4,h5,h6,span,label,div{
    font-family: poppins !important;
    }
    
    #scrollUp {
    background-color:  #BC873C !important;
    
    }
    
    
    @media (min-width: 1281px) {
    .logowid{
    
    width: 20%;
    }
    
    .customLogow{
    
    max-width:69% !important;
    height:auto  !important;
    }
    
    
    .classrowpaddincustom{
    
    padding: 0px 4% !important;
    }
    /* CSS */
    
    }
    /*
    ##Device = Laptops, Desktops
    ##Screen = B/w 1025px to 1280px
    */
    @media (min-width: 1025px) and (max-width: 1280px) {
    
    .classrowpaddincustom{
    
    padding: 0px 4% !important;
    }
    .logowid{
    
    width: 20%;
    }
    
    .customLogow{
    
    max-width:60% !important;
    height:auto  !important;
    }
    /* CSS */
    
    }
    /*
    ##Device = Tablets, Ipads (portrait)
    ##Screen = B/w 768px to 1024px
    */
    @media (min-width: 768px) and (max-width: 1024px) {
    
    .logowid{
    
    width: 20%;
    }
    
    .customLogow{
    
    max-width:69% !important;
    height:auto  !important;
    }
    /* CSS */
    
    }
    /*
    ##Device = Tablets, Ipads (landscape)
    ##Screen = B/w 768px to 1024px
    */
    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
    .customLogow{
    
    max-width:20% !important;
    height:auto  !important;
    }
    /* CSS */
    
    }
    /*
    ##Device = Low Resolution Tablets, Mobiles (Landscape)
    ##Screen = B/w 481px to 767px
    */
    @media (min-width: 481px) and (max-width: 767px) {
    .customLogow{
    
    max-width:25% !important;
    height:auto  !important;
    }
    /* CSS */
    
    }
    /*
    ##Device = Most of the Smartphones Mobiles (Portrait)
    ##Screen = B/w 320px to 479px
    */
    @media (min-width: 320px) and (max-width: 480px) {
    
    .customLogow{
    
    max-width:25% !important;
    height:auto  !important;
    }
    
    }
    .icon {
    cursor: pointer;
    
    }
    .icon span {
    background: #f00;
    padding: 7px;
    border-radius: 50%;
    color: #fff;
    vertical-align: top;
    margin-left: -25px
    }
    .icon img {
    display: inline-block;
    width: 26px;
    margin-top: 4px
    }
    .icon:hover {
    opacity: .7
    }
    .logo {
    flex: 1;
    margin-left: 50px;
    color: #eee;
    font-size: 20px;
    font-family: monospace
    }
    .notifications {
    width: 300px;
    height: 0px;
    opacity: 0;
    position: absolute;
    top: 87px;
    right: 4px;
    border-radius: 5px 0px 5px 5px;
    background-color: #fff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
    }
    .notifications h2 {
    font-size: 14px;
    padding: 10px;
    border-bottom: 1px solid #eee;
    color: #999
    }
    .notifications h2 span {
    color: #f00
    }
    .notifications-item {
    display: flex;
    border-bottom: 1px solid #eee;
    padding: 6px 9px;
    margin-bottom: 0px;
    cursor: pointer
    }
    .notifications-item:hover {
    background-color: #eee
    }
    .notifications-item img {
    display: block;
    width: 50px;
    height: 50px;
    margin-right: 9px;
    border-radius: 50%;
    margin-top: 2px
    }
    .notifications-item .text h4 {
    color: #777;
    font-size: 16px;
    margin-top: 3px
    }
    .notifications-item .text p {
    color: #aaa;
    font-size: 12px
    }
    </style>
    <!-- Favicon -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C9VXHSTBQC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-C9VXHSTBQC');
    </script>
    
  </head>
  <body style="background-color: black">
    <div id="alert_popover">
    <div class="wrapper">
     <div class="contentreplace">

     </div>
    </div>
   </div>
    <audio id="audio" src="{{ asset('piece-of-cake-611.mp3') }}"></audio>
    {{-- <form action="{{ URL::to('create-order') }}" method="POST">
      <input type="submit" name="">
    </form> --}}
    <!-- ##### Preloader ##### -->
    {{-- <div id="preloader">
      <i class="circle-preloader"></i>
    </div> --}}
    <div class="loader" style="">
      <div class="overlay__inner">
        <div class="overlay__content"><span class="spinner"></span></div>
      </div>
    </div>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area shadow-lg" style="background-color: black !important;";>
      
      <!-- Navbar Area -->
      <div class="cryptos-main-menu bg-white">
        <div class="classy-nav-container breakpoint-off bg-white">
          <div class="container ">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cryptosNav" style="background-color:black !important;">
              {{-- <a class="nav-brand" href=""><img src="img/logo3.webp" alt=""></a> --}}
              <a href="/" class="logowid">
                
                <img src="{{ asset('img/Logo final- white back-01.png') }}" class="img-fluid customLogow">
              </a>
              <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
              </div>
              <div class="classy-menu">
                <div class="classycloseIcon">
                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <div class="classynav" style="
                  background: black;
                  ">
                  
                  <h4  class=' p-2 shadow-lg coinValassign' style="margin-right:30px;color: #ffff;border: 3px solid;
                  border-radius: 30px; ">SELL BTC:${{  CH::Get_Sell_Setting_price() }}</h4>        <ul >
                    <li><a href="/" style="color: #BC873C">Home</a></li>
                    
                    
                    <li><a href="/sell"  style="color:#BC873C">Sell</a></li>
                    <li><a href="/buy"  style="color:#BC873C">Buy</a></li>
                    <li><a href="/blog"  style="color:#BC873C">Blog</a></li>
                    
                    <li><a href="/support" style="color:#BC873C">Support</a></li>
                    <li><a href="/legal" style="color:#BC873C">Legal</a></li>
                    <li><a href="/contact" style="color:#BC873C">Contact</a></li>
                    @if (Auth::check())
                    
                    
                    <li>
                    <a href="{{ route('my_profile') }}"  style="color:#BC873C"> </span>My Account
                    
                  </a>
                </li>
                <li>
                  <a href="javascript:void" onclick="$('#logout-formlogout').submit();" style="color:#BC873C"> </span>Logout </a>
                </li>
                <form id="logout-formlogout" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                @else
                <li><a href="/login" class="loginregisterbtn  btn-outline-primary  btn-lg text-white font-weight-bold shadow-lg text-decoration-none" style="background-color: #BC873C;
                  border: 1px solid orange;
                border-radius: 27px;">Login/Register</a></li>
                @endif
                @if (Auth::check())
                <li>
                
                  &nbsp;&nbsp;<span class="badge badge-danger"style="background: #e23737;" id="conternote">0</span>
                 
                  <div class="icon" id="bell"> <img src="{{ asset('AC7dgLA.png') }}" alt="">
                     
                    
                    
                    
                  </div>
                  <div class="notifications" id="box" style="opacity: 1;height: auto; display: none;">
                    <h2>Unread Notifications - <span id="noticount">0</span></h2>
                     
                    <div id="notificationsContent">
                      
                    
                  

                    </div>
                   
                  </div>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
@yield('content')
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
  <!-- Main Footer Area -->
  <div class="main-footer-area section-padding-100 bg-overlay" style="background-color:rgb(34, 39, 41)">
    {{-- background-image: url(img/bg-img/bg-1.jpg); --}}
    <div class="container">
      <div class="row">
        <!-- Footer Widget Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          
          <div class="footer-widget mb-100">
            <div class="widget-title">
              <h6>ABOUT COMPANY</h6>
            </div>
            <div class="single--blog-post">
              <p>Crypto is the currency of the future. ISM Capital offers you the most straightforward access to the best financial markets of the world. Whether you are an individual or an organization, new to cryptocurrency trading or an experienced enthusiast, ISM Capital was founded to empower you. We are here to give you a shot at the freedom that the cryptocurrency movement offers.</p>
            </div>
            {{--  <div class="single--blog-post">
              <a href="#">
                <p>1 btc to cad rate Canada local trading</p>
              </a>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Best exchange to sell bit coin for cash</p>
              </a>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Convert bitcoin to Australian dollars</p>
              </a>
            </div> --}}
            
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          
          <div class="footer-widget mb-100">
            <div class="widget-title">
              <h6>MOST POPULAR TOP PAGES</h6>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Home</p>
              </a>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Sell/Buy</p>
              </a>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Exchange</p>
              </a>
            </div>
            
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          
          <div class="footer-widget mb-100">
            <div class="widget-title">
              <h6>X-UA-Compatible</h6>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Instant transfer btc to moneygram</p>
              </a>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Spend btc usd to inr western union</p>
              </a>
            </div>
            <div class="single--blog-post">
              <a href="#"><p>Sell btc to wmz conversion calculator</p></a>
            </div>
            
          </div>
        </div>
        <style>
        .carousel-wrap {
        margin: 90px auto;
        padding: 0 5%;
        width: 80%;
        position: relative;
        }
        /* fix blank or flashing items on carousel */
        .owl-carousel .item {
        position: relative;
        z-index: 100;
        -webkit-backface-visibility: hidden;
        }
        /* end fix */
        .owl-nav > div {
        margin-top: -26px;
        position: absolute;
        top: 50%;
        color: #cdcbcd;
        }
        .owl-nav i {
        font-size: 52px;
        }
        .owl-nav .owl-prev {
        left: -30px;
        }
        .owl-nav .owl-next {
        right: -30px;
        }
        .owl-nav.disabled{
        display:block !important;
        }
        </style>
        <style type="text/css" media="screen">
        *{
        margin: 0;
        padding: 0;
        }
        .rate {
        float: right;
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
        color:#ffc107;
        }
        .rate:not(:checked) > label:before {
        content: '★ ';
        }
        
        </style>
        {{--  <div class="container">
          <div class="carousel-wrap" style="width:100% !important;margin: 0px 0px 52px 0px;">
            <div class="owl-carousel">
              @if (\App\Review::count()>0)
              @php
              
              
              
              $Reviews=\App\Review::where('del','no')->orderBy('id','DESC')->get();
              
              @endphp
              @foreach ($Reviews as  $review)
              <div class="item card p-2 text-center" style="height: 371px;min-height: 371px; background: #bc873c5e !important">
                <div class="row">
                  <div class="col-12">
                    <p class="text-white">{{ Str::limit($review->review, 130) }}</p>
                    <div class="rate">
                      @if ($review->rating==1)
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==2)
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==3)
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" class="ratev" title="3"  valueget="3">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==4)
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4"  class="ratev" title="4"  valueget="4">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" class="ratev" title="3"  valueget="3">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==5)
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
                      @endif
                      
                    </div>
                  </div>
                  <div class="px-4 text-center">
                    @php
                    $user=\App\User::where('id',$review->user_id)->first();
                    @endphp
                    @if (isset($user))
                    
                    @if (!empty($user->profile_photo_path ))
                    
                    
                    <img class="text-center " src="{{ asset('img') }}/{{$user->profile_photo_path }}" class="img-thumbnail img-fluid" alt="Cinque Terre" style="width: 80px;height: 80px; border-radius:46px;">
                    
                    @endif
                    <p class="text-white">{{$user->name }}</p>
                    <p class="text-success">Date:{{  date('d-m-y', strtotime($review->created_at) ) }}</p>
                    
                    
                    
                    
                    @endif
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div> --}}
        <style type="text/css" media="screen">
        .text {
        color: white;
        text-align: center
        }
        .folded-corner:hover .text {
        visibility: visible;
        color: white;
        }
        .Services-tab {
        margin-top: 10px
        }
        .folded-corner {
        padding: 60px 30px;
        position: relative;
        font-size: 100%;
        text-decoration: none;
        color: #999;
        height: 428px;
        background: transparent;
        transition: all ease .5s;
        border: 1px solid #BC873C;
        }
        .folded-corner:hover {
        background-color: #BC873C;
        }
        .folded-corner:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        border-style: solid;
        border-width: 0 0px 0px 0;
        border-color: #ddd #000;
        transition: all ease .3s
        }
        .folded-corner:hover:before {
        background-color: #D00003;
        border-width: 0 50px 50px 0;
        border-color: #eee #000
        }
        .service_tab_1 {
        background-color: #000
        }
        .service_tab_1:hover .fa-icon-image {
        color: white;
        transform: scale(1.5)
        }
        .fa-icon-image {
        color: white;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        line-height: 1;
        font-size-adjust: none;
        font-stretch: normal;
        -moz-font-feature-settings: normal;
        -moz-font-language-override: normal;
        text-rendering: auto;
        transition: all .65s linear 0s;
        text-align: center;
        transition: all 1s cubic-bezier(.99, .82, .11, 1.41)
        }
         #alert_popover
  {
   display:block;
   position:absolute;
   bottom:50px;
   left:50px;
  }
  .wrapper {
    display: table-cell;
    vertical-align: bottom;
    height: auto;
    width:200px;
  }
  .alert_default
  {
   color: #333333;
   background-color: #f2f2f2;
   border-color: #cccccc;
  }
        </style>
        <div class="container text-center">
          <div class="row">
            @if (\App\Review::count()>0)
            @php
            
            
            
            $Reviews=\App\Review::where('del','no')->orderBy('id','DESC')->paginate(6);
            
            @endphp
            @foreach ($Reviews as  $review)
            <div class="col-md-4 Services-tab item">
              <div class="folded-corner service_tab_1">
                <div class="text">
                  @php
                  
                  $user=\App\User::where('id',$review->user_id)->first();
                  @endphp
                  @if (isset($user))
                  
                  @if (!empty($user->profile_photo_path ))
                  
                  
                  <img class="text-center " src="{{ asset('img') }}/{{$user->profile_photo_path }}" class="img-thumbnail img-fluid" alt="Cinque Terre" style="width: 80px;height: 80px; border-radius:46px;">
                  
                  @endif
                  
                  <p class="text-success">{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</p>
                  
                  
                  
                  
                  @endif
                  <p class="item-title">
                    <h5 class="text-white">
                        @if (isset($user))
                     {{$user->name }}
                     @else
                     User is Deleted
                     @endif
                 </h5>
                    </p><!-- /.item-title -->
                    <p class="text-white">{{ Str::limit($review->review, 130) }}</p>
                    <div class="rate">
                      @if ($review->rating==1)
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==2)
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==3)
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" class="ratev" title="3"  valueget="3">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==4)
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4"  class="ratev" title="4"  valueget="4">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" class="ratev" title="3"  valueget="3">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" class="ratev" title="2"  valueget="2">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" class="ratev" title="1"  valueget="1">1 star</label>
                      @endif
                      @if ($review->rating==5)
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
                      @endif
                      
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>
            <div class="text-center mt-3 mx-auto">
              
              {{ $Reviews->links() }}
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="bottom-footer-area" style="background-color: rgb(34, 39, 41)">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center ">
          <div class="col-12">
            <p class="text-white">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">SBSS</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ##### Footer Area Start ##### -->
  <!-- ##### All Javascript Script ##### -->
  <!-- jQuery-2.2.4 js -->
  <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
  <!-- Popper js -->
  <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  <!-- All Plugins js -->
  <script src="{{ asset('js/plugins/plugins.js') }}"></script>
  <!-- Active js -->
  <script src="{{ asset('js/active.js') }}"></script>
  <script src="{{ asset('toastalert.min.js') }}"></script>
  <script type="text/javascript">

  @if (Auth::check())


 $(document).ready(function(){




toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

 function play() {

   var audio = document.getElementById("audio");
       

$.ajax({

url:"{{ route('getFreshNotification') }}",

type:"POST",

dataType:"json",

data:{user_id:'',_token:"{{ csrf_token() }}"},

success:function(res)

{

  console.log(res);
  let tempn=res.output.map(function(key, index) {
   return` <div class="notifications-item" style="${(key.view_user=='no')? '':'background: aliceblue'}"> 

    <div class="text">
    <p>
   
    New order no ${key.order_number} and Coin ${key.coinType} has been ${key.ordertype} ${(key.view_user=='no')? '<span class="badge bg-danger ms-2 text-white">unread</span>':'<span class="badge bg-success ms-2 text-white ">Read</span>'}

     </p>
    
    </div>
    </div>`;
    });
                   
 
$("#conternote").text(res.count);
$(".conternote").text(res.count);
$("#noticount").text(res.count);
$('#notificationsContent').html(tempn);
if(res.output2.length>0){
  audio.play();
  let objret=res.output2[0];
let descp=`New order no ${objret.order_number} and Coin ${objret.coinType} has been ${objret.ordertype} Please Check Notifications Inbox...!`;
toastr.success(descp,'');
}
  



},

error: function(XMLHttpRequest, textStatus, errorThrown) {

console.log("Status: " + textStatus); console.log("Error: " + errorThrown);console.log("Error: " + errorThrown);

}

});

       
      }
   setInterval(function(){
 play(); 
},7000);
 });
@endif
  $(document).ready(function(){
  var down = false;
  $('#bell').click(function(e){
  var color = $(this).text();
  if(down){
  $('#box').hide();
  down = false;
  }else{
  $('#box').show();
  down = true;
  }
  });

  $('#notificationsContent').click(function(){
window.location.href='/notification/inbox';

  })
  });

  $(document).ready(function() {
  $(".loader").fadeOut(3000);
  });
  </script>
  
  @yield('footer')
</body>
</html>