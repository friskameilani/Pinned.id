@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 mb-3">        
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <table class="table">
                            <form method="POST" action="{{ url('order') }}" enctype="multipart/form-data">
                                        @csrf
                                <tbody>
                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td>
                                            <input id="ordered_name" type="text" name="ordered_name" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No.HP</td>
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
                                        <td>Design</td>
                                        <td>
                                            <input id="design" type="file" name="design" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ID Penjahit</td>
                                        <td>
                                            <input id="tailor_id" type="text" name="tailor_id" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran</td>
                                        <td>
                                            <input id="size" type="text" name="size" class="form-control" required=""> </>
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
@endsection