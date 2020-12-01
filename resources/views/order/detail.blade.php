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
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="mb-3">Detail Pesanan</h3>
                                    <p>Nomor Pesanan: <strong>{{ $order->random_code }}</strong></p>
                                    <p>Tanggal Pemesanan: {{ $order->date }}</p>
                                </div>

                                <!-- MASIH GABISA MUNCULIN DESIGN NYAA. ITU CARA AMBIL JUDUL FOTO NYA GIMANA DEH??? -->
                                @if($order->design != NULL)
                                <div class="col-3 float-right">
                                    <img src="{{ url('uploads/self_design') }}/{{ $order->design }}" class="rounded mx-auto d-block" width="50%" alt=""> 
                                </div>
                                @endif
                            </div>

                            <div class="box-body table-responsive">
                                @if($order->product_id == NULL)
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead style="text-align:center">
                                    <tr>
                                        <th>Jumlah</th>
                                        <th>Nama Penjahit</th>
                                        <th>Ukuran</th>
                                        <th>Catatan</th>
                                        <th>Harga</th>
                                    </tr>
                                    </thead>
                                    <tbody style="text-align:center">                                    
                                        <tr>
                                            <td>{{ $order->qty }}</td>
                                            <td>{{ $order->tailor->tailor_name }}</td>
                                            <td>{{ $order->size }}</td>                                                 
                                            <td style="text-align:left">{{ $order->notes }}</td> 
                                            <td style="text-align:left">Mohon tunggu perhitungan dari penjahit kami.</td>
                                        </tr>                                        
                                    </tbody>
                                </table>

                                @else
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead style="text-align:center">
                                    <tr>
                                        <th>Jumlah</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Ukuran</th>
                                        <th>Catatan</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody style="text-align:center">                                    
                                        <tr>
                                            <td>{{ $order->qty }}</td>
                                            <td>{{ $order->product_id}}</td>
                                            <td>{{ $order->product->product_name }}</td>
                                            <td>{{ $order->size }}</td>                                                 
                                            <td style="text-align:left">{{ $order->notes }}</td> 
                                            <td>Rp {{ number_format($order->product->product_price) }}</td>
                                            <td style="text-align:left">Rp {{ number_format($order->total_price) }}</td>
                                        </tr>                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>     
                                            <td></td> 
                                            <td class="font-weight-bold">TOTAL</bold></td>
                                            <td>Rp {{number_format($order->total_price) }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                @endif
                            </div>
                        </div>
                        
                        @if($order->product_id == NULL)
                        <div class="m-3">
                            <p>Ketentuan:</p>
                            <ul>
                                <li>Pesanan akan segera diproses setelah penjahit mitra kami menghubungi Anda terkait detail pemesanan dan harga yang harus dibayarkan. </li>
                                <li>Pembayaran dilakukan hanya melalui nomor rekening Pinned ID yakni <strong>1234567890 BNI an Friska Meilani</strong>. </li>
                                <li>Untuk melihat informasi pemesanan dan konfirmasi pembayaran, Anda dapat mengunjungi menu <strong>"Riwayat Pesanan"</strong> atau dengan menekan tombol "Riwayat Pemesanan" dibawah ini.</li>
                                <li>Terima kasih.</li>
                            </ul>
                        </div>
                        <div class="col-6 offset-3 mb-3">
                            <a href="{{ url('history') }}" class="btn btn-primary btn-block"> Riwayat Pemesanan</a>
                        </div>

                        @else

                        <div class="m-3">
                            <p>Ketentuan:</p>
                            <ul>
                                <li>Silahkan lakukan pembayaran ke nomor rekening <strong>1234567890 BNI an Friska Meilani</strong>. </li>
                                <li>Jika sudah selesai melakukan pembayaran, Anda dapat melalukan konfirmasi pembayaran dengan menekan tombol <strong>"Konfirmasi Pembayaran"</strong>. </li>
                                <li>Jika pembayaran dilakukan kemudian, Anda dapat melihat informasi pesanan dan rekening tujuan pembayaran pada menu <strong>"Riwayat Pesanan"</strong>. </li>
                                <li>Kemudian Anda dapat melakukan konfirmasi pembayaran melalui menu tersebut. </li>
                                <li>Anda dapat menghubungi penjahit terkait untuk komunikasi lebih lanjut. Terima kasih.</li>
                            </ul>
                        </div>
                        <div class="col-6 offset-3 mb-3">
                            <a href="{{ url('history/payments') }}_{{ $order->random_code }}" class="btn btn-primary btn-block"> Konfirmasi Pembayaran</a>
                        </div>
                        @endif
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection