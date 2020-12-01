@extends('layouts.app')
@section('content')
<div class="body-inner">
    <div class="container-fluid">
        <div class="min-vh-100">
            <div class="row justify-content-center" >
                <div class="col-md-8 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ url('uploads') }}/product/{{ $product->product_image }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <h3>{{ $product->product_name }}</h3>
                                        </div>
                                        <div class="col-6">
                                            <a class ="btn btn-primary float-right" href ="{{ url('order') }}/{{ $product->id }}" style="padding: 5px 30px"> Pesan</a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <ins>Rp {{ number_format($product->product_price) }}</ins>
                                    </div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Deskripsi :</td>
                                                <td>{{ $product->product_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kategori :</td>
                                                <td>{{ $product->product_category }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tipe :</td>
                                                <td>{{ $product->product_type }}</td>
                                            </tr>
                                            <tr>
                                                <td>Bahan :</td>
                                                <td>{{ $product->product_material }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-6 m-3">
                                                    <a href="{{route('tailor.show', ['tailor' => $product->tailor_id])}}"><h4>{{ $product->tailor->tailor_name }}</h4></a>
                                                    <p>{{ $product->tailor->tailor_address }}</p>
                                                </div>
                                                <div class="col-2">
                                                    <a class="btn btn-lg btn-success m-3" href="https://api.whatsapp.com/send?phone=+62{{ str_replace('0', '',  $product->tailor->tailor_contact) }}&text=Hi,%20I%20would%20like%20to%20get%20more%20information..">
                                                        <i class="fab fa-whatsapp fa-2x"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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