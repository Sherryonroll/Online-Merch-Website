<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WebTech Project</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @livewireStyles
    @livewireScripts
</head>

<body id="body">
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                   
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Site Logo -->
                    <div class="logo text-center">
                        <a href="{{ url('/') }}">
                            <b>Shaheer Merch</b>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <ul class="top-menu text-right list-inline">
                        @auth
                            <li class="dropdown cart-nav dropdown-slide">
                                <a href="{{ route('cart') }}" class="dropdown-toggle" data-toggle="dropdown"
                                    data-hover="dropdown"><i class="tf-ion-android-cart"></i>{{ __('Cart') }}</a>
                                <div class="dropdown-menu cart-dropdown">
                                    @livewire('menu-cart')
                                    <ul class="text-center cart-buttons">
                                        <li><a href="{{ route('cart') }}" class="btn btn-small">View Cart</a></li>
                                        <li><a href="{{ route('checkout') }}"
                                                class="btn btn-small btn-solid-border">Checkout</a></li>
                                    </ul>
                                </div>
                            </li><!-- / Cart -->
                        @endauth

                        <!-- Search -->
                        @livewire('menu-search-bar')

                       

                    </ul><!-- / .nav .navbar-nav .navbar-right -->
                </div>
            </div>
        </div>
    </section><!-- End Top Header Bar -->


    <!-- Main Menu Section -->
    <section class="menu">
        <nav class="navbar navigation">
            <div class="container">
                <div class="navbar-header">
                    <h2 class="menu-title">Main Menu</h2>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div><!-- / .navbar-header -->

                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">
                        <li class="dropdown ">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('shop') }}">Shop</a>
                        </li>
                        @auth()
                            <li class="dropdown ">
                                <a href="{{ route('user_profile') }}">Dashboard</a>
                            </li>
                            <li class="dropdown ">
                                <a href="{{ route('cart') }}"> My Cart</a>
                            </li>
                        @endauth
                        <li class="dropdown ">
                            <a href="{{ route('contact_us') }}">Contact</a>
                        </li>
                        <!-- <li class="dropdown ">
                            <a href="{{ route('about_us') }}">About</a>
                        </li> -->
                        
                        @guest()
                            <li class="dropdown ">
                                <a href="{{ route('login') }}">login</a>
                            </li>
                        @endguest
                        @auth()
                            {{-- {{ dd(auth()->user()) }} --}}
                            @if (auth()->user()->isAdmin)
                                <li class="dropdown ">
                                    <a href="{{ route('admin.dashboard') }}">Admin</a>
                                </li>
                            @endif

                            <li class="dropdown ">
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul><!-- / .nav .navbar-nav -->
                </div>
            </div><!-- / .container -->
        </nav>
    </section>

    @yield('content')
    <footer class="footer section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                    <ul class="footer-menu text-uppercase">
                        <li>
                            <a href="contact.html">CONTACT</a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">SHOP</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy') }}">PRIVACY POLICY</a>
                        </li>
                    </ul>
                    <p class="copyright-text">Copyright &copy; Shaheer@P19-0026
                        
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('plugins/instafeed/instafeed.min.js') }}"></script>
    <script src="{{ asset('plugins/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('plugins/syo-timer/build/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
