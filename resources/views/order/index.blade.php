@extends('layouts.app')

@section('content')
<div class="body-inner">
    <div class="container-fluid">
        <div class="min-vh-100">
            <div class="row justify-content-center" >
                <div class="col-md-10 col-sm-10 mt-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('uploads') }}/{{ $product->product_image }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                                    <div class="m-3">
                                        <h3>{{ $product->product_name }}</h3>
                                        <div style="color: #A06357; "> 
                                            <h4>Rp {{ number_format($product->product_price) }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <table class="table">
                                        <form method="POST" action="{{ url('order') }}/{{ $product->id }}" >
                                                    @csrf
                                            <tbody>
                                                <tr>
                                                    <td>Nama Pemesan</td>
                                                    <td>
                                                        <input id="ordered_name" type="text" name="ordered_name" class="form-control" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No. HP</td>
                                                    <td>
                                                        <input id="ordered_phone" type="text" name="ordered_phone" class="form-control" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>
                                                        <textarea id="ordered_address" type="text" name="ordered_address" class="form-control" rows="4" required=""> </textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran</td>
                                                    <td>
                                                        <select id="size" name="size" class="form-control" required="">
                                                            <option value="size-s">S</option>
                                                            <option value="size-m">M</option>
                                                            <option value="size-l">L</option>
                                                            <option value="size-xl">XL</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Pesan</td>
                                                    <td>
                                                        <input id="qty" type="number" name="qty" class="form-control" required="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Keterangan</td>
                                                    <td>
                                                        <textarea id="notes" type="text" name="notes" class="form-control" rows="4"> </textarea>
                                                    </td>   
                                                </tr>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h3>Order Form</h3>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="submit" class="btn btn-primary mb-3 float-right" style="padding: 8px 30px"><i class="fa fa-shopping-cart"></i> Checkout</button>
                                                    </div>
                                                </div>
                                            </tbody>
                                        </form>   
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection