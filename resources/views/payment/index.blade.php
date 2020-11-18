@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Confirm Payment</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
        <h4 style="text-align:center">Confirm Payment</h4>
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                            <table class="table">
                                <form method="POST" action="{{ url('confirm_payment') }}" >
                                            @csrf
                                    <tbody>
                                    
                                        <tr>
                                            <td>No Order</td>
                                            <td>:</td>
                                            <td>
                                                <input id="order_id" type="text" name="order_id" class="form-control" required="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Nama Pemilik Rekening</td>
                                            <td>:</td>
                                            <td>
                                                <input id="account_name" type="text" name="account_name" class="form-control" required="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Jumlah Pembayaran</td>
                                            <td>:</td>
                                            <td>
                                                <input id="bill_amount" type="text" name="bill_amount" class="form-control" required="">                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal transfer</td>
                                            <td>:</td>
                                            <td>
                                                <input id="date" type="text" name="date" class="form-control">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Bukti Transfer</td>
                                            <td>:</td>
                                            <td>
                                                <input id="transfer_evidence" type="text" name="transfer_evidence" class="form-control">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>    
                                                <button type="submit" class="btn btn-primary mb-3 float-right">Kirim</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </form>   
                                
                            </table>
                    
               
            </div>
        </div>
    </div>
</div>
@endsection