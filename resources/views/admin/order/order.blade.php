<?php $thisPage="Order"; ?>
@extends ('layouts.adminapp')

@section('content')
<title class="text-center">Order</title>

  <div>
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
                  <th ><center>Status</center></th>
                  <th ><center>Nama</center></th>
                  <th ><center>Tanggal</center></th>
                  <th ><center>Aksi</center></th>
                </tr>
                </thead>


                <tbody style="text-align:center">
                @foreach($orders as $order)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $order->random_code }}</td>
                  
                  <!-- DISINI TAMBAHIN KONDISI COMPLETED, CANCELLED, PENDING -->
                  <td>
                    <!-- STATUS: BELUM DIBAYAR -->
                    @if($order->status == 0)
                    <a href="#" class="btn btn-unpaid disabled">Belum dibayar</a>
                    <!-- STATUS: SUDAH DIBAYAR BELUM DIKONFIRMASI-->
                    @elseif($order->status == 1)
                    <a href="#" class="btn btn-wait disabled">Menunggu konfirmasi</a>
                    <!-- STATUS: SUDAH DIBAYAR BELUM DIPROSES-->
                    @elseif($order->status == 2)
                    <a href="#" class="btn btn-paid disabled">Dalam proses Pengerjaan</a>
                    <!-- STATUS: SEDANG DIPROSES-->
                    @elseif($order->status == 3)
                    <a href="#" class="btn btn-process disabled">Pengiriman</a>
                    <!-- STATUS: SELESAI-->
                    @elseif($order->status == 4)
                    <a href="#" class="btn btn-completed disabled">Selesai</a>
                    @endif
                  </td>
                  <!-- -->

                  <td>{{ $order->ordered_name }}</td>

                  <!-- DISINI FORMATNYA DD-MM-YYYY - jam:menit -->
                  <td>{{ $order->date }}</td>                  
                  <!-- -->
                  <td>
                  <button class="btn btn-info" data-myname="{{$order->ordered_name}}" data-orderid="{{$order->id}}" data-toggle="modal" data-target="#editorder">Edit Status</button>
                  <a href="/adminorder/{{ $order->id }}" type="button" class="btn btn-block btn-secondary btn-sm">Detail</a>
                  </td>
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

  
  
  
  
  <!-- Modal -->
  <div class="modal" tabindex="-1" role="dialog" id="editorder">
  <div class="modal-dialog" role="document">
    <!-- Modal Content -->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Edit Status Pemesanan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 
      <form action="{{route('adminorder.update', 'edit')}}" method="POST">
        @method('patch')
        @csrf
 
        <div class="modal-body">
          <h5> Pilih salah satu proses </h5>
 
          <input type="hidden" name="order_id" id="order_id" value="">
 
          <!-- <input type="text" class="form-control" name="name" id="name"> -->
          <select name="status" id="status">
            <option value='1'>Menunggu konfirmasi</option>
            <option value='2'>Dalam proses Pengerjaan</option>
            <option value='3'>Pengiriman</option>
            <option value='4'>Selesai</option>
          </select> 
        </div>
        <div class="modal-footer" style="background-color: #EEE;">
          <button type="submit" class="btn btn-primary"> Edit </button>
          <button type="button" class="btn btn-default"  data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

