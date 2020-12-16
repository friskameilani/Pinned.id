<?php $thisPage="Order Detail"; ?>
@extends ('layouts.adminapp')

@section('content')   

<!-- BREADCRUMB -->
<div class="container">
    <div class="row">
    <div class="col-md-12 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('adminorder') }}">Order</a></li>
                <li class="breadcrumb-item active" aria-current="admindetailorder">Detail Order</li>
            </ol>
        </nav>
    </div>
</div>


<br></br>

<div class="body-inner">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Detail Pemesanan: {{ $order->random_code }}
                        </h3>
                        <br></br>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama :</td>
                                    <td>{{ $order->ordered_name }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor telepon :</td>
                                    <td>{{ $order->ordered_phone }}</td>
                                </tr>
                                <tr>
                                    @if( $order->product_id == null)
                                    <td>Kode Produk (ID):</td>
                                    <td>Pesanan Khusus</td>
                                    @else
                                    <td>Kode Produk (ID):</td>
                                    <td>{{ $order->product_id }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Jumlah :</td>
                                    <td>{{ $order->qty }}</td>
                                </tr>
                                <tr>
                                    <td>Ukuran :</td>
                                    <td>{{ $order->size }}</td>
                                </tr>
                                <tr>
                                    <td>Desain :</td>
                                    <td>
                                        @if( $order->design == null)
                                        <img src="/uploads/product/{{$order->product->product_image}}" style="width: 200px; height: 200px;">
                                        @else
                                        <img src="/uploads/self_design/{{ $order->design }}" style="width: 200px; height: 200px;">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    @if( $order->total_price == 0)
                                    <td>Total Harga :</td>
                                    <td>Belum ditentukan</td>
                                    @else
                                    <td>Total Harga :</td>
                                    <td>Rp. {{ $order->total_price }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Keterangan :</td>
                                    <td>{{ $order->notes }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat :</td>
                                    <td>{{ $order->ordered_address }}</td>
                                </tr>
                            </tbody>
                        </table>
                        @if ($order->product_id == null & $order->status == 0)
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a class="btn btn-block btn-primary delete float-right" data-id="#deletecatalog" data-toggle="modal" data-target="#deletecatalog">Tentukan Harga Order</a>
                        </div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="deletecatalog">
        <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Masukkan Harga</h3>
                <button type="button" data-dismiss="modal" class="close">&times;</button>
            </div>
            <form action="/adminorder/{{$order->id}}/harga" method="POST" id="deleteForm">
            @csrf
            @method('patch')
                <div class="modal-body">
                    <input id="total_price" name="total_price" class="form-control @error('total_price') is-invalid @enderror border border-dark" required="" value="{{$order->total_price}}" style="width: 467px;"></textarea>
                    <br>
                    <div class="form-group row mb-0" >
                </div>

                <div class="modal-footer" style="background-color: #EEE;">
                    <button type="submit" class="btn btn-primary"> Submit Harga </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
</div>


<script>
    $('a[data-toggle="dropdown"]').click(function() {
        dropDownFixPosition($(this), $('.dropdown-menu'));
    });

    function dropDownFixPosition(a, dropdown) {
        var dropDownTop = a.offset().top + a.outerHeight();
        dropdown.css('top', dropDownTop + "px");
        //Delete - dropdown.width() if you want menu to be bottom right of link
        dropdown.css('left', a.offset().left - dropdown.width() + "px");
    }

</script>

@endsection