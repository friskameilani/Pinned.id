<?php $thisPage="Edit Tailor"; ?>
@extends ('layouts.adminapp')

@section('content')   

    <main>
        <!-- BREADCRUMB -->
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <a href="{{ url('adminviewcatalog') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admincatalog') }}">Catalog</a></li>
                        <li class="breadcrumb-item active" aria-current="adminaddcatalog">New Catalog</li>
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
                            <div class="card" style="width: 400px; height: 400px; background-color: #eee">
                                <i class="fa fa-user text-center" style="font-size: 80px; color: #222; padding-top: 130px;"></i>
                                <div class="overlay" style=" position: absolute; transform: translate(0%, 700%); top: 0; bottom: 0; left: 0; right: 0; height: 50px; width: 400px; opacity: 0.5; background-color: #111;">
                                    <a href="#" class="icon" title="User Profile">
                                    <i class="fa fa-camera" style="color: white; opacity: 1; padding-top: 10px; padding-left: 185px; font-size: 30px;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KONTAK -->
                    <br></br>
                    <div class="row offset-md-1" style="padding-left: 40px;">
                        <div class="card" style=" width:400px">
                            <div class="card-body" style="color: black;">
                                <p class="text-height-half">Suprapto</p>
                                <p class="text-height-half">Tangerang, Banten</p>
                                <p class="text-height-half">55 tahun</p>
                                <p class="text-height-3">Phone Number:</p>
                                <p class="text-height-1" style="font-size: 20px;">08359571394</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SISI KANAN FORM -->
                <div class="col-md-6">
                    <h2>Buat Katalog Baru</h2>

                    <form method="POST" action="{{ url('admineditcatalog') }}">
                        @csrf

                        <!-- NAMA -->
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-left">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror border border-dark" name="name" value=" " required autocomplete="name" autofocus style="width: 492px;">
                        </div>

                        <h5 class="row" style="padding-left:15px;">Penjahit: Suprapto</h5>
                        <h5 class="row" style="padding-left:15px;">Kode Produk: XSJDIE5433D9</h5>

                        <!-- DESCRIPTION -->
                        <div class="form-group">
                            <label for="description" class="col-form-label text-md-left">{{ __('Description') }}</label>
                            <textarea name="address" class="form-control @error('address') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- CATEGORY -->
                        <div class="form-group">
                            <label for="category" class="col-form-label text-md-left">{{ __('Category') }}</label>
                                <select class="custom-select border border-dark" style="width: 492px;">
                                    <option selected>Choose Category..</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                        </div>

                        <!-- TYPE -->
                        <div class="form-group">
                            <label for="type" class="col-form-label text-md-left">{{ __('Type') }}</label>
                            <input id="type" class="form-control @error('type') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- MATERIAL -->
                        <div class="form-group">
                            <label for="material" class="col-form-label text-md-left">{{ __('Material') }}</label>
                            <input id="material" class="form-control @error('material') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- Color -->
                        <div class="form-group">
                            <label for="color" class="col-form-label text-md-left">{{ __('Color') }}</label>
                            <input id="color" class="form-control @error('color') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
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