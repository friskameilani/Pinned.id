@extends('layouts.app')

@section('content')
<section class="searchbarr" id="searchbarr" style="margin:30px">
  <div class="row">
      <div class="col-md-4">
          <!-- SEARCH BUTTON -->
          <form action="/search" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Cari produk atau penjahit..">
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

<div class="row" style="margin: 20px">
  @foreach($products as $product)
  <div class="col-6 col-md-4 col-lg-3 col-xl-2">
    <div class="card m-1">
      <img src= "{{ url('uploads') }}/product/{{ $product->product_image }}" class="card-img-top" alt="..." style="height: 15rem">
      <div class="card-body">
        <h5 class="card-title-max">{{ $product->product_name }}</h5>
        <p class="card-text">
            <strong> Rp {{ number_format($product->product_price)}} </strong><br>
        </p>
        <a href="{{ url('product') }}/{{ $product->id }}" class="btn btn-primary btn-block"> Lihat</a>
      </div>
    </div> 
  </div>
  @endforeach
</div>

@endsection