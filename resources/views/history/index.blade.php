@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead style="text-align:center">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Waktu Pemesanan</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <?php $no = 1; ?>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $no++ }}</td>
                                @if($order->product_id == NULL)
                                <td style="text-align:left"> Barang pesanan sendiri </td>
                                @else
                                <td style="text-align:left">{{ $order->product->product_name }}</td>
                                @endif
                                <td> 
                                    <?php
                                        $date = $order->created_at;
                                        echo date('d F Y, H:i', strtotime($date)); //June, 2017
                                    ?>
                                </td>
                                <td>
                                    <!-- INI STATUSNYA PAID/UNPAID BELUM DITENTUIN -->

                                    <!-- STATUS: BELUM DIBAYAR -->
                                    
                                    @if($order->status == 0)
                                    <a href="#" class="btn btn-unpaid disabled">Belum dibayar</a>
                                    <!-- STATUS: SUDAH DIBAYAR BELUM DIKONFIRMASI-->
                                    @elseif($order->status == 1)
                                    <a href="#" class="btn btn-wait disabled">Menunggu konfirmasi</a>
                                    <!-- STATUS: SUDAH DIBAYAR BELUM DIPROSES-->
                                    @elseif($order->status == 2)
                                    <a href="#" class="btn btn-paid disabled">Dalam Proses Pengerjaan</a>
                                    <!-- STATUS: SEDANG DIPROSES-->
                                    @elseif($order->status == 3)
                                    <a href="#" class="btn btn-process disabled">Dalam Proses Pengiriman</a>
                                    <!-- STATUS: SELESAI-->
                                    @elseif($order->status == 4)
                                    <a href="#" class="btn btn-completed disabled">Telah Diterima</a>
                                    @endif
                                </td>
                                <!-- @if($order->product_id == 0 & $order->status == 0)
                                <td style="text-align:left">Mohon tunggu perhitungan dari penjahit kami.</td>
                                @elseif($order->product_id == 0 & $order->status == 1)
                                <td style="text-align:left">Sesuai kesepakatan</td>
                                @elseif($order->product_id == 0 & $order->status == 2)
                                <td style="text-align:left">Sesuai kesepakatan.</td>
                                @else
                                <td style="text-align:left">Rp. {{ number_format($order->total_price) }}</td>
                                @endif -->
                                
                                @if($order->total_price == 0 & $order->product_id == null)
                                <td style="text-align:left">Mohon tunggu perhitungan dari penjahit kami.</td>
                                @else
                                <td style="text-align:left">Rp. {{ number_format($order->total_price) }}</td>
                                @endif

                                <td>
                                    <a href="{{ url('history') }}/{{ $order->id }}" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
