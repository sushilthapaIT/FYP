<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bakery</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo-top-1.png">
	<link
		href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
    @livewireStyles
</head>

<body class="home-page home-01 ">

	<!-- mobile menu -->
	<div class="mercado-clone-wrap">
		<div class="mercado-panels-actions-wrap">
			<a class="mercado-close-btn mercado-close-panels" href="#">x</a>
		</div>
		<div class="mercado-panels"></div>
	</div>

	<!--header-->
		<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item">
									<a title="Hotline: (+123) 456 789" href="#"><span
											class="icon label-before fa fa-mobile"></span>Hotline: (+977) 9812345323</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<!-- <li class="menu-item"><a title="Register or Login" href="login.html">Login</a></li>
								<li class="menu-item"><a title="Register or Login" href="register.html">Register</a> -->
								</li>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img
												src="{{asset('assets/images/lang-en.png')}}" alt="lang-en"></span>English lANG</i></a>
								</li>
								<li class="menu-item menu-item-has-children parent">
									<a title="Nepalese (NPR)" href="https://www.nrb.org.np/forex/">Nepalese (NPR)</a>
								</li>
								@if(Route::has('login'))    
								@auth
									@if(Auth::user()->utype === 'ADM')
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account ({{Auth::user()->name}})</a>
											<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="admin dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
										</li>
										<li class="menu-item">
													<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												</li>
										<form id="logout-form" method="POST" action="{{route('logout')}}">
												@csrf						
											</form>
										</ul>
										</li>			
									@else
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="User Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
										</li>
										<li class="menu-item">
													<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												</li>
										<form id="logout-form" method="POST" action="{{route('logout')}}">
												@csrf						
											</form>
											</ul>
										</li>	
									@endif
								@else
									<li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Login</a></li>
									<li class="menu-item"><a title="Register or Login" href="{{route('register')}}">Register</a>
								@endif
							@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{asset('assets/images/logo-top-1.png')}}"
									alt="logo"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search"
											aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="/shop" class="link-control">All Category</a>
										<ul class="list-cate">
											<li class="level-0">All Bakery Products</li>
											<li class="level-1">-Cakes</li>
											<li class="level-1">-Cupcakes</li>
											<li class="level-1">-Pies and Puddings</li>
											<li class="level-1">-Cookies and Bars</li>
										</ul>
									</div>
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section minicart">
								<a href="/cart" class="link-direction">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">4 items</span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				
				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul style="padding-left: 250px;" class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"> Home </i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title"><i class="fa fa-user-circle" aria-hidden="true"> About Us</i></a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title"><i class="fa fa-shopping-bag" aria-hidden="true"> Shop</i></a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title"><i class="fa fa-shopping-cart" aria-hidden="true"> Cart</i></a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title"><i class="fa fa-check-circle" aria-hidden="true"> Checkout</i></a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title"><i class="fa fa-phone" aria-hidden="true"> Contact Us</i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

    {{$slot}}

    <!--footer-->
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-money" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Subscription</h4>
								<p class="fc-desc">Get discount on subscription</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Customized Order</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Home Delivery</h4>
								<p class="fc-desc">Upto your doorstep</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Kathmandu, Nepal, -05</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+977) 9812345323</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Contact@yourcompany.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us toll Free</span>
										<b class="phone-number"> (+977) 9812345323</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Sign up for newsletter</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value=""
												placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">My Account</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">My Account</a></li>
												<li class="menu-item"><a href="#" class="link-term">Register</a></li>
												<li class="menu-item"><a href="#" class="link-term">Login</a></li>
												<li class="menu-item"><a href="#" class="link-term">Cart</a></li>
												<li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Infomation</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
												<li class="menu-item"><a href="#" class="link-term">Returns</a></li>
												<li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
												<li class="menu-item"><a href="#" class="link-term">Specials</a></li>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Customized Order</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="{{asset('assets/images/customorder.png')}}" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i
														class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i
														class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i
														class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i
														class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo"
														aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Customized Order</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="{{asset('assets/images/customorder.png')}}" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p  class="coppy-right-text">Copyright ©. All rights reserved</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/js/functions.js')}}"></script>
    @livewireScripts
</body>

</html>