@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">     
        <div class="col-md-12 mt-3">
            <div class="card mb-3">
                <div class="card-body ml-3 mr-3">
                    <div class="row mt-2">
                        <div class="col-8">
                            @if($order->product_id == NULL )
                            <h3>Barang pesanan sendiri</h3>
                            @else
                            <h3>Pesanan: {{ $order->product->product_name }}</h3>
                            @endif
                        </div>
                        @if($order->status == 0)
                        <div class="col-4">
                            <a class ="btn btn-primary float-right" href ="{{ url('history/payments') }}_{{ $order->random_code }}" style="padding: 5px 30px"> Konfirmasi Pembayaran</a>
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            @if($order->design == NULL)
                            <img src= "{{ url('uploads') }}/{{ $order->product->product_image }}" class="card-img-top" alt="...">
                            @else
                            <!-- MASING BINGUNG GIMANA KONVERSI LOKASI FOTO JADI NAMA FOTO NYA AJA -->
                            <img src= "{{ url('uploads/self_design') }}/{{ $order->design}}" class="card-img-top" alt="...">
                            @endif
                        </div>
                        <div class="col-md-8 mt-3 ml-2">
                            <table class="table">                                 
                                <tbody>
                                    <tr>
                                        <td>No. Order</td>
                                        <td>:</td>
                                        <td>
                                        {{$order->random_code}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td>:</td>                                        
                                        <td>
                                        {{$order->ordered_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No. HP</td>
                                        <td>:</td>
                                        <td>
                                        {{$order->ordered_phone}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>
                                        {{$order->ordered_address}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran</td>
                                        <td>:</td>
                                        <td>
                                        {{$order->size}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                        {{$order->qty}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>
                                        {{$order->notes}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Harga</td>
                                        <td>:</td>
                                        <td>
                                        @if($order->product_id != NULL)
                                        Rp. {{ number_format($order->total_price) }}
                                        @else
                                        Mohon tunggu perhitungan dari penjahit kami.
                                        @endif
                                        </td> 
                                    </tr>
                                </tbody>  
                            </table>
                        </div>
                    </div>
                    
                    <!-- JIKA BELUM DIBAYAR, MASIH BISA DIBATALKAN -->
                    @if($order->status == 0)
                    <div class="row justify-content-center mt-3 pt-3">
                        <form method="POST" action="{{ route('history.destroy', [$order->id]) }}">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-outline-danger">Batalkan Pesanan</button>
                        </form>
                    </div>
                    @else
                    <div class="row justify-content-center mt-3 pt-3"  style="background-color:#F1F1F1">
                        @if($order->status == 1)
                        <p>ANDA TELAH MELAKUKAN PEMBAYARAN, PESANAN AKAN SEGERA DIPROSES.</p>
                        @elseif($order->status == 2)
                        <p>ANDA TELAH MELAKUKAN PEMBAYARAN, PESANAN SEDANG DIPROSES.</p>
                        @elseif($order->status == 3)
                        <p>PESANAN TELAH SELESAI.</p>
                        @endif
                    </div>
                    @endif
                </div>
            </div>        
    </div>
</div>
@endsection
