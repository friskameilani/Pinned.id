@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $no++ }}</td>
                                @if($order->product_id == NULL)
                                <td> Barang pesanan sendiri </td>
                                @else
                                <td>{{ $order->product->product_name }}</td>
                                @endif
                                <td>{{ $order->date }}</td>
                                <td>
                                    @if($order->status == 0)
                                    Sudah Pesan & Belum dibayar
                                    @else
                                    Sudah dibayar 
                                    @endif
                                </td>
                                @if($order->product_id == 0)
                                <td>Mohon Tunggu Perhitungan dari Penjahit kami</td>
                                @else
                                <td>Rp. {{ number_format($order->total_price) }}</td>
                                @endif
                                <td>
                                @if($order->status == 0)
                                    <a href="{{ url('history') }}/{{ $order->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                    <a href="{{ url('history/payments') }}_{{ $order->random_code }}" class="btn btn-primary"><i class="fa fa-info"></i> Konfirmasi Pembayaran</a>
                                    <form method="POST" action="{{ route('history.destroy', [$order->id]) }}">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                @else
                                    <a href="{{ url('history') }}/{{ $order->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                @endif
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
