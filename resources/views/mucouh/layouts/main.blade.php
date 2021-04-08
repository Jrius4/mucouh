<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Mukono C.O.U Hospital') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="all,follow">


        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="{{asset('/assets-hospital/vendor/bootstrap/css/bootstrap.min.css')}}">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="{{asset('/assets-hospital/vendor/font-awesome/css/font-awesome.min.css')}}">
        <!-- Google fonts - Roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
        <!-- Bootstrap Select-->
        <link rel="stylesheet" href="{{asset('/assets-hospital/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
        <!-- owl carousel-->
        <link rel="stylesheet" href="{{asset('/assets-hospital/vendor/owl.carousel/assets/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('/assets-hospital/vendor/owl.carousel/assets/owl.theme.default.css')}}">
        <!-- Leaflet Maps-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{asset('/assets-hospital/css/style.default.css')}}" id="theme-stylesheet">
        <!-- <link rel="stylesheet" href="{{asset('/assets-hospital/css/style.pink.css')}}" id="theme-stylesheet"> -->
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{asset('/assets-hospital/css/custom.css')}}">
        <!-- Favicon and apple touch icons-->
        <link rel="shortcut icon" href="{{asset('/assets-hospital/images/logo.jpg')}}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{asset('/assets-hospital/img/apple-touch-icon.png')}}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/assets-hospital/img/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/assets-hospital/img/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets-hospital/img/apple-touch-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/assets-hospital/img/apple-touch-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/assets-hospital/img/apple-touch-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/assets-hospital/img/apple-touch-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/assets-hospital/img/apple-touch-icon-152x152.png')}}">

        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->


      </head>

      <div id="app">
          <div id="all">


            <!-- Top bar-->
            <div class="top-bar">
                <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 d-md-block d-none">
                    <p>Contact us on +420 777 555 333 or hello@universal.com.</p>
                    </div>
                    <div class="col-md-6">
                    <div class="d-flex justify-content-md-end justify-content-between">
                        <ul class="list-inline contact-info d-block d-md-none">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                        <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a>
                            {{-- <a href="#" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a> --}}
                        </div>
                        <ul class="social-custom list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Top bar end-->
            <!-- Login Modal-->
            <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
                <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 id="login-modalLabel" class="modal-title">Dashboard Login</h4>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="container justify-content-center">

                            <div class="form-group row">
                            <input id="email_modal" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                            <input id="password_modal" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- <p class="text-center">
                            <button class="btn btn-template-outlined" type="submit"><i class="fa fa-sign-in"></i> Log in</button>
                            </p> --}}

                            <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-template-outlined">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="col-md-12  offset-sm-4">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <!-- Login modal end-->
            <!-- Navbar Start-->
            <header class="nav-holder make-sticky">
                <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
                <div class="container"><a href="{{route('index')}}" class="navbar-brand home"><img src="{{asset('/assets-hospital/images/logo.jpg')}}" alt="MUCOUH" width="45" class="d-none d-md-inline-block"><img  src="{{asset('/assets-hospital/images/logo.jpg')}}" alt="MUCOUH" width="45" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">go to homepage</span></a>
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                    <div id="navigation" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item @if($active  == 'index') active @endif"><a href="{{route('index')}}" class="nav-link">Home <b class="caret"></b></a>

                        </li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Branches<b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                            <div class="row">
                                <div class="col-lg-8 text-center">
                                    <h3>Mukono Church Of Uganda Hospital <br> Branches</h3>
                                </div>
                                <div class="col-lg-6"><img src="{{asset('/assets-hospital/img/template-easy-customize.png')}}" alt="" class="img-fluid d-none d-lg-block"></div>
                                <div class="col-lg-3 col-md-6">

                                <ul class="list-unstyled mb-3">
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">BUKAYA HOSPITAL</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">KIKANDWA HOSPITAL</a></li>
                                </ul>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">NAKISUNGA HOSPITAL</a></li>
                                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">NAMUYENJE HOSPITAL</a></li>
                                    </ul>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Departments <b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                            <div class="row">
                                <div class="col-lg-3"><img src="{{asset('/assets-hospital/img/template-homepage.png')}}" alt="" class="img-fluid d-none d-lg-block"></div>
                                <div class="col-lg-3 col-md-4">
                                <h5>SPECIALIZED</h5>
                                <ul class="list-unstyled mb-3">
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">SURGEON</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">PHYSICIAN</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">PEDIATRICIAN</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">GYNECOLOGIST</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">PHYSIOTHERAPY</a></li>
                                </ul>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <h5>HIV CARE</h5>
                                    <ul class="list-unstyled mb-3">
                                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">ART CARE</a></li>
                                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">DATA RECORDS</a></li>
                                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">ETCT</a></li>
                                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">PRIVATE HIV CLINIC</a></li>
                                        <li class="nav-item"><a href="javascript:void(0)" class="nav-link">COMMUNITY SERVICES</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                <h5>OTHERS</h5>
                                <ul class="list-unstyled mb-3">
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">MENTAL HEALTH</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">IMMUNIZATION</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">EYE CLINIC</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">STORE AND PHARMACY</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">DENTAL SERVICES</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">SECURITY</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">MORTUARY</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">CLEANING SERVICES</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">CMES</a></li>
                                </ul>
                                </div>

                            </div>
                            </li>
                        </ul>
                        </li>

                        <li class="nav-item @if($active == 'events') active @endif"><a href="{{route('events')}}" class="nav-link">Events</a></li>
                        <li class="nav-item @if($active == 'about') active @endif"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                        <li class="nav-item @if($active == 'services') active @endif"><a href="{{route('services')}}" class="nav-link">Services</a></li>
                        <li class="nav-item @if($active == 'our-team') active @endif"><a href="{{route('our-team')}}" class="nav-link">Our Team</a></li>
                        <li class="nav-item @if($active == 'contacts') active @endif"><a href="{{route('contacts')}}" class="nav-link">Contact Us</a></li>

                    </ul>
                    </div>
                    <div id="search" class="collapse clearfix">
                    <form role="search" class="navbar-form">
                        <div class="input-group">
                        <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                            <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </header>
            <!-- Navbar End-->

            @yield('content')

            @include('mucouh.layouts.footer')


          </div>
      </div>






          <!-- Javascript files-->
    <script src="{{asset('/assets-hospital/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assets-hospital/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/assets-hospital/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets-hospital/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/assets-hospital/vendor/waypoints/lib/jquery.waypoints.min.js')}}"> </script>
    <script src="{{asset('/assets-hospital/vendor/jquery.counterup/jquery.counterup.min.js')}}"> </script>
    <script src="{{asset('/assets-hospital/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/assets-hospital/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('/assets-hospital/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('/assets-hospital/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/assets-hospital/vendor/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>

    <!-- LeafletJS CDN-->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <script src="{{asset('/assets-hospital/js/map.js')}}"></script>
    <script src="{{asset('/assets-hospital/js/front.js')}}"></script>


<body>

</body>
</html>
