<?php $thisPage="Payment"; ?>
@extends ('layouts.adminapp')

@section('content')
<title class="text-center">Payment</title>

    <!-- Content Wrapper. Contains page content -->
    

    <main>
    <section class="title" id="title">
        <div class="row">
            <div class="col-md-6">
                <!-- JUDUL PAYMENT -->
                <h1 class="text-left">
                    Payment
                </h1>
            </div>
        </div>
    </section>
    <br></br>

    <!-- Main content -->
    <section class="content">
      <div class="row offset-md-1">
        <div class="col-md-11">

          <!-- /.box -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th ><center>#</center></th>
                  <th ><center>Order ID</center></th>
                  <!-- <th ><center>Tanggal Pemesanan</center></th> -->
                  <th ><center>Nama</center></th>
                  <th ><center>Jumlah Pembayaran</center></th>
                  <th ><center>Tanggal Pembayaran</center></th>
                  <th ><center>Aksi</center></th>
                </tr>
                </thead>


                <tbody>
                @foreach( $payments as $payments )
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $payments->order_id }}</td>

                  <!-- DISINI FORMATNYA DD-MM-YYYY - jam:menit -->
                  <!-- <td>{{ $payments->date }}</td>                   -->
                  <!-- -->

                  <td>{{ $payments->account_name }}</td>

                  <!-- DISINI FORMATNYA Rp sekian -->
                  <td>Rp {{ $payments->bill_amount }}</td>                  
                  <!-- -->

                  <!-- DISINI FORMATNYA DD-MM-YYYY - jam:menit -->
                  <td>{{ $payments->date }}</td>                  
                  <!-- -->

                  <td><a href="/adminpayment/{{ $payments->id }}" type="button" class="btn btn-block btn-secondary btn-sm">Detail</a></td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

