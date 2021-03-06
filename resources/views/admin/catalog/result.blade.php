<?php $thisPage="Catalog"; ?>
@extends('layouts.adminapp')

@section('content')
<section class="searchbarr" id="searchbarr" style="padding-bottom: 20px;">
  <div class="row">
      <div class="col-md-4">
          <!-- SEARCH BUTTON -->
          <form action="/admincatalog/search" method="get">
          <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="Cari produk..">
              <div class="input-group-append">
              <button class="btn btn-secondary" type="submit">
                  <i class="fa fa-search"></i>
              </button>
              </div>
          </div>
          </form>
      </div>
  </div>
</section>

<section class="title" id="title">
        <div class="row">
            <div class="col-md-6">
                <!-- JUDUL TAILOR -->
                <h1 class="text-left" style="color: #111;">
                    Produk Tersedia
                </h1>
            </div>

            <div class="col-md-6 clearfix" style="padding-right: 55px;">
                <!-- BUTTON ADD -->
                <a href="{{ url('adminaddcatalog') }}">
                    <button type="button" class="btn btn-success float-right">
                        +Tambah Produk Baru
                    </button>
                </a>
            </div>
        </div>
    </section>
    <br></br>

<div class="col-6 ml-3">
    <h4>{{ $result->total() }} hasil untuk pencarian '{{ request()->input('search') }}'</h4>
</div>

<div class="row" style="margin: 20px">
@foreach( $result as $products )
  <div class="col-6 col-md-4 col-lg-3 col-xl-2">
    <div class="card">
      <img src= "{{ url('uploads') }}/product/{{ $products->product_image }}" class="card-img-top" alt="..." style="height: 15rem">
      <div class="card-body">
        <div class="row">
            <!-- TITLE -->
            <div class="col-md-9">
                <h5 class="card-title-max">{{ $products->product_name }}</h5>
            </div>
            <!-- KEBAB MENU -->
            <div class="col-md-3">
                <div class="col-6" id="test">
                    <div class="dropdown">
                        <a data-toggle="dropdown"><i class="fa fa-ellipsis-v fa-2x waves-effect"></i></a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="/admincatalog/edit/{{$products->id}}">Ubah</a>
                        <a class="dropdown-item delete" data-id="{{$products->id}}" data-toggle="modal" data-target="#delete" href="#">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -->
        </div>
        <p class="card-text">
            <strong> Rp{{ number_format($products->product_price)}} </strong><br>
        </p>
        <a href="/adminviewcatalog/{{ $products->id }}" class="btn btn-primary btn-block"> Lihat</a>
      </div>
    </div> 
  </div>
@endforeach
</div>
    <!-- Pop Up for Delete Confirmation -->
    <!-- Modal popup -->

    <div class="modal fade" id="delete">
        <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Konfirmasi Penghapusan</h3>
                <button type="button" data-dismiss="modal" class="close">&times;</button>
            </div>
            <form action="{{route('admincatalog.destroy', 'delete')}}" method="POST" id="deleteForm">
            @csrf
            @method('delete')
                <div class="modal-body">

                    <h5> Setelah dihapus data akan benar-benar hilang. </h5>
                    <h5> Apakah tetap ingin melanjutkan? </h5>

                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <input type="hidden" name="product_id" id="no_id" value="">

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