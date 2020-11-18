<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pinned.id') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #A06357;"> 
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('images/Pinned.id.png') }}" class="rounded mx-auto d-block" width="200" alt="" style="padding-left: 20px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="nav nav-second-level navbar mr-auto" style="font-weight:bold; letter-spacing:1px">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>                    
                    <li class="{{ Request::is('/catalog') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/catalog') }}">Catalog</a>
                    </li>
                    <li class="{{ Request::is('/order') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/order') }}">Order</a>
                    </li>
                    <li class="{{ Request::is('/confirm_payment') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/confirm_payment') }}">Confirm Payment</a>
                    </li>
                    <li class="{{ Request::is('/faq') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                    </li>

                    <!-- NUMPANG BENTAR TAMBAH MENU ADMIN SOALNYA BELOM ADA USER ADMIN -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admindashboard') }}">Admin</a>
                    </li>
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
                                <a class="dropdown-item" href="{{ url('profile') }}">
                                    Profile
                                </a>

                                <a class="dropdown-item" href="{{ url('history') }}">
                                    Riwayat Pemesanan
                                </a>

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
        </nav>

    @yield('content')
        </main>
    </div>
</body>
</html>