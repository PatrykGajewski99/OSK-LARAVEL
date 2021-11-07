<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>OSK</title>

   <!-- bootstrap.min css -->
   <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
   <!-- Icon Font Css -->
   <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
   <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
   <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
   <!-- Owl Carousel CSS -->
   <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
   <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
 
   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- ======= Header ======= -->
<header class="navigation">
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="{{ url('welcome') }}">
		  OSK<span>DDG.</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
              <li class="nav-item"><a class="nav-link" href="{{ url('price') }}">Cennik</a></li>
			  </li>
              <a class="nav-link" href="{{ url('welcome') }}">O nas <span class="sr-only">(current)</span></a>
			   <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Kontakt</a></li>
			</ul>

			@if (Route::has('login'))
			@auth
			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
				<a href="{{ url('/dashboard') }}" class="btn btn-solid-border btn-round-full">Moje konto</a>
			</form>
		
			@else
			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
				<a href="{{ route('login') }}" class="btn btn-solid-border btn-round-full">Zaloguj się</a>
			</form>
				<!-- @if (Route::has('register'))
					<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
				@endif -->
			@endauth
			@endif

		  </div>
		</div>
	</nav>
</header>
<!-- End Header -->


<!-- Section About Price-->

<section class="section about-2 position-relative">
	<div class="container">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			<h1 class="display-4">Cennik</h1>
			<p class="lead">
				Zapraszamy do zapoznania się z cenami jakie obowiązują za nasze kursy. W razie pytań prosimy o kontakt na numer 123456789.
			</p>
		</div>

	</div>
	<div class="container">
		<div class="card-deck mb-3 text-center">
			<div class="card mb-4 box-shadow">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Jazdy doszkalające</h4>
				</div>
				<div class="card-body">
					<h1 class="card-title pricing-card-title">70 zł
						<small class="text-muted">/godz.</small>
					</h1>
					<p class="lead">
						The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
					</p>
					<button type="button" class="btn btn-lg btn-block btn-outline-dark">Więcej informacji</button>
				</div>
			</div>
		</div>
		<div class="card-deck mb-3 text-center">
			<div class="card mb-8 box-shadow">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Kurs</h4>
				</div>
				<div class="card-body">
					<h1 class="card-title pricing-card-title">2100 zł
						<small class="text-muted">/Kat. b</small>
					</h1>
					<p class="lead">
						Na kurs składa się 30 godzin teorii prowadzonej stacjonarnie oraz 20 godzin praktyki na identycznych samochodach jak na prawdziwym egazminie. W czasie tego kursu uzyskasz najważniesze informacje i doświadczenie pozwalające zdać egzamin i czerpać radość z jazdy samochodem.
					</p>
					<button type="button" class="btn btn-lg btn-block btn-outline-dark">Więcej informacji</button>
				</div>
			</div>
		</div>
	</div>

</section>




<!-- Footer -->
<footer class="footer section bg-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-color3 mb-4">Company</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li class="footer-contact"><i class="fa fa-home"></i> Address name</li>
						<li class="footer-contact"><i class="fa fa-envelope"></i><a href="#" class="text-color3"> mail@gmail.com</a></li>
						<li class="footer-contact"><i class="fa fa-phone"></i> 789987789</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-color3 mb-4">Lorem ipsum</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#" class="text-color3">Kontakt</a></li>
						<li><a href="#" class="text-color3">Zaloguj się</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-color3 mb-4">Lorem ipsum</h4>
					<p>Subscribe to get latest news article and resources  </p>
				</div>
			</div>

			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3 class="text-color3">OSK<span>DDG.</span></h3>
					</div>
					<h6><a href="mailto:support@gmail.com" class="text-color3">Support@megakit.com</a></h6>
					<a href="tel:+23-345-67890 "><span class="text-color h4">789987789</span></a>
				</div>
			</div>
		</div>
		
		<div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">OSKDDG.</span>
					</div>
				</div>
				<div class="col-lg-6 text-left text-lg-right">
					<ul class="list-inline footer-socials">
						<li class="list-inline-item text-color3"><a href="https://www.facebook.com/themefisher" class="text-color3"><i class="ti-facebook mr-2 text-color3"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher" class="text-color3"><i class="ti-instagram mr-2 text-color3"></i>Instagram</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Koniec footer -->



</div>   <!-- koniec class="main-wrapper" -->
  
 <!-- Main jQuery -->
 <script src="plugins/jquery/jquery.js"></script>
 <script src="js/contact.js"></script>
 <!-- Bootstrap 4.3.1 -->
 <script src="plugins/bootstrap/js/popper.js"></script>
 <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!--  Magnific Popup-->
 <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
 <!-- Slick Slider -->
 <script src="plugins/slick-carousel/slick/slick.min.js"></script>
 <!-- Counterup -->
 <script src="plugins/counterup/jquery.waypoints.min.js"></script>
 <script src="plugins/counterup/jquery.counterup.min.js"></script>

 <script src="js/script.js"></script>


</body>

</html>