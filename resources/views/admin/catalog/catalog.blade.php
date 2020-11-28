<?php $thisPage="Catalog"; ?>
@extends('layouts.adminapp')

@section('content')
<section class="searchbarr" id="searchbarr" style="padding-bottom: 20px;">
  <div class="row">
      <div class="col-md-4">
          <!-- SEARCH BUTTON -->
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search product..">
              <div class="input-group-append">
              <button class="btn btn-secondary" type="button">
                  <i class="fa fa-search"></i>
              </button>
              </div>
          </div>
      </div>
  </div>
</section>

<div class="row" style="margin: 20px">
  <div class="col-6 col-md-4 col-lg-3 col-xl-2">
    <div class="card">
      <img src= "/images/contohbaju.png" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="row">
            <!-- TITLE -->
            <div class="col-md-9">
                <h5 class="card-title">Tie Dye Clothes</h5>
            </div>
            <!-- KEBAB MENU -->
            <div class="col-md-3">
                <div class="col-6" id="test">
                    <div class="dropdown">
                        <a data-toggle="dropdown"><i class="fa fa-ellipsis-v fa-2x waves-effect"></i></a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="/admineditcatalog">Edit</a>
                        <a class="dropdown-item delete" data-id="#deletecatalog" data-toggle="modal" data-target="#deletecatalog" href="#">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -->
        </div>
        <p class="card-text">
            <strong> Rp40.000 </strong><br>
        </p>
        <a href="/adminviewcatalog" class="btn btn-primary btn-block"> Lihat</a>
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
            <form action="/admincatalog" method="POST" id="deleteForm">
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