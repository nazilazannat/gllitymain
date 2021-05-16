<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Toggole -->
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
		{{-- <div class="wrap">
	    <div class="container">
				<div class="row justify-content-between">
					<div class="col-3 d-flex align-items-center">
						<a class="navbar-brand d-flex" href="index.html"><div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-roof-2"></span></div>Roofing</a>
					</div>
					<div class="col-3 d-flex justify-content-end align-items-center">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div> --}}

		<section class="menu-wrap flex-md-column-reverse d-md-flex">
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="req-button order-lg-last">

                    Blood Donation

	        </div>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                      <!-- Authentication Links -->
                      @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="/user/{{ Auth::user()->avatar }}" height="25px;" width="25px;"> {{ Auth::user()->name }}<span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              {{-- @can('manage-users') --}}
                              <a class="dropdown-item" href="{{ url('home') }}">
                                 Profile
                              </a>
                              {{-- @endcan --}}

                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
		        </ul>
		      </div>
		    </div>
		  </nav>
	    <!-- END nav -->
		</section>

        {{-- <div class="container py-4"> --}}
        @yield('content')
        {{-- </div> --}}


        <footer class="footer ftco-section">
            <div class="container">
              <div class="row mb-5">
                <div class="col-md-6 col-lg">
                  <div class="ftco-footer-widget mb-4">
                    <h2 class="logo"><a href="#"><span class="flaticon-roof-2 mr-2"></span>Roofing</a></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                      <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg">
                  <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                      <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Skylights</a></li>
                      <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Waterproofing</a></li>
                      <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Industrial Roofing</a></li>
                      <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Residential Roofing</a></li>
                      <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Gutter Cleaning</a></li>
                      <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Commercial Roofing</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-lg">
                   <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Business Hours</h2>
                    <div class="opening-hours">
                        <h4>Opening Days:</h4>
                        <p class="pl-3">
                            <span>Monday – Friday : 9am to 20 pm</span>
                            <span>Saturday : 9am to 17 pm</span>
                        </p>
                        <h4>Vacations:</h4>
                        <p class="pl-3">
                            <span>All Sunday Days</span>
                            <span>All Official Holidays</span>
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg">
                  <div class="ftco-footer-widget mb-4">
                      <h2 class="ftco-heading-2">Contact information</h2>
                      <div class="block-23 mb-3">
                        <ul>
                          <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                          <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                          <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">

                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
              </div>
            </div>
          </footer>

        @yield('footer_js')
        <!-- data toggole -->
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>
        </body>
      </html>
