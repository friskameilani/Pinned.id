<?php $thisPage="Tailor"; ?>
@extends('layouts.adminapp')

@section('content')
<title class="text-center">Penjahit</title>

    <!-- Content Wrapper. Contains page content -->
    
    <main>
    <!-- SEARCH BAR -->
    <section class="searchbarr" id="searchbarr" style="padding-bottom: 20px;">
      <div class="row">
          <div class="col-md-4">
              <!-- SEARCH BUTTON -->
              <form action="/admintailor-search" method="get">
              <div class="input-group">
                  <input type="text" class="form-control" name="search" placeholder="Cari penjahit..">
                  <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit">
                      <i class="fa fa-search"></i>
                  </button>
                  </div>
              </div>
              </form>
          </div>
      </div>
    </section>

   <!-- JUDUL SAMA BUTTON -->
   <section class="title" id="title">
        <div class="row">
            <div class="col-md-6">
                <!-- JUDUL TAILOR -->
                <h1 class="text-left" style="color: #111;">
                    Penjahit Tersedia
                </h1>
            </div>

            <div class="col-md-6 clearfix" style="padding-right: 55px;">
                <!-- BUTTON ADD -->
                <a href="{{ url('adminaddtailor') }}">
                    <button type="button" class="btn btn-success float-right">
                        +Tambah Penjahit Baru
                    </button>
                </a>
            </div>
        </div>
    </section>
    <br></br>

    <div class="col-6 ml-3">
        <h4>{{ $result->total() }} hasil untuk pencarian '{{ request()->input('search') }}'</h4>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row" style="padding-left: 40px; padding-right: 40px;">
        <div class="col-md-12">

          <!-- /.box -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th ><center>Kode Penjahit</center></th>
                  <th ><center>Nama</center></th>
                  <th ><center>Umur</center></th>
                  <th ><center>Alamat</center></th>
                  <!-- <th ><center>Jumlah Produk</center></th> -->
                  <th ><center>Deskripsi</center></th>
                  <th ><center>Aksi</center></th>
                </tr>
                </thead>


                <tbody>
                @foreach($result as $tailor)
                <tr>
                  <td>{{ $tailor->id }}</td>
                  <td><a href="/admintailor/{{ $tailor->id }}">{{ $tailor->tailor_name }}</a></td>
                  <td>{{ $tailor->tailor_age }}</td>
                  <td>{{ $tailor->tailor_address }}</td>                 
                  <!-- <td>counter</td> -->
                  <td>{{ $tailor->tailor_desc }}</td>
                  <td><a href="/admintailor/edit/{{ $tailor->id }}" type="button" class="btn btn-block btn-primary btn-sm">Edit</a>
                  <a type="button" class="btn btn-block btn-danger btn-sm delete" data-id="{{$tailor->id}}" data-toggle="modal" data-target="#delete" >Delete</a></td>
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
        <form action="{{route('admintailor.destroy', 'delete')}}" method="POST" id="deleteForm">
          @csrf
          @method('delete')

          <div class="modal-body">
            <h5> Setelah dihapus data akan benar-benar hilang. </h5>
            <h5> Apakah tetap ingin melanjutkan? </h5>

            <input type="hidden" name="tailor_id" id="no_id" value="">
          </div>
          <div class="modal-footer" style="background-color: #EEE;">
            <button type="submit" class="btn btn-primary"> Hapus </button>
            <button type="button" class="btn btn-default"  data-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
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