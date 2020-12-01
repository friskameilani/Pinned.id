<?php $thisPage="Edit Tailor"; ?>
@extends ('layouts.adminapp')

@section('content')   

    <main>
        <!-- BREADCRUMB -->
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <a href="{{ url('admincatalog') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
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
                                    <a  class="icon" title="User Profile">
                                    <i class="fa fa-camera" style="color: white; opacity: 1; padding-top: 10px; padding-left: 185px; font-size: 30px;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br></br>

                </div>

                <!-- SISI KANAN FORM -->
                <div class="col-md-6">
                    <h2>Buat Katalog Baru</h2>

                    <form method="POST" action="{{ url('admincatalog') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- NAMA -->
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-left">{{ __('Nama Produk') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror border border-dark" name="name" value=" " required autocomplete="name" autofocus style="width: 492px;">
                        </div>

                        <!-- NAMA PENJAHIT -->
                        <div class="form-group">
                            <label for="category" class="col-form-label text-md-left">{{ __('Penjahit') }}</label>
                                <select class="custom-select border border-dark" name="tailor_name" style="width: 492px;">
                                    <option selected>Choose Tailor..</option>
                                    @foreach($tailors as $tailor)
                                    <option value="{{$tailor->id}}">{{$tailor->tailor_name}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="form-group">
                            <label for="description" class="col-form-label text-md-left">{{ __('Description') }}</label>
                            <textarea name="desc" class="form-control @error('desc') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- Gambar Produk -->
                        <div class="form-group">
                            <label for="image" class="col-form-label text-md-left">{{ __('Gambar Produk') }}</label>
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror border border-dark" name="image" value=" " required autocomplete="image" autofocus style="width: 492px;">
                        </div>

                        <!-- CATEGORY -->
                        <div class="form-group">
                            <label for="category" class="col-form-label text-md-left">{{ __('Category') }}</label>
                                <select class="custom-select border border-dark" name="category" style="width: 492px;">
                                    <option selected>Choose Category..</option>
                                    <option value="Batik">Batik</option>
                                    <option value="Olahraga">Olahraga</option>
                                    <option value="Formal">Formal</option>
                                    <option value="Sekolah">Sekolah</option>
                                    <option value="Casual">Casual</option>
                                </select>
                        </div>
                        
                        <!-- TYPE -->
                        <div class="form-group">
                            <label for="type" class="col-form-label text-md-left">{{ __('Type') }}</label>
                            <br>
                                <select class="custom-select border border-dark" name="type" style="width: 492px;">
                                    <option selected>Choose Type..</option>
                                    <option value="Tipe 1">Tipe 1</option>
                                    <option value="Tipe 2">Tipe 2</option>
                                    <option value="Tipe 3">Tipe 3</option>
                                </select>
                        </div>

                        <!-- MATERIAL -->
                        <div class="form-group">
                            <label for="material" class="col-form-label text-md-left">{{ __('Material') }}</label>
                            <input id="material" name="material" class="form-control @error('material') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- Price -->
                        <div class="form-group">
                            <label for="Price" class="col-form-label text-md-left">{{ __('Price') }}</label>
                            <input id="price" name="price" class="form-control @error('price') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
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