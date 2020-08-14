<?php
require 'function.php';
$id = $_GET['id'];
$terima = query("SELECT * FROM terima WHERE id = '$id' ");


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB SMK 2 Guguak</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../assets/bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <style>
      * {
          text-transform: capitalize;
      }
  </style>
  <script>
      window.print();
  </script>
  <!-- Google Font -->
  <link rel="stylesheet" href="../../assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>

      <div class="content-wrapper">
          <section class="content">
          <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-teal">
              <div class="widget-user-image">
                <img class="img-circle" src="../../assets/dist/img/avatar2.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <?php foreach($terima as $trm) : ?>
              <h3 class="widget-user-username"><?php echo $trm['nama_lengkap'] ?></h3>
                 <h5 class="widget-user-desc">Status : DITERIMA</h5>
                <?php endforeach ?>
            </div>
            <div class="box-footer no-padding">
            <?php foreach($terima as $trm) : ?>
              <ul class="nav nav-stacked">
                    <li><a href="#">Nama Lengkap <span class="direct-chat-text bg-teal"><i class="fa fa-user"></i> <?php echo $trm['nama_lengkap']; ?></span></a></li>
                    <li><a href="#">Sekolah Asal <span class="direct-chat-text bg-teal"><i class="fa fa-university"></i> <?php echo $trm['sekolah_asal'] ?></span></a></li>
                    <li><a href="#">NISN  <span class="direct-chat-text bg-teal"><i class="fa fa-tasks"></i> <?php echo $trm['nisn'] ?> </span></a></li>
                    <li><a href="#">Diterima pada jurusan <span class="direct-chat-text bg-teal"><i class=" fa-hand-o-righ"></i> <?php echo $trm['jurusan'] ?></span></a></li>         
              </ul>
              <?php endforeach ?>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    </div>
          </section>
      </div>


<!-- jQuery 3 -->
<script src="../../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../../assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
</body>
</html>
