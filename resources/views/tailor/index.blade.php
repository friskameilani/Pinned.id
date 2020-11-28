@extends('layouts.app')

@section('content')
<div class="body-inner">
    <div class="container-fluid">
        <div class="min-vh-100">
            <div class="row justify-content-center" >
                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-12 justify-center-center">
                                        <img src="/images/contoh.png" class="rounded mx-auto d-block" width="100%" alt=""> 
                                    </div>
                                </div>
                                <div class="col-md-8 mt-2">
                                    <h3 style="padding:10px">{{ $tailor->tailor_name }}</h3>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>ID PENJAHIT</td>
                                                <td>{{ $tailor->id }}</td>
                                            </tr>
                                            <tr>
                                                <td>DESKRIPSI</td>
                                                <td>{{ $tailor->tailor_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td>ALAMAT</td>
                                                <td>{{ $tailor->tailor_address }}</td>
                                            </tr>
                                            <tr>
                                                <td>HUBUNGI</td>
                                                <td>
                                                    <a class="btn btn-lg btn-success" href="https://api.whatsapp.com/send?phone=+62{{ str_replace('0', '',  $tailor->tailor_contact) }}&text=Hi,%20I%20would%20like%20to%20get%20more%20information..">
                                                    <i class="fab fa-whatsapp fa-2x"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <h3>Produk</h3>
                            <div class="row" style="margin-top: 20px">
                                @foreach($products as $product)
                                <div class="col-6 col-lg-4 col-xl-3">
                                    <div class="card mb-3">
                                    <img src= "{{$product->product_image}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->product_name}}</h5>
                                        <p class="card-text">
                                            <strong> {{ number_format($product->product_price) }} </strong><br>
                                        </p>
                                        <a href="#" class="btn btn-primary btn-block"> Lihat</a>
                                    </div>
                                    </div> 
                                </div>
                                @endforeach
                            </div>
                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div style="text-align:center;">
            <div class="col-12">
                <p>&copy; Pinned.id. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
@endsection