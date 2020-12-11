<?php $thisPage="FAQ"; ?>
@extends ('layouts.adminapp')

@section('content')
<title class="text-center">Tailor</title>

    <!-- Content Wrapper. Contains page content -->
    
    <main>
    <!-- JUDUL SAMA BUTTON -->
    <section class="title" id="title">
        <div class="row">
            <div class="col-md-6">
                <!-- JUDUL TAILOR -->
                <h1 class="text-left" style="color: #111;">
                    FAQ
                </h1>
            </div>

            <div class="col-md-6 clearfix" style="padding-right: 55px;">
                <!-- BUTTON ADD -->
                <a href="/adminfaq/new">
                    <button type="button" class="btn btn-success float-right">
                        +Tambah FAQ baru
                    </button>
                </a>
            </div>
        </div>
    </section>
    <br></br>

    <!-- Main content -->
    <section class="content">
      <div class="row" style="padding-left: 40px; padding-right: 40px;">
        <div class="col-md-12">

          <!-- /.box -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>No.</center></th>
                  <th ><center>Pertanyaan</center></th>
                  <th ><center>Jawaban</center></th>
                  <th ><center>Aksi</center></th>
                </tr>
                </thead>


                <tbody>
                <?php $no = 1; ?>
                @foreach($faqs as $faq)
                <tr>
                  <td >{{ $no++ }}</td>
                  <td >{{$faq->ask}}</td>
                  <td >{{$faq->answer}}</td>
                  <td ><a href=" {{ url('adminfaq/edit') }}/{{ $faq->id }} " type="button" class="btn btn-block btn-primary btn-sm">Ubah</a>
                  <a type="button" class="btn btn-block btn-danger btn-sm delete" data-id="{{$faq->id}}" data-toggle="modal" data-target="#delete" >Hapus</a></td>
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


  <!-- Pop Up for Delete Confirmation -->
  <!-- Modal popup -->

  <div class="modal fade" id="delete">
    <div class="modal-dialog">
      <!-- Modal Content -->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Konfirmasi Penghapusan</h3>
          <button type="button" data-dismiss="modal" class="close">&times;</button>
        </div>
        <form action="{{route('adminfaq.destroy', 'delete')}}" method="POST" id="deleteForm">
          @csrf
          @method('delete')
          <div class="modal-body">
            <h5> Setelah dihapus data akan benar-benar hilang. </h5>
            <h5> Apakah tetap ingin melanjutkan? </h5>

            <!-- <input type="hidden" name="_method" value="DELETE"> -->
            <input type="hidden" name="faq_id" id="no_id" value="">
          </div>
          <div class="modal-footer" style="background-color: #EEE;">
            <button type="submit" class="btn btn-primary"> Hapus </button>
            <button type="button" class="btn btn-default"  data-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

