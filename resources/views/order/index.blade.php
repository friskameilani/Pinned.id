@extends('layouts.app')

@section('content')

<div class="body-inner">
    <div class="container-fluid">
        <div class="min-vh-100">
            <div class="row justify-content-center" >
                <div class="col-md-10 col-sm-10 mt-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('uploads') }}/product/{{ $product->product_image }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                                    <div class="m-3" style="text-align:center">
                                        <h3>{{ $product->product_name }}</h3>
                                        <div> 
                                            <h4 style="color: #A06357; font-weight:bold">Rp {{ number_format($product->product_price) }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <table class="table">
                                        <form method="POST" action="{{ url('order') }}/{{ $product->id }}">
                                                    @csrf
                                            <tbody>
                                                <tr>
                                                    <td>Nama Pemesan</td>
                                                    <td>
                                                        <input id="ordered_name" type="text" name="ordered_name" class="form-control" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No. HP</td>
                                                    <td>
                                                        <input id="ordered_phone" type="text" name="ordered_phone" class="form-control" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>
                                                        <textarea id="ordered_address" type="text" name="ordered_address" class="form-control" rows="4" placeholder="Tuliskan alamat dengan lengkap" required=""></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Pesan</td>
                                                    <td>
                                                        <input id="qty" type="number" name="qty" class="form-control" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Keterangan</td>
                                                    <td>
                                                        <textarea id="notes" type="text" name="notes" class="form-control" rows="4" placeholder="Tuliskan catatan untuk penjahit seperti ukuran, warna atau detail lainnya"></textarea>
                                                    </td>   
                                                </tr>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h3>Formulir Pemesanan</h3>
                                                    </div>
                                                    <div class="col-6">
                                                    <input name="_method" type="hidden" value="POST">
                                                    <button type="button" class="btn btn-primary mb-3 mr-2 float-right" data-toggle="modal" data-target="#self-order-product-modal" style="padding: 5px 30px"> Pesan </button>
                                                    </div>
                                                </div>
                                            </tbody>

                                            <!-- POPUP CONFIRMATION -->
                                            <div class="modal fade" id="self-order-product-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pemesanan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p> Pesanan akan segera diproses setelah melakukan konfirmasi pembayaran. </p>
                                                        <p> Apakah tetap ingin melanjutkan pemesanan? </p>

                                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                                        <input type="hidden" name="order_id" id="order_id" value="">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Pesan</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                        </form>   
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection