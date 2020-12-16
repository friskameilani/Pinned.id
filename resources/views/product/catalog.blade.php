@extends('layouts.app')

@section('content')
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
<section class="searchbarr" id="searchbarr" style="margin:30px">
  <div class="row">
      <div class="col-md-4">
          <!-- SEARCH BUTTON -->
          <form action="/search" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Cari produk berdasarkan nama atau penjahit">
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

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

@endsection