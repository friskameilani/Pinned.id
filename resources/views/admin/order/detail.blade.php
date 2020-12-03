<?php $thisPage="Order Detail"; ?>
@extends ('layouts.adminapp')

@section('content')   

<!-- BREADCRUMB -->
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <a href="{{ url('adminorder') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="col-md-12 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('adminorder') }}">Order</a></li>
                <li class="breadcrumb-item active" aria-current="admindetailorder">Order Detail</li>
            </ol>
        </nav>
    </div>
</div>


<br></br>

<div class="body-inner">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Detail Pemesanan: {{ $order->random_code }}
                        </h3>
                        <br></br>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama :</td>
                                    <td>{{ $order->ordered_name }}</td>
                                </tr>
                                <tr>
                                    <td>No. HP :</td>
                                    <td>{{ $order->ordered_phone }}</td>
                                </tr>
                                <tr>
                                    <td>Kode Produk :</td>
                                    <td>{{ $order->product_id }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah :</td>
                                    <td>{{ $order->qty }}</td>
                                </tr>
                                <tr>
                                    <td>Ukuran :</td>
                                    <td>{{ $order->size }}</td>
                                </tr>
                                <tr>
                                    <td>Desain :</td>
                                    <td>
                                        @if( $order->design == null)
                                        <img src="/uploads/product/{{$order->product->product_image}}" style="width: 200px; height: 200px;">
                                        @else
                                        <img src="/uploads/self_design/{{ $order->design }}" style="width: 200px; height: 200px;">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterangan :</td>
                                    <td>{{ $order->notes }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat :</td>
                                    <td>{{ $order->ordered_address }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            

@endsection