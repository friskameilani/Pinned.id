@extends('layouts.app')

@section('content')
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
</div>
@endsection