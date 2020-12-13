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
          <div class="card offset-md-1" style="width: 250px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-secondary" style="padding-left: 19px; padding-top:20px; max-height: 100px; font-size: 40px;">
                <i class="text-center fa fa-eye"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title text-height-2">5</h3>
                  <p class="card-text text-height-15">Jumlah Pengunjung</p>
                </div>
              </div>
            </div>
          </div>
        
          <!-- CARD 2 -->
          <div class="card offset-md-1" style="min-width: 250px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-primary" style="padding-left: 23px; padding-top: 22px; max-height: 100px; font-size: 40px;">
                <i class="text-center fa fa-tag"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title text-height-2">{{$total_product}}</h3>
                  <p class="card-text">Produk Terdaftar</p>
                </div>
              </div>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="card offset-md-1" style="min-width: 250px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-danger" style="padding-left: 23px; padding-top: 22px; max-height: 100px; font-size: 40px;">
                <i class="text-center fa fa-user"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title text-height-2">{{$total_tailor}}</h3>
                  <p class="card-text">Penjahit Terdaftar</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row offset-md-1" style="padding-top:20px; padding-bottom: 20px">
          <!-- CARD 4 -->
          <div class="card offset-md-1" style="min-width: 250px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-warning" style="padding-left: 23px; padding-top:20px; max-height: 100px; font-size: 40px;">
                <i class="text-center fa fa-check"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title text-height-2">5</h3>
                  <p class="card-text text-height-15">Pesanan Terkonfirmasi</p>
                </div>
              </div>
            </div>
          </div>
        
          <!-- CARD 5 -->
          <div class="card offset-md-1" style="min-width: 250px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-success" style="padding-left: 18px; padding-top: 22px; max-height: 100px; font-size: 40px;">
                <i class="text-center fa fa-cart-arrow-down"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title text-height-2">11</h3>
                  <p class="card-text">Total Pesanan</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      </section>                       

    

    <!-- Chart -->
      <br></br>
    
      <figure class="highcharts-figure">
        <div id="chartorderan"></div>
        <p class="highcharts-description">
        </p>
      </figure>
    
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- CHART SCRIPT -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
Highcharts.chart('chartorderan', {

title: {
    text: 'Order Chart'
},

subtitle: {
    text: 'Agustus-Desember 2020 (dalam lusin)'
},

yAxis: {
    title: {
        text: 'Jumlah'
    }
},

xAxis: {
    accessibility: {
        rangeDescription: 'Range: 2020 to 2025'
    }
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
        pointStart: 8
    }
},

series: [{
    name: 'Kaos',
    data: [23, 34, 26, 60, 44]
}, {
    name: 'Kemeja',
    data: [10, 15, 22, 25, 19]
}, {
    name: 'Tie Dye Shirt',
    data: [22, 45, 30, 39, 50]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'left',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>

@endsection
