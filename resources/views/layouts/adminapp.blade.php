<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pinned.id') }}</title>

    <!-- Scripts -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <img src="{{ url('images/Pinned.id.png') }}" class="rounded mx-auto d-block" width="200" alt="" style="padding-left: 20px">
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
                    <a class="nav-link" href="{{ url('/admin') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admincatalog') }}">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admintailor') }}">Penjahit</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminorder') }}">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminpayment') }}">Pembayaran</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/adminfaq') }}">FAQ</a>
                </li>

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

    <script>
    $(document).ready(function () {
        $('#editorder').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);  
        var order_id = button.data('orderid');
        var stat = button.data('status');
        var random_id = button.data('code');
        
        var modal = $(this);
        
         $('input[value^='+stat+']').prop('checked',true);
        modal.find('.modal-body #order_id').val(order_id);
        
        $('#random_id').html(random_id);
        // modal.find('.modal-body #name').val(name);
        });
    });
    </script> 

    <script>
     $(document).ready(function () {
        $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var no_id = button.data('id'); 
        
        var modal = $(this);
        modal.find('.modal-body #no_id').val(no_id);
        });
    });
    </script>

    <script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
    </script>
    
</body>
</html>
