<?php $thisPage="Add Tailor"; ?>
@extends ('layouts.adminapp')

@section('content')   

    <main>
        <!-- BREADCRUMB -->
        <div class="container">
            <div class="row">
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admincatalog') }}">Katalog</a></li>
                        <li class="breadcrumb-item active" aria-current="adminaddcatalog">Katalog Baru</li>
                    </ol>
                </nav>
            </div>
        </div>


        <br></br>
        <form method="POST" action="{{ url('admincatalog') }}" enctype="multipart/form-data">
            @csrf
            <section class="fotoprofil" id="fotoprofil">
                <div class="row">
                    <!-- SISI FOTO SAMA INFO KONTAK -->
                    <div class="col-md-6">
                        <!-- FOTO -->
                        <div class="row">
                            <div class="container" style="position: relative; width: 100%; max-width: 400px;">
                                <img id="output" class="image rounded" style="width: 400px; height: 400px; background-color: #eee  ">
                                    <label for="image" style="display: block; text-align: center;">
                                        <div type="button" class="overlay" style=" position: absolute; height: 50px; width: 400px; opacity: 0.5; background-color: #111;">
                                            <i class="fa fa-camera" style="color: white; opacity: 1; padding-top: 10px; font-size: 30px;"></i>
                                        </div>  
                                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror border border-dark" 
                                        name="image" value=" " accept="image/*" onchange="loadFile(event)" required autocomplete="image" autofocus style=" display:none;">
                                    </label>
                                </img>
                                    
                            </div>
                        </div>
                        <br></br>

                    </div>

                    <!-- SISI KANAN FORM -->
                    <div class="col-md-6">
                        <h2>Buat Katalog Baru</h2>

                        

                        <!-- NAMA -->
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-left">{{ __('Nama Produk') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror border border-dark" name="name" value=" " required autocomplete="name" autofocus style="width: 492px;">
                        </div>

                        <!-- NAMA PENJAHIT -->
                        <div class="form-group">
                            <label for="category" class="col-form-label text-md-left">{{ __('Penjahit') }}</label>
                                <select class="custom-select border border-dark" name="tailor_name" style="width: 492px;">
                                    <option selected>Pilih Penjahit..</option>
                                    @foreach($tailors as $tailor)
                                    <option value="{{$tailor->id}}">{{$tailor->tailor_name}} -- ID: {{$tailor->id}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="form-group">
                            <label for="description" class="col-form-label text-md-left">{{ __('Harga') }}</label>
                            <textarea name="desc" class="form-control @error('desc') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- CATEGORY -->
                        <div class="form-group">
                            <label for="category" class="col-form-label text-md-left">{{ __('Kategori') }}</label>
                                <select class="custom-select border border-dark" name="category" style="width: 492px;">
                                    <option selected>Pilih kategori..</option>
                                    <option value="Batik">Batik</option>
                                    <option value="Olahraga">Olahraga</option>
                                    <option value="Formal">Formal</option>
                                    <option value="Sekolah">Sekolah</option>
                                    <option value="Casual">Casual</option>
                                </select>
                        </div>

                        <!-- MATERIAL -->
                        <div class="form-group">
                            <label for="material" class="col-form-label text-md-left">{{ __('Bahan') }}</label>
                            <input id="material" name="material" class="form-control @error('material') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
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