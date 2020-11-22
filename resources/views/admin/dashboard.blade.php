<?php $thisPage="Dashboard"; ?>
@extends ('layouts.adminapp')

@section('content')
  <title class="text-center">Dashboard</title>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="height: 100px;">
      <h1 class="text-left" style="padding-left: 100px;">
        Dashboard
      </h1>
    </section>
  </div>

    <main>
      <!-- Main content -->
      <section class="content" style="height: 200px;">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="card offset-lg-3" style="min-width: 250px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-secondary" style="padding-left: 23px; padding-top:20px; max-height: 100px; font-size: 40px;">
                <i class="text-center fa fa-user"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title">{{$total_tailor}}</h3>
                  <p class="card-text">Registered Tailors</p>
                </div>
              </div>
            </div>
          </div>

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="card offset-lg-9" style="min-width: 250px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-primary" style="padding-left: 23px; padding-top: 22px; max-height: 100px; font-size: 40px;">
                <i class="text-center fa fa-tag"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title">{{$total_product}}</h3>
                  <p class="card-text">Registered Items</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>                       
    </main>
    

    <!-- Chart -->
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
                align: 'right',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>

@endsection
