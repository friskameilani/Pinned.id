@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Self Order</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
        <h4 style="text-align:center">Order Form</h4>
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                            <table class="table">
                                <form method="POST" action="{{ url('order') }}" >
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
                                            <td>Design</td>
                                            <td>:</td>
                                            <td>
                                                <input id="design" type="text" name="design" class="form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ID Penjahit</td>
                                            <td>:</td>
                                            <td>
                                                <input id="tailor_id" type="text" name="tailor_id" class="form-control">
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

                                        <button type="submit" class="btn btn-primary mb-3 float-right"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                    </tbody>
                                </form>   
                                
                            </table>
                    
               
            </div>
        </div>
    </div>
</div>
@endsection