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
                            Detail Pemesanan: #12345
                        </h3>
                        <br></br>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama :</td>
                                    <td>Mahardhika Adhi</td>
                                </tr>
                                <tr>
                                    <td>No. HP :</td>
                                    <td>08347829392</td>
                                </tr>
                                <tr>
                                    <td>Kode Produk :</td>
                                    <td>#12345</td>
                                </tr>
                                <tr>
                                    <td>Jumlah :</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Ukuran :</td>
                                    <td>XL</td>
                                </tr>
                                <tr>
                                    <td>Desain :</td>
                                    <td>
                                        <img src="/images/contohbaju.png" style="width: 200px; height: 200px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Keterangan :</td>
                                    <td>gaada</td>
                                </tr>
                                <tr>
                                    <td>Provinsi :</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>Kota/Kabupaten :</td>
                                    <td>Depok</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan :</td>
                                    <td>Sukmajaya</td>
                                </tr>
                                <tr>
                                    <td>Kode Pos :</td>
                                    <td>16472</td>
                                </tr>
                                <tr>
                                    <td>Alamat :</td>
                                    <td>Jalan Merdeka No. 55</td>
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