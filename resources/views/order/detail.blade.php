<?php $thisPage="Order"; ?>
@extends('layouts.app')

@section('content')
<div class="body-inner">
    <div class="container-fluid">
        <div class="min-vh-100">
            <div class="row justify-content-center" >
                <div class="col-md-10 mt-4 mb-3">
                    <div class="card">
                        @foreach($order as $order)
                        <div class="card-body">
                            <h3 class="mb-3">Order Details</h3>
                            <p>Order Number: {{ $order->random_code }}</p>
                            <p>Order Date: {{ $order->date }}</p>
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th ><center>Jumlah</center></th>
                                        <th ><center>Kode Produk</center></th>
                                        <th ><center>Ukuran</center></th>
                                        <th ><center>Harga</center></th>
                                        <th ><center>Total</center></th>
                                    </tr>
                                    </thead>
                                    <tbody>                                    
                                        <tr>
                                            <td><center>{{ $order->qty }}</center></td>
                                            <td><center>{{ $order->product_id }}</center></td>
                                            <td><center>{{ $order->size }}</center></td>      
                                            <td><center>Rp {{ $order->total_price }}</center></td>
                                            <td><center>Rp {{ $order->qty*$order->total_price }}</center></td>
                                        </tr>                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>      
                                            <td>SHIPMENT</td>
                                            <td><center>Rp 20000</center></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>      
                                            <td class="font-weight-bold">TOTAL</bold></td>
                                            <td><center>Rp {{ 20000 + $order->qty*$order->total_price }}</center></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        @endforeach
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