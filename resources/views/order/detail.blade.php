<?php $thisPage="Order"; ?>
@extends('layouts.app')

@section('content')
<div class="body-inner"> 
    <div class="container-fluid">
        <div class="min-vh-100">
            <div class="row justify-content-center" >
                <div class="col-md-10 mt-4 mb-3">

                    
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3">Order Details</h3>
                            <p>Order Number: <strong>{{ $order->random_code }}</strong></p>
                            <p>Order Date: {{ $order->date }}</p>
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead style="text-align:center">
                                    <tr>
                                        <th>Jumlah</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Barang</th>
                                        <th>Ukuran</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody style="text-align:center">                                    
                                        <tr>
                                            <td>{{ $order->qty }}</td>
                                            @if($order->product_id == NULL)
                                            <td></td>
                                            <td></td>
                                            @else
                                            <td>{{ $order->product_id }}</td>
                                            <td>{{ $order->product->product_name }}</td>
                                            @endif
                                            <td>{{ $order->size }}</td>      
                                            @if($order->product_id == NULL)
                                            <td style="text-align:left">Mohon tunggu perhitungan dari penjahit kami.</td>
                                            @else
                                            <td>Rp {{ number_format($order->product->product_price) }}</td>
                                            @endif
                                            <td style="text-align:left">Rp {{number_format($order->total_price) }}</td>
                                        </tr>                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>      
                                            <td class="font-weight-bold">TOTAL</bold></td>
                                            <td>Rp {{number_format($order->total_price) }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        
                        <div class="m-3">
                            <p>Silahkan lakukan pembayaran ke nomor rekening 1234567890 BNI an Friska Meilani. <br>Jika sudah selesai melakukan pembayaran, Anda dapat melakukan konfirmasi pembayaran melalui menu "Confirm Payment". <br>Terima kasih.</p>
                        </div>
                        <div class="col-6 offset-3 mb-3">
                        <a href="{{ url('/') }}" class="btn btn-primary btn-block"> Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection