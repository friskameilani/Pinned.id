@extends('layouts.adminapp')

@section('content')

<!-- BREADCRUMB -->
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admincatalog') }}">Catalog</a></li>
            <li class="breadcrumb-item active" aria-current="admineditcatalog">Catalog View</li>
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
                                    <img src="/uploads/product/{{$product->product_image}}" class="rounded mx-auto d-block" width="100%" alt=""> 
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <h3>{{ $product->product_name }}</h3>
                                        </div>
                                        <div class="col-6">
                                            <a class ="btn btn-secondary float-right" href ="/admincatalog/edit/{{ $product->id }}" style="padding: 5px 30px; width: 120px; height: 35px;"> Perbarui</a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-8 product-price">
                                            <ins>Rp{{ number_format($product->product_price)}}</ins>
                                        </div>
                                        <div class="col-4">
                                            <a class="btn btn-block btn-danger btn-sm delete float-right" data-id="#deletecatalog" data-toggle="modal" data-target="#deletecatalog" style="padding: 5px 30px; width: 120px; height: 30px;">Hapus</a>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Deskripsi :</td>
                                                <td>{{ $product->product_desc }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kategori :</td>
                                                <td>{{ $product->product_category }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tipe :</td>
                                                <td>{{ $product->product_type }}</td>
                                            </tr>
                                            <tr>
                                                <td>Bahan :</td>
                                                <td>{{ $product->product_material }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat :</td>
                                                <td>{{ $product->tailor->tailor_address }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-9">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5 m-3 d-flex justify-content-center" style="padding-top: 15px">
                                                    <a href="/admintailor/{{$product->tailor->id}}"><h4>{{ $product->tailor->tailor_name }}</h4></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-lg btn-success m-3" href="https://api.whatsapp.com/send?phone={{$product->tailor->tailor_contact}}&text=Hi,%20I%20would%20like%20to%20get%20more%20information..">
                                                        <i class="fab fa-whatsapp fa-2x"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    
</div>

    <!-- Pop Up for Delete Confirmation -->
    <!-- Modal popup -->

    <div class="modal fade" id="deletecatalog">
        <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Konfirmasi Penghapusan</h3>
                <button type="button" data-dismiss="modal" class="close">&times;</button>
            </div>
            <form action="/admincatalog/{{$product->id}}/delete" method="POST" id="deleteForm">
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