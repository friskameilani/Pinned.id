@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            {{ __('You are logged in!') }}
                            <br><br>
                            <button type="button" class="btn btn-primary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> Log Out <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                </form>
                            </button>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary" role="button" aria-disabled="true">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary" role="button" aria-disabled="true">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
