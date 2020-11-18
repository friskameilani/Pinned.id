@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container" style="margin-top:30px;">
  <div class="row justify-content-center">
    <span class="bmd-form-group"><div class="input-group no-border">
      <input type="text" value="" class="form-control" placeholder="Search...">
      <button type="submit" class="btn btn-white btn-round btn-just-icon">
        <i class="fa fa-search"></i>
        <div class="ripple-container"></div>
      </button>
    </div></span>
  </div>
=======
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
                <a href="{{ url('product') }}/{{ $product->id }}" class="btn btn-primary"> Lihat</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
>>>>>>> refs/remotes/origin/master
</div>

<div class="row">
<div class="col-6 col-md-3 col-lg-2">
                  <div class="card">

                    <div class="img-container">

                      <a href="#"><img src="images/mesin-jahit.jpg" alt="Titre 1" class="card-img-top"></a>

                    </div>

                    <div class="card-body">

                      <a href="#" class="card-title cardTitleLink"><h2 class="cardTitle">title</h2></a>

                      <p class="card-text text-muted">hheee</p>

                      <a href="#" class="btn btn-outline-danger btn-sm">Continue Lendo</a>

                    </div>

                  </div>
               </div>
<div class="col-6 col-md-3 col-lg-2">
    <div class="card">
      <img src= "images/mesin-jahit.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tie Dye T-Shirt</h5>
        <p class="card-text">
            <strong>Harga :</strong> Rp 100.000 <br>
            <hr>
            <strong>Keterangan :</strong> <br>
            mantap
        </p>
        <a href="#" class="btn btn-primary"> Lihat</a>
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
            <strong>Keterangan :</strong> <br>
            {{ $product->product_desc }} 
        </p>
        <a href="{{ url('product') }}/{{ $product->id }}" class="btn btn-primary"> Lihat</a>
      </div>
    </div> 
</div>
@endforeach
@endsection