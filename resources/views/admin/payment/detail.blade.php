<?php $thisPage="Payment Detail"; ?>
@extends ('layouts.adminapp')

@section('content')   

<!-- BREADCRUMB -->
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <a href="{{ url('adminpayment') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="col-md-12 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('adminpayment') }}">Pembayaran</a></li>
                <li class="breadcrumb-item active" aria-current="admindetailorder">Detail Pembayaran</li>
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
                            Detail Pembayaran: {{ $payment->order_id }}
                        </h3>
                        <br></br>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>No. Order :</td>
                                    <td>{{ $payment->order_id }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Pemilik Rekening :</td>
                                    <td>{{ $payment->account_name }}</td>
                                </tr>
                                <tr>
                                    <td>No. HP :</td>
                                    <td>{{ $payment->user->phone_number }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Pembayaran :</td>
                                    <td>Rp {{ $payment->bill_amount }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Transfer :</td>
                                    <td>{{ $payment->date }}</td>
                                </tr>
                                <tr>
                                    <td>Bukti Transfer :</td>
                                    <td>
                                        <img src="/uploads/payments/{{ $payment->transfer_evidence}}" style="width: 200px; height: 400px;">
                                    </td>
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