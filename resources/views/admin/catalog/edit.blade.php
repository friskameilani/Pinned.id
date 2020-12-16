<?php $thisPage="Edit Catalog"; ?>
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
                        <li class="breadcrumb-item "><a href="/adminviewcatalog/{{$product->id}}">{{ $product->product_name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="admineditcatalog">Ubah Katalog</li>
                    </ol>
                </nav>
            </div>
        </div>        
        
        
        <br></br>
        <form method="POST" action="{{route('admincatalog.update', $product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('patch')    
            <section class="fotoprofil" id="fotoprofil">
                <div class="row">
                    <!-- SISI FOTO SAMA INFO KONTAK -->
                    <div class="col-md-6">
                        <!-- FOTO -->
                        <div class="row">
                            <div class="container" style="position: relative; width: 100%; max-width: 400px;">
                                <img src="/uploads/product/{{ $product->product_image }}" id="output" alt="Avatar" class="image rounded" style="width: 400px; height: 400px;">
                                <label for="image" style="display: block; text-align: center;">
                                    <div type="button" class="overlay" style=" position: absolute; transform: translate(3.7%, 700%); top: 0; bottom: 0; left: 0; right: 0; height: 50px; width: 400px; opacity: 0.5; background-color: #111;">
                                        <i class="fa fa-camera" style="color: white; opacity: 1; padding-top: 10px; font-size: 30px;"></i>
                                    </div>  
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror border border-dark" 
                                    name="image" value=" " accept="image/*" onchange="loadFile(event)" style=" display:none;">
                                </label>
                            </div>
                        </div>

                        <!-- KONTAK -->
                        <br></br>
                        <div class="row offset-md-1" style="padding-left: 40px;">
                            <div class="card" style=" width:400px">
                                <div class="card-body" style="color: black;">
                                    <p class="text-height-half">{{ $product->tailor->tailor_name }}</p>
                                    <p class="text-height-half">{{ $product->tailor->tailor_address }}</p>
                                    <p class="text-height-half">{{ $product->tailor->tailor_age}} tahun</p>
                                    <p class="text-height-3">Nomor telepon: </p>
                                    <p class="text-height-1" style="font-size: 20px;">{{ $product->tailor->tailor_contact }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SISI KANAN FORM -->
                    <div class="col-md-6">
                        <h2>Ubah Katalog</h2>

                        
                            <!-- NAMA -->
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-left">{{ __('Nama') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror border border-dark" name="name" value="{{ $product->product_name }}" required autocomplete="name" autofocus style="width: 492px;">
                        </div>

                        <h5 class="row" style="padding-left:15px;">Nama penjahit : {{ $product->tailor->tailor_name }}</h5>

                        <!-- DESCRIPTION -->
                        <div class="form-group">
                            <label for="description" class="col-form-label text-md-left">{{ __('Deskripsi') }}</label>
                            <textarea name="desc" class="form-control @error('desc') is-invalid @enderror border border-dark" value="{{ $product->product_desc }}" required="" style="width: 492px;">{{$product->product_desc}}</textarea>
                        </div>

                        <!-- CATEGORY -->
                        <div class="form-group">
                            <label for="category" class="col-form-label text-md-left">{{ __('Kategori') }}</label>
                                <select class="custom-select border border-dark" name="category" style="width: 492px;">
                                    <option selected>{{ $product->product_category }}</option>
                                    <option value="Batik">Batik</option>
                                    <option value="Olahraga">Olahraga</option>
                                    <option value="Formal">Formal</option>
                                    <option value="Sekolah">Sekolah</option>
                                    <option value="Casual">Casual</option>
                                </select>
                        </div>

                        <!-- TYPE -->
                        <div class="form-group">
                            <label for="type" class="col-form-label text-md-left">{{ __('Tipe') }}</label>
                            <br>
                                <select class="custom-select border border-dark" name="type" style="width: 492px;">
                                    <option selected>{{ $product->product_type }}</option>
                                    <option value="Tipe 1">Tipe 1</option>
                                    <option value="Tipe 2">Tipe 2</option>
                                    <option value="Tipe 3">Tipe 3</option>
                                </select>
                        </div>

                        <!-- MATERIAL -->
                        <div class="form-group">
                            <label for="material" class="col-form-label text-md-left">{{ __('Material') }}</label>
                            <input id="material" name="material" value="{{ $product->product_material }}" class="form-control @error('material') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
                        </div>

                        <!-- Price -->
                        <div class="form-group">
                            <label for="price" class="col-form-label text-md-left">{{ __('Harga') }}</label>
                            <input id="price" name="price" value="{{ $product->product_price }}" class="form-control @error('price') is-invalid @enderror border border-dark" required="" style="width: 492px;"></textarea>
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