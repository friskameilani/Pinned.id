<?php $thisPage="Order"; ?>
@extends ('layouts.adminapp')

@section('content')
<title class="text-center">Order</title>

    <!-- Content Wrapper. Contains page content -->
    

    <main>
    <!-- JUDUL SAMA BUTTON -->
    <section class="title" id="title">
        <div class="row">
            <div class="col-md-6">
                <!-- JUDUL TAILOR -->
                <h1 class="text-left">
                    Order
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
                  <th ><center>Status Pembayaran</center></th>
                  <th ><center>Nama</center></th>
                  <th ><center>Tanggal</center></th>
                  <th ><center>Status Pemesanan</center></th>
                  <th ><center>Aksi</center></th>
                </tr>
                </thead>


                <tbody style="text-align:center">
                @foreach($orders as $orders)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $orders->random_code }}</td>
                  
                  <!-- DISINI TAMBAHIN KONDISI COMPLETED, CANCELLED, PENDING -->
                  <td>
                    <!-- STATUS: BELUM DIBAYAR -->
                    @if($orders->status == 0)
                    <a href="#" class="btn btn-unpaid disabled">Belum dibayar</a>
                    <!-- STATUS: SUDAH DIBAYAR BELUM DIKONFIRMASI-->
                    @elseif($orders->status == 1)
                    <a href="#" class="btn btn-wait disabled">Menunggu konfirmasi</a>
                    <!-- STATUS: SUDAH DIBAYAR BELUM DIPROSES-->
                    @elseif($orders->status == 2)
                    <a href="#" class="btn btn-paid disabled">Sudah dibayar</a>
                    <!-- STATUS: SEDANG DIPROSES-->
                    @elseif($orders->status == 3)
                    <a href="#" class="btn btn-process disabled">Sedang diproses</a>
                    <!-- STATUS: SELESAI-->
                    @elseif($orders->status == 4)
                    <a href="#" class="btn btn-completed disabled">Selesai</a>
                    @endif
                  </td>
                  <!-- -->

                  <td>{{ $orders->ordered_name }}</td>

                  <!-- DISINI FORMATNYA DD-MM-YYYY - jam:menit -->
                  <td>{{ $orders->date }}</td>                  
                  <!-- -->

                  <!-- DISINI KONDISI PAID/UNPAID -->
                  <td></td>
                  <!-- -->

                  <td><a href="/adminorder/{{ $orders->id }}" type="button" class="btn btn-block btn-secondary btn-sm">Detail</a></td>
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

