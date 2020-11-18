@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->product_name }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{ $product->product_image }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $product->product_name }}</h2>
                            <table class="table">
                                <form method="POST" action="{{ url('order') }}/{{ $product->id }}" >
                                            @csrf
                                    <tbody>
                                        <tr>
                                            <td>Nama Pemesan</td>
                                            <td>:</td>
                                            <td>
                                                <input id="ordered_name" type="text" name="ordered_name" class="form-control" required="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>No.HP</td>
                                            <td>:</td>
                                            <td>
                                                <input id="ordered_phone" type="text" name="ordered_phone" class="form-control" required="">
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>
                                                <textarea id="ordered_address" type="text" name="ordered_address" class="form-control" rows="4" required=""> </textarea>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Ukuran</td>
                                            <td>:</td>
                                            <td>
                                                <input id="size" type="text" name="size" class="form-control" required=""> </>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                                <input id="qty" type="number" name="qty" class="form-control" required="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>
                                                <textarea id="notes" type="text" name="notes" class="form-control" rows="4"> </textarea>
                                            </td>
                                            
                                        </tr>

                                        
                                        <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                    </tbody>
                                </form>   
                            </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection