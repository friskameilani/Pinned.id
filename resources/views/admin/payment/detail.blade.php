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
                            Detail Pembayaran: 1245
                        </h3>
                        <br></br>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>No. Order :</td>
                                    <td>1245</td>
                                </tr>
                                <tr>
                                    <td>Nama Pemilik Rekening :</td>
                                    <td>Mahardhika Adhi</td>
                                </tr>
                                <tr>
                                    <td>No. HP :</td>
                                    <td>08347829392</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Pembayaran :</td>
                                    <td>Rp 450.000</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Transfer :</td>
                                    <td>22-09-2020 18:31</td>
                                </tr>
                                <tr>
                                    <td>Bukti Transfer :</td>
                                    <td>
                                        <img src="/images/contohstruk.png" style="width: 200px; height: 400px;">
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