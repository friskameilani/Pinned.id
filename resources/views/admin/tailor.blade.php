<?php $thisPage="Tailor"; ?>
@extends ('layouts.adminapp')

@section('content')
<title class="text-center">Tailor</title>

    <!-- Content Wrapper. Contains page content -->
    

    <main>
    <!-- SEARCH BAR -->
    <section class="searchbar">
        <div class="row">
            <div class="col-md-4">
                <!-- Another variation with a button -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search this blog">
                    <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JUDUL SAMA BUTTON -->
    <section class="title" id="title">
        <div class="container">
            <!-- JUDUL TAILOR -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="height: 100px;">
                    <h1 class="text-left">
                    Tailor
                    </h1>
                </section>
            </div>

            <!-- BUTTON ADD -->
            <button type="button" class="btn btn-success">
                +Add New Tailor
            </button>
        </div>
    </section>

    
        

    </main>

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

@endsection