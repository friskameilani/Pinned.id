<?php $thisPage="Dashboard"; ?>
@extends ('layouts.adminapp')

@section('content')
  <title class="text-center">Dashboard</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="height: 100px;">
      <h1 class="text-left" style="padding-left: 30px;">
        Dashboard
      </h1>
    </section>
  </div>


      <!-- Main content -->
      <section class="content" style="height: 200px;">
        <!-- Small boxes (Stat box) -->
        <div class="row offset-md-1">
          <!-- CARD 1 -->
          <div class="card" style="width: 300px; height: 150px;">
            <div class="row no-gutters">
              <div class="col-md-5 bg-secondary d-flex justify-content-center" style="padding-top:47px; height: 150px; font-size: 60px;">
                <i class="text-center fa fa-eye"></i>
              </div>
              <div class="col-md-7">
                <div class="card-body" style="padding-top: 35px;">
                  <h1 class="card-title text-height-3">{{$total_user}}</h1>
                  <p class="card-text text-height-2" style="font-size: 16px;">Jumlah Akun Terdaftar</p>
                </div>
              </div>
            </div>
          </div>
        
          <!-- CARD 2 -->
          <div class="card offset-md-1" style="width: 300px; height: 150px;">
            <div class="row no-gutters">
              <div class="col-md-5 bg-primary d-flex justify-content-center" style="padding-top:48px; height: 150px; font-size: 60px;">
                <i class="text-center fa fa-tag"></i>
              </div>
              <div class="col-md-7">
                <div class="card-body" style="padding-top: 35px;">
                  <h1 class="card-title text-height-3">{{$total_product}}</h1>
                  <p class="card-text-height-2" style="font-size: 16px;">Produk Terdaftar</p>
                </div>
              </div>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="card offset-md-1" style="width: 300px; height: 150px;">
            <div class="row no-gutters">
              <div class="col-md-5 bg-danger d-flex justify-content-center" style="padding-top:42px; height: 150px; font-size: 60px;">
                <i class="text-center fa fa-user"></i>
              </div>
              <div class="col-md-7">
                <div class="card-body" style="padding-top: 35px;">
                  <h1 class="card-title text-height-3">{{$total_tailor}}</h1>
                  <p class="card-text-height-2" style="font-size: 16px;">Penjahit Terdaftar</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row offset-md-1" style="padding-top:40px; padding-bottom: 20px">
          <!-- CARD 4 -->
          <div class="card" style="width: 300px; height: 150px;">
            <div class="row no-gutters">
              <div class="col-md-5 bg-warning d-flex justify-content-center" style="padding-top:45px; height: 150px; font-size: 60px;">
                <i class="text-center fa fa-check"></i>
              </div>
              <div class="col-md-7">
                <div class="card-body" style="padding-top: 35px;">
                  <h1 class="card-title text-height-3">{{$confirmed_order}}</h1>
                  <p class="card-text-height-2" style="font-size: 16px;">Pesanan Terkonfirmasi</p>
                </div>
              </div>
            </div>
          </div>
        
          <!-- CARD 5 -->
          <div class="card offset-md-1" style="width: 300px; height: 150px;">
            <div class="row no-gutters">
              <div class="col-md-5 bg-success d-flex justify-content-center" style="padding-top:45px; height: 150px; font-size: 60px;">
                <i class="text-center fa fa-cart-arrow-down"></i>
              </div>
              <div class="col-md-7">
                <div class="card-body" style="padding-top: 35px;">
                  <h1 class="card-title text-height-3">{{$total_order}}</h1>
                  <p class="card-text-height-2" style="font-size: 16px;">Total Pesanan</p>
                </div>
              </div>
            </div>
          </div>
        <div> 
      </div>
      </section>                       
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

@endsection
