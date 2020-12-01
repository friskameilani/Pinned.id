<!doctype html>
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3E3434;"> 
            <a class="navbar-brand" href="{{ url('/') }}">
                Pinned.id
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                    <h4 class="text-white">Collapsed content</h4>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/admin') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admincatalog') }}">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admintailor') }}">Tailor</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminorder') }}">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminpayment') }}">Payment</a>
                </li>

                <!-- NUMPANG -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminorderdetail') }}">Order Detail</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminpaymentdetail') }}">Payment Detail</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminviewtailor') }}">View Tailor</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminfaq') }}">FAQ</a>
                </li>
                <!-- -->

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/logout') }}">Logout</a>
                </li>
                </ul>
            </div>
            
        </nav>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>
</html>
