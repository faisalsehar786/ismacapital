<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dashboard2') }}/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dashboard2') }}/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard2') }}/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard2') }}/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard2') }}/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard2') }}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard2') }}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('dashboard2') }}/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
			
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="{{ asset('dashboard2') }}/vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{ asset('dashboard2') }}/vendors/images/admin.jpg" alt="">
						</span>
						<span class="user-name">Admin</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
						
						<a class="dropdown-item" href="#"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div> 
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="/dashboard">

				<h3 style='color: #BC873C;'>ISM CAPITAL</h3>
			
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="/dashboard" class="dropdown-toggle no-arrow">
							<span class="mtext">Settings</span>
						</a>
						
					</li>
					<li class="dropdown">
						<a href="{{ route('edit_meta_Tag',['id'=>1]) }}" class="dropdown-toggle no-arrow">
							<span class="mtext">Pages Meta</span>
						</a>
						
					</li>
					<li class="dropdown">
						<a href="{{ route('get_all_user_data') }}" class="dropdown-toggle no-arrow">
							<span class="mtext">Memembers</span>
						</a>
						 @php
                            $userCount=\App\User::where('admin_view','no')->count();
                           @endphp
                           @if ($userCount>0)
                               &nbsp;&nbsp;<span class="badge badge-danger"style="background: #e23737;">New ({{$userCount  }})</span>
                           @endif
						
					</li>
					<li>
						<a href="{{ route('get_all_payments_orders_data') }}" class="dropdown-toggle no-arrow">
							<span class="mtext">Orders Sell Coins</span>
						</a>
					</li>

					<li>
						<a href="{{ route('get_all_payments_orders_data_buy') }}" class="dropdown-toggle no-arrow">
							<span class="mtext">Orders Buy Coins</span>
						</a>
					</li>

					<li>
						<a href="{{ route('blog-admin') }}" class="dropdown-toggle no-arrow">
							<span class="mtext">Blogs</span>
						</a>
					</li>


					<li>
						<a href="{{ route('review-admin') }}" class="dropdown-toggle no-arrow">
							<span class="mtext">Reviews</span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">


			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">75</div>
								<div class="font-14 text-secondary weight-500">Appointment</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">124,551</div>
								<div class="font-14 text-secondary weight-500">Total Patient</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">400+</div>
								<div class="font-14 text-secondary weight-500">Total Doctor</div>
							</div>
							<div class="widget-icon">
								<div class="icon"><i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">$50,000</div>
								<div class="font-14 text-secondary weight-500">Earning</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		

		
  
			<div class="card-box pb-10 pd-20">
				
				   @include('alerts')
				   @yield('admin_content')
			</div>

		
		</div>
	</div>
	<!-- js -->
	<script src="{{ asset('dashboard2') }}/vendors/scripts/core.js"></script>
	<script src="{{ asset('dashboard2') }}/vendors/scripts/script.min.js"></script>
	<script src="{{ asset('dashboard2') }}/vendors/scripts/process.js"></script>
	<script src="{{ asset('dashboard2') }}/vendors/scripts/layout-settings.js"></script>
	<script src="{{ asset('dashboard2') }}/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="{{ asset('dashboard2') }}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="{{ asset('dashboard2') }}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{ asset('dashboard2') }}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="{{ asset('dashboard2') }}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="{{ asset('dashboard2') }}/vendors/scripts/dashboard3.js"></script>
	 <script type="text/javascript" src="https://cdnjs.cliudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
     @yield('footer')
</body>
</html>