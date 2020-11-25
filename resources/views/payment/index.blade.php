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
                                <form method="POST" action="{{ url('payments') }}_{{ $order->random_code }}" enctype="multipart/form-data" >
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
                                                <input id="date" type="date" name="date" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bukti Transfer</td>
                                            <td>
                                                <input id="transfer_evidence" type="file" name="transfer_evidence" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>    
                                                <button type="submit" class="btn btn-primary mb-3 float-right" style="padding: 5px 30px">Kirim</button>
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