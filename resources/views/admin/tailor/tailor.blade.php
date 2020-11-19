<?php $thisPage="Tailor"; ?>
@extends ('layouts.adminapp')

@section('content')
<title class="text-center">Tailor</title>

    <!-- Content Wrapper. Contains page content -->
    

    <main>
    <!-- SEARCH BAR -->
    <section class="searchbarr" id="searchbarr">
        <div class="row">
            <div class="col-md-4">
                <!-- SEARCH BUTTON -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search tailor..">
                    <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JUDUL SAMA BUTTON -->
    <section class="title" id="title">
        <div class="row">
            <div class="col-md-6">
                <!-- JUDUL TAILOR -->
                <h1 class="text-left">
                    Tailor
                </h1>
            </div>

            <div class="col-md-6 clearfix" style="padding-right: 60px;">
                <!-- BUTTON ADD -->
                <a href="{{ url('adminaddtailor') }}">
                    <button type="button" class="btn btn-success float-right">
                        +Add New Tailor
                    </button>
                </a>
            </div>
        </div>
    </section>
    <br></br>

    <!-- CARD PENJAHIT --> 
    <section class="tailor" id="tailor" style="padding-bottom: 50px;">
    @foreach( $tailors as $tailors)
        
            <div class="row">
                <!-- CARD KIRI -->
                <div class="col-md-4 offset-md-2">
                    <a href="/admintailor/{{ $tailors->id }}/edit">
                    <div class="card rounded" style="width: 350px; height: 140px; background-color: #A06357">
                        <div class="row">
                            <div class="col-md-4" style="padding-left: 40px; padding-top: 10px; max-height: 100px; font-size: 80px; color: white;">
                                <i class="text-center fa fa-user-circle"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="color: white; padding-top: 28px;">
                                <h4 class="card-title">{{ $tailors->tailor_name }}</h4>
                                <p class="card-text text-height-half">{{ $tailors->tailor_address }}</p>
                                <p class="card-text font-weight-bold" style="font-size: 20px;">{{ $tailors->tailor_desc }}</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
   
    @endforeach
    </section>

    
    </main>

@endsection