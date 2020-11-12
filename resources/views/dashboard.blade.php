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
      <section class="content" style:"height: 200px;">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="card offset-lg-3" style="min-width: 200px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-secondary" style="padding-top:10px; max-height: 100px;">
                <img src="icons/person-fill.svg" width="80px">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title">200</h3>
                  <p class="card-text">Registered Tailors</p>
                </div>
              </div>
            </div>
          </div>

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="card offset-lg-9" style="min-width: 250px; max-height: 100px;">
            <div class="row no-gutters">
              <div class="col-md-4 bg-primary" style="padding-top: 22px; padding-left: 15px; max-height: 100px;">
                <img src="icons/tag-fill.svg" width="60px">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title">476</h3>
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


<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

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
