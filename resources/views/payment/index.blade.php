@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4 style="text-align:center; margin-bottom: 20px">Confirm Payment</h4>
                    <div class="col-md-12">
                        <table class="table">
                            <form method="POST" action="{{ url('history') }}/{{'payments'}}_{{ $order->random_code }}" enctype="multipart/form-data" >
                                        @csrf
                                <tbody>
                                    <tr>
                                        <td>No Order</td>
                                        <td>
                                            {{$order->random_code}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pemilik Rekening</td>
                                        <td>
                                            <input id="account_name" type="text" name="account_name" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pembayaran</td>
                                        <td>
                                            <input id="bill_amount" type="text" name="bill_amount" class="form-control" required="">                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal transfer</td>
                                        <td>
                                            <input id="date" type="date" name="date" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bukti Transfer</td>
                                        <td>
                                            <input id="transfer_evidence" type="file" name="transfer_evidence" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input name="_method" type="hidden" value="POST">
                                            <button type="button" class="btn btn-primary mb-3 mr-2 float-right order-product" data-toggle="modal" data-target="#order-payment-modal" style="padding: 5px 30px">Kirim</button>
                                        </td>
                                    </tr>
                                </tbody>

                                <!-- POPUP CONFIRMATION -->
                                <div class="modal fade" id="order-payment-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pemesanan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p> Pastikan data konfirmasi yang Anda masukkan adalah benar. </p>
                                            <p> Kirimkan konfirmasi pembayaran sekarang? </p>

                                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                            <input type="hidden" name="order_id" id="order_id" value="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Kirim</button>
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