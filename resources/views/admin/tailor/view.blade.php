<?php $thisPage="View Tailor"; ?>
@extends('layouts.adminapp')

@section('content')

<!-- BREADCRUMB -->
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admintailor') }}">Penjahit</a></li>
            <li class="breadcrumb-item active" aria-current="admineditcatalog">Penjahit: {{ $tailor->tailor_name }}</li>
        </ol>
    </nav>
</div>

<div class="body-inner">
    <div class="container-fluid">
        <div class="min-vh-100">
            <div class="row justify-content-center" >
                <div class="col-md-8 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    @if($tailor->tailor_photo == null)
                                    <img src="/uploads/tailors/Person-Icon.png" class="rounded mx-auto d-block" width="100%" alt=""> 
                                    @else
                                    <img src="/uploads/tailors/{{$tailor->tailor_photo}}" class="rounded mx-auto d-block" width="100%" alt=""> 
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <h3>{{ $tailor->tailor_name }}</h3>
                                        </div>
                                        <div class="col-6">
                                            <a class ="btn btn-secondary float-right" href ="/admintailor/edit/{{ $tailor->id }}" style="padding: 5px 30px; width: 120px; height: 35px;"> Perbarui</a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-8 product-price">
                                            <h5>Umur: {{ $tailor->tailor_age }} tahun</h5>
                                            <h5>Alamat: {{ $tailor->tailor_address }}</h5>
                                            <h5>Total Produk: 2</h5>
                                        </div>
                                        <div class="col-4">
                                            <a class="btn btn-block btn-danger btn-sm delete float-right" data-id="#deletetailor" data-toggle="modal" data-target="#deletetailor" style="padding: 5px 30px; width: 120px; height: 30px;">Hapus</a>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="width: 160px;">Deskripsi :</td>
                                                <td class="text-justify">{{ $tailor->tailor_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 160px;"> <i class="fa fa-phone" style="font-size:15px; transform: scale(-1, 1); padding-left:5px;"></i>  Nomor Telepon :</td>
                                                <td>{{ $tailor->tailor_contact }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LIST BARANG -->
<h2 class="text-center">List Barang</h2>
<br></br>

<div class="row" style="margin: 20px">
@foreach($products as $product)
    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card">
            <img src= "/uploads/product/{{$product->product_image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">
                    <strong>  Rp {{ $product->product_price }} </strong><br>
                </p>
                <a href="/adminviewcatalog/{{ $product->id }}" class="btn btn-primary btn-block"> Lihat</a>
            </div>
        </div> 
    </div>
@endforeach
</div>




<div class="modal-footer">
    <div style="text-align:center;">
        <div class="col-12">
            <p>&copy; Pinned.id. All rights reserved.</p>
        </div>
    </div>
</div>


<!-- Pop Up for Delete Confirmation -->
<!-- Modal popup -->

<div class="modal fade" id="deletetailor">
    <div class="modal-dialog">
    <!-- Modal Content -->
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Konfirmasi Penghapusan</h3>
            <button type="button" data-dismiss="modal" class="close">&times;</button>
        </div>
        <form action="/admintailor/{{ $tailor->id }}/delete" method="POST" id="deleteForm">
        @csrf
        @method('delete')
            <div class="modal-body">

                <h5> Setelah dihapus data akan benar-benar hilang. </h5>
                <h5> Apakah tetap ingin melanjutkan? </h5>

                <!-- <input type="hidden" name="_method" value="DELETE"> -->
                <input type="hidden" name="catalog_id" id="catalog_id" value="">

            </div>

            <div class="modal-footer" style="background-color: #EEE;">
                <button type="submit" class="btn btn-primary"> Hapus </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>


<script>
    $('a[data-toggle="dropdown"]').click(function() {
        dropDownFixPosition($(this), $('.dropdown-menu'));
    });

    function dropDownFixPosition(a, dropdown) {
        var dropDownTop = a.offset().top + a.outerHeight();
        dropdown.css('top', dropDownTop + "px");
        //Delete - dropdown.width() if you want menu to be bottom right of link
        dropdown.css('left', a.offset().left - dropdown.width() + "px");
    }

</script>
@endsection