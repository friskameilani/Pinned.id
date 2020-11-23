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
                        <li class="breadcrumb-item"><a href="{{ url('admintailor') }}">Tailor</a></li>
                        <li class="breadcrumb-item active" aria-current="adminaddtailor">New Tailor</li>
                    </ol>
                </nav>
            </div>
        </div>


        <br></br>
        <section class="fotoprofil" id="fotoprofil">
            <div class="row">
                <!-- SISI FOTO SAMA INFO KONTAK -->
                <div class="col-md-6">
                    <!-- FOTO -->
                    <div class="row">
                        <div class="container" style="position: relative; width: 100%; max-width: 400px;">
                            <img src="/images/contoh.png" alt="Avatar" class="image rounded-circle" style="width: 400px; height: 400px;">
                            <div class="overlay rounded-circle" style=" position: absolute; transform: translate(4%, 0%); top: 0; bottom: 0; left: 0; right: 0; height: 400px; width: 400px; opacity: 0.3; background-color: #111;">
                                <a href="#" class="icon" title="User Profile">
                                <i class="fa fa-camera text-center" style="color: white; opacity: 1; padding-top: 165px; padding-left: 165px; font-size: 80px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SISI KANAN FORM -->
                <div class="col-md-6">
                    <h2>Edit Profil Penjahit</h2>

                    <form method="POST" action="/admintailor/{{ $tailor->id }}">
                        @method('patch')
                        @csrf
                        <!-- NAMA -->
                        <div class="form-group">
                            <label for="tailor_name" class="col-form-label text-md-left">{{ __('Name') }}</label>
                            <input id="tailor_name" type="text" class="form-control @error('tailor_name') is-invalid @enderror border border-dark" name="tailor_name" value="{{ $tailor->tailor_name }}" required autocomplete="tailor_name" autofocus style="width: 492px;">
                        </div>

                        <!-- AGE -->
                        <div class="form-group">
                            <label for="category" class="col-form-label text-md-left">{{ __('Age') }}</label>
                            <input type="number" id="replyNumber" min="18" max="50" class="form-control @error('tailor_age') is-invalid @enderror border border-dark" name="tailor_age" value="{{ $tailor->tailor_age }}" required="" style="width: 492px;" ></textarea>
                        </div>

                        <!-- LOCATION -->
                        <div class="form-group">
                            <label for="type" class="col-form-label text-md-left">{{ __('Location') }}</label>
                            <input id="location" class="form-control @error('tailor_address') is-invalid @enderror border border-dark" name="tailor_address" value="{{ $tailor->tailor_address }}" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- PHONE NUMBER -->
                        <div class="form-group">
                            <label for="material" class="col-form-label text-md-left">{{ __('Phone Number') }}</label>
                            <input type="number" id="replyNumber" class="form-control @error('tailor_contact') is-invalid @enderror border border-dark" name="tailor_contact" value="{{ $tailor->tailor_contact }}" required="" style="width: 492px;" ></textarea>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="form-group">
                            <label for="description" class="col-form-label text-md-left">{{ __('Description') }}</label>
                            <textarea class="form-control @error('tailor_desc') is-invalid @enderror border border-dark" name="tailor_desc" style="width: 492px;">{{ $tailor->tailor_desc }}</textarea>
                        </div>

                        <!-- Save Button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary float-right">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

@endsection