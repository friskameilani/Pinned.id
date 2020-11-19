@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->product_name }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{ $product->product_image }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $product->product_name }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($product->product_price) }}</td>
                                    </tr>

                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>{{ $product->product_desc }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Penjahit</td>
                                        <td>:</td>
                                        <td>{{ $product->tailor->tailor_name }}</td>
                                        <td>{{ $product->tailor->tailor_address }}</td>
                                        <td>{{ $product->tailor->tailor_contact }}</td>
                                    </tr>
                                    <br>
                                </tbody>
                            </table>
                            <a class ="btn btn-primary" href ="{{ url('order') }}/{{ $product->id }}" > Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection