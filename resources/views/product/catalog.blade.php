@extends('layouts.app')

@section('content')
<section class="searchbarr" id="searchbarr" style="margin:30px">
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
      <img src= "images/mesin-jahit.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tie Dye T-Shirt</h5>
        <p class="card-text">
            <strong> Rp 100.000 </strong><br>
        </p>
        <a href="#" class="btn btn-primary btn-block"> Lihat</a>
      </div>
    </div> 
  </div>
</div>


@foreach($products as $product)
  <div class="col-md-4">
      <div class="card">
        <img src="{{ url('uploads') }}/{{ $product->product_image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $product->product_name }}</h5>
          <p class="card-text">
              <strong>Harga :</strong> Rp. {{ number_format($product->product_price)}} <br>
              <hr>
              <strong>Deskripsi :</strong> <br>
              {{ $product->product_desc }} 
              <hr>
              <strong>Ukuran :</strong> 
              {{ $product->product_size }}
              <hr>
              <strong>Tipe :</strong> 
              {{ $product->product_type }}
              <hr>
              <strong>Kategori :</strong> 
              {{ $product->product_category }} 
          </p>
          <a href="{{ url('product') }}/{{ $product->id }}" class="btn btn-primary btn-block"><i class="fa fa-shopping-cart"></i>Lihat</a>
        </div>
      </div> 
  </div>
@endforeach

@endsection