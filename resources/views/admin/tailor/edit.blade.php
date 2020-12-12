<?php $thisPage="Edit Tailor"; ?>
@extends ('layouts.adminapp')

@section('content')   

    <main>
        <!-- BREADCRUMB -->
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <a href="/admintailor" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admintailor') }}">Penjahit</a></li>
                        <li class="breadcrumb-item active" aria-current="adminaddtailor">Edit Profil Penjahit: Nama</li>
                    </ol>
                </nav>
            </div>
        </div>


        <br></br>
        <form method="POST" action="{{route('admintailor.update', $tailor->id)}}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <section class="fotoprofil" id="fotoprofil">
                <div class="row">
                    <!-- SISI FOTO SAMA INFO KONTAK -->
                    <div class="col-md-6"> 
                        <!-- FOTO -->
                        <div class="row">
                            <div class="container" style="position: relative; ">
                                    <img src="{{ url('uploads/tailors') }}/{{ $tailor->tailor_photo}}" id="output" class="image rounded-circle" 
                                    style="width: 400px; height: 400px; display: block; margin-left: auto; margin-right: auto; ">
                                    
                                </div>

                                <div class="container" style="position: relative; margin-top: 30px;">
                                    <div class="form-group">
                                        <label for="image" style="display: block; text-align: center;">
                                            <a type="button"  class="btn btn-primary" >Upload Foto</a>
                                            <input type="file" id="image" name="image"  class="form-control @error('image') is-invalid @enderror border border-dark" 
                                            style="display:none" value="" accept="image/*" onchange="loadFile(event)" title="User Profile">

                                        </label>
                                    </div>
                                <!-- <input     autofocus style="width: 492px;"> -->
                            </div>   
                        </div>
                    </div>

                    <!-- SISI KANAN FORM -->
                    <div class="col-md-6">
                        <h2>Edit Profil Penjahit</h2>

                        
                        <!-- NAMA -->
                        <div class="form-group">
                            <label for="tailor_name" class="col-form-label text-md-left">{{ __('Nama') }}</label>
                            <input id="tailor_name" type="text" class="form-control @error('tailor_name') is-invalid @enderror border border-dark" name="tailor_name" value="{{ $tailor->tailor_name }}" required autocomplete="tailor_name" autofocus style="width: 492px;">
                        </div>

                        <!-- AGE -->
                        <div class="form-group">
                            <label for="category" class="col-form-label text-md-left">{{ __('Umur') }}</label>
                            <input type="number" id="replyNumber" min="18" max="50" class="form-control @error('tailor_age') is-invalid @enderror border border-dark" name="tailor_age" value="{{ $tailor->tailor_age }}" required="" style="width: 492px;" ></textarea>
                        </div>

                        <!-- LOCATION -->
                        <div class="form-group">
                            <label for="type" class="col-form-label text-md-left">{{ __('Lokasi') }}</label>
                            <input id="location" class="form-control @error('tailor_address') is-invalid @enderror border border-dark" name="tailor_address" value="{{ $tailor->tailor_address }}" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- PHONE NUMBER -->
                        <div class="form-group">
                            <label for="material" class="col-form-label text-md-left">{{ __('Nomor Telepon') }}</label>
                            <input type="number" id="replyNumber" class="form-control @error('tailor_contact') is-invalid @enderror border border-dark" name="tailor_contact" value="{{ $tailor->tailor_contact }}" required="" style="width: 492px;" ></textarea>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="form-group">
                            <label for="description" class="col-form-label text-md-left">{{ __('Deskripsi') }}</label>
                            <textarea class="form-control @error('tailor_desc') is-invalid @enderror border border-dark" name="tailor_desc" style="width: 492px;">{{ $tailor->tailor_desc }}</textarea>
                        </div>

                        <!-- Save Button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary float-right">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>

@endsection