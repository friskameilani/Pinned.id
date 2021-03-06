<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300" alt="">
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
    </div>
</div>
@endsection -->