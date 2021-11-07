<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- bootstrap.min css -->
   <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
   <!-- Icon Font Css -->
   <link rel="stylesheet" href="{{asset('plugins/themify/css/themify-icons.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}">
   <!-- Owl Carousel CSS -->
   <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick-theme.css')}}">
 
   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" href="{{asset('css/footer.css')}}">
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   
</head>
<body>
    <div id="app">
        @include('sweetalert::alert')
        <nav class="navbar navbar-expand-lg  py-4" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/welcome') }}">
                OSK<span>DDG.</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-solid-border btn-round-full" href="{{ route('login') }}">{{ __('Logowanie') }}</a>
                                </li>
                            @endif

                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-solid-border btn-round-full" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
                                </li>
                            @endif -->
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @include('sweetalert::alert')
                                {{ Auth::user()->firstName }}
                                    {{ Auth::user()->lastName }}
                                    {{ "(" }}
                                    {{ Auth::user()->privilege }}
                                    {{ ")" }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <!-- DODAJ UŻYTKOWNIKA -->

                                @if (Auth::user()->privilege=='admin')
                                    <a class="dropdown-item" href="{{ route('register') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('register').submit();">
                                        {{ __('Dodaj użytkownika') }}
                                    </a>

                                    <form id="register" action="{{ route('register') }}" method="GET" class="d-none">
                                        @csrf
                                    </form>

                                        <!-- KONIEC DODAJ UŻYTKOWNIKA -->

                                        <!-- WYSWIETL UZYTKOWNIKOW -->

                                    <a class="dropdown-item" href="{{ route('allusers') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('allusers').submit();">
                                        {{ __('Użytkownicy') }}
                                    </a>

                                    <form id="allusers" action="{{ route('allusers') }}" method="GET" class="d-none">
                                        @csrf
                                    </form>
                                @endif

                                    <!-- KONIEC WYSWIETLANIA UZYTKOWNIKOW -->
                                

                                <!-- ZMIANA HASLA - MOJE KONTO: -->

                                <a class="dropdown-item" href="{{ route('data') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('data').submit();">
                                        {{ __('Moje konto') }}
                                </a>

                                <form id="data" action="{{ route('data') }}" method="GET" class="d-none">
                                    @csrf
                                </form>

                                <!-- KONIEC ZMIANY HASLA - MOJE KONTO: -->



                                <!-- WYLOGUJ SIĘ -->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj się') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                <!-- KONIEC WYLOGUJ SIĘ -->

                                






                                </div>


                                
                               

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>

<!-- Footer -->

<footer class="footer section2 bg-footer appfooter">
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

</div>
</body>
</html>
