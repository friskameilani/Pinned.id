@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
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
                                        <td>Nama Pemesan</td>
                                        <td>:</td>
                                        <td>{{ ($product->product_price) }}</td>
                                    </tr>

                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>{{ $product->product_desc }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Nama Penjahit</td>
                                        <td>:</td>
                                        <td>{{ $product->tailor->tailor_name }}</td>
                                        <td>{{ $product->tailor->tailor_address }}</td>
                                        <td>{{ $product->tailor->tailor_contact }}</td>
                                    </tr>

                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                             <form method="post" action="{{ url('order') }}/{{ $product->id }}" >
                                            @csrf
                                                <input type="text" name="qty" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>

                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection