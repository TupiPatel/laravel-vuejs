<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/mystyle.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbar-default navbar-sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('/images/logo/logo1.png') }}" class="logo-style">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Main') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact Us') }}</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div>
        <!--
            <footer class=" font-small  extra-footer" >

           
            <div class="footer-copyright  py-3" >©2013-2016 BeMo Academic Consulting Inc. All rights reserved.
                <a href="" class="contact-title footer-a">Disclaimer & Privacy Policy</a>
                <a href="" class="contact-title footer-a"> Contact Us</a>
                <div class="footer-right" id="social-icons">
                    <a href="" class="btn-floating btn-lg btn-fb"> <i class="fab fa-facebook-f"></i> </a> 
                    <a href="" class="btn-floating btn-lg btn-tw"> <i class="fab fa-twitter "></i> </a> 
                </div>
            </div>
         
           
            </footer>
        -->

            <!-- Footer -->
            <footer class="page-footer font-small extra-footer">

            <div >
                <div class="">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-9 text-center text-md-left mb-4 mb-md-0" id="footer-links">
                    <h6 class="mb-0">©2013-2016 BeMo Academic Consulting Inc. All rights reserved.
                    <a href="" class="contact-title footer-a">Disclaimer & Privacy Policy</a>
                    <a href="" class="contact-title footer-a"> Contact Us</a></h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-2 text-center text-md-right" id="social-icons">

                    <!-- Facebook -->
                    <a class="fb-ic btn-lg">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic btn-lg">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

                </div>
            </div>

            

            <!-- Copyright -->
           <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>-->
            <!-- Copyright -->

            </footer>
            <!-- Footer -->
                    
        <div>
        
    </div>
</body>
</html>
