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
                                        <td>No. HP</td>
                                        <td>
                                            <input id="ordered_phone" type="text" name="ordered_phone" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>
                                            <textarea id="ordered_address" type="text" name="ordered_address" class="form-control" rows="4" placeholder="Tuliskan alamat dengan lengkap" required=""></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Desain</td>
                                        <td>
                                            <input id="design" type="file" name="design" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Penjahit</td>
                                        <td>
                                            <select id="tailor_id" name="tailor_id" class="form-control" required="">
                                            <option value=""> --Silahkan Pilih-- </option>
                                                @foreach($tailors as $tailor)
                                                <option value="{{ $tailor->id }}">[ID:{{ $tailor->id }} ] {{ $tailor->tailor_name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran</td>
                                        <td>
                                            <select id="size" name="size" class="form-control" required="">
                                            <option value=""> --Silahkan Pilih-- </option>
                                                <option value="size-s">S</option>
                                                <option value="size-m">M</option>
                                                <option value="size-l">L</option>
                                                <option value="size-xl">XL</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Produk</td>
                                        <td>
                                            <input id="qty" type="number" name="qty" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>
                                            <textarea id="notes" type="text" name="notes" class="form-control" rows="4"  placeholder="Tuliskan detail ukuran lingkar dada, lingkar bahu, dsb." required=""></textarea>
                                        </td>
                                    </tr>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3>Formulir Pemesanan</h3>
                                        </div>
                                        <div class="col-6">
                                            <input name="_method" type="hidden" value="POST">
                                            <button type="button" class="btn btn-primary mb-3 mr-2 float-right" data-toggle="modal" data-target="#order-product-modal" style="padding: 5px 30px"> Pesan </button>
                                        </div>
                                    </div>
                                </tbody>

                                <!-- POPUP CONFIRMATION -->
                                <div class="modal fade" id="order-product-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pemesanan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p> Pesanan yang sudah dibayar akan langsung diproses dan tidak dapat dibatalkan. </p>
                                            <p> Apakah tetap ingin melanjutkan pemesanan? </p>

                                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                            <input type="hidden" name="order_id" id="order_id" value="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary float-right">Pesan</button>
                                            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>      
                        </table>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection