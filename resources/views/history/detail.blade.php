@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/history') }}">Riwayat Pemesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pesanan ke {{$order->id}}</li>
                </ol>
            </nav>
        </div>
        
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td>:</td>
                                        <td>
                                            {{$order->ordered_name}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>No.HP</td>
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
                                    @if($order->product_id != NULL)
                                    <tr>
                                        <td>Total Harga</td>
                                        <td>:</td>
                                        <td>
                                        Rp. {{ number_format($order->total_price) }}
                                        </td> 
                                    </tr>
                                    @endif
                                </tbody>  
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        
    </div>
</div>
@endsection
