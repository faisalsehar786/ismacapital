 <div class="col-lg-4 pb-5 ">

            <!-- Account Sidebar-->

              <div class="author-card pb-3" style="border-radius: 4px;">

                <div class="author-card-cover" style="background-image: url({{ asset('img') }}/{{ Auth::user()->profile_photo_path }});"><a class="btn btn-style-1 btn-white btn-sm" href="#" data-toggle="tooltip" title="" data-original-title="You currently have 290 Reward points to spend"></a></div>

                <div class="author-card-profile">

                    <div class="author-card-avatar">

                      @if (!empty(Auth::user()->profile_photo_path))

                        <img src="{{ asset('img') }}/{{ Auth::user()->profile_photo_path }}" alt="Daniel Adams" class="rounded  img-thumbnail" >

                      @else





                        <img src="{{ asset('img') }}/no-preview-available.png" alt="Daniel Adams">

                      @endif



                    </div>

                    <div class="author-card-details">
                         <h5 class="author-card-name text-lg">Ref#: {{ Auth::user()->user_ref }} </h5>
                        <h5 class="author-card-name text-lg">{{ Auth::user()->name }} </h5><span class="author-card-position">Member Since :{{ Auth::user()->created_at->format('d M Y')  }}</span>

                    </div>

                </div>

            </div>

            <div class="wizard">

                <nav class="list-group list-group-flush shadow-sm    bg-white rounded">

                

                    <a class="list-group-item " href="{{ route('my_profile') }}"><i class="fe-icon-user text-muted"></i>Profile Settings</a>

                  
                       <a class="list-group-item" href="{{ route('my_profile_buy_order') }}">

                        <div class="d-flex justify-content-between align-items-center">

                            <div><i class="fe-icon-heart mr-1 text-muted"></i>

                                <div class="d-inline-block font-weight-medium text-uppercase"> Buy Orders
                         {{--   @php
                            $orderCountbuy=\App\Recived_Orders::where('user_id',Auth::user()->id)->where('ordertype','buy')->where('view_user','no')->count();
                           @endphp
                           @if ($orderCountbuy>0)
                               &nbsp;&nbsp;<span class="badge badge-danger"style="background: #e23737;">{{$orderCountbuy  }}</span>
                           @endif --}}
                          
                                </div>

                            </div>

                        </div>

                    </a>

                     <a class="list-group-item" href="{{ route('my_profile_sell_order') }}">

                        <div class="d-flex justify-content-between align-items-center">

                            <div><i class="fe-icon-heart mr-1 text-muted"></i>

                                <div class="d-inline-block font-weight-medium text-uppercase">Sell Orders
{{-- 
                                 @php
                            $orderCountsell=\App\Recived_Orders::where('user_id',Auth::user()->id)->where('ordertype','sell')->where('view_user','no')->count();
                           @endphp
                           @if ($orderCountsell>0)
                               &nbsp;&nbsp;<span class="badge badge-danger"style="background: #e23737;"> {{$orderCountsell  }}</span> --}}
                         {{--   @endif --}}
                                </div>

                            </div>

                        </div>

                    </a>

                 
      <a class="list-group-item" href="{{ route('notification',['search'=>'inbox']) }}">

                        <div class="d-flex justify-content-between align-items-center">

                            <div><i class="fe-icon-heart mr-1 text-muted"></i>

                                <div class="d-inline-block font-weight-medium text-uppercase">Notifications

                                </div>

                            </div>

                        </div>

                    </a>

                 
   



 

                     


                  {{--   <a class="list-group-item" href="#">

                        <div class="d-flex justify-content-between align-items-center">

                            <div><i class="fe-icon-heart mr-1 text-muted"></i>

                                <div class="d-inline-block font-weight-medium text-uppercase">My Wishlist</div>

                            </div><span class="badge badge-secondary">3</span>

                        </div>

                    </a> --}}

                  

                </nav>

            </div>

        </div>