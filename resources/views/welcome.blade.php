<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('forntend/img/favicon.png')}}" type="image/png">
	<title>Medicare Medical</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('forontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('forontend/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('forontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('forontend/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('forontend/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('forontend/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('forontend/vendors/animate-css/animate.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('forontend/css/style.css')}}">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-sm-6 col-4 header-top-left">
						<select class="default-select">
							<option data-display="English">English</option>
							<option value="1">Germany</option>
							<option value="2">Spanish</option>
						</select>
					</div>
					<div class="col-lg-9 col-sm-6 col-8 header-top-right">
						<a href="tel:+9530123654896"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+953
									012 3654 896</span></span></a>
						<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">support@colorlib.com</span></span></a>
						<a href="#" class="primary-btn text-uppercase">Appointment</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('post')}}">write Post</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="doctors.html">Doctors</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item"><a href="#" class="search">
									<i class="lnr lnr-magnifier" id="search"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <!--================ End Header Menu Area =================-->
    @yield('content')
    
  

	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	
	@if(Session::has('massege'))
	var type="{{Session::get('alert-type','info')}} "
	switch(type){
		case 'info':
		toastr.info("{{Session::get('massage')}} ");
		break;
		case 'info':
		toastr.info("{{Session::get('massage')}} ");
		break;
		case 'info':
		toastr.info("{{Session::get('massage')}} ");
		break;
	}

	@endif


</body>

</html>