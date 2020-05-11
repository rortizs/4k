<?php
include("modulos/panel.php");

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Principal | Zapateria Novedades</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  <!--recursos acordeon-->
  <link rel="stylesheet" type="text/css" href="../plugins/bootstrap/bootstrap/css/bootstrap.css">


  <!--termina recursos acordeon-->

</head>

<!--style="background-color: gray" para el color gris en la pagina-->

<body style="background-color: gray" class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <a href="perfil.php" class="nav-link">Perfil</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
          <a href="modulos/logout.php" class="nav-link">Logout</a>
        </li>

      </ul>

    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="dist/img/logozapateria.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
        <span class="brand-text font-weight-light">Zapatería Novedades</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrador</a>
          </div>
        </div>








        <!--ESTE ES LA BARRA DE LA IZAQUIERDA DESPLEGABLE-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview menu-open">
              <a href="Ventas.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Ventas<i class="right fas fa-angle-left"></i></p>
              </a>
            </li>


            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="Compras.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Compras<i class="right fas fa-angle-left"></i></p>
              </a>
            </li>


            <li class="nav-item has-treeview menu-open">
              <a href="Registro Usuario.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Registro de Usuarios<i class="right fas fa-angle-left"></i></p>
              </a>
            </li>



          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!--AQUI TERMINA LA BARRA IZAQUIERDA DESPLEGABLE-->





    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Página Principal | Zapatería Novedades</h1>
            </div><!-- /.col -->
          </div>
        </div>
      </div>



      <!--PARTE ESTADISTICA VENTAS-->

      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Compras de Hoy</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Pocentaje de Ventas</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>Useuarios Registrados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Preferencias</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!--FIN PARTE ESTADISTICA VENTAS-->

          <!--PRUEBA DE ACORDEON EN PAGINA PRINCIPAL-->
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h1>---------------------------------------------------------------------------------------</h1>
              </div>
              <div class="col-sm-6">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          MISIÓN
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Ser una empresa de comercialización a nivel nacional e internacional, ofreciendo a los clientes un producto de cálida; cumpliendo exigentes estándares de calidad, aportando valor agregado a nuestro servicio, promoviendo un mejor nivel de vida de nuestros empleados y contribuir en el desarrollo de nuestra sociedad.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          VISIÓN
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Ser la empresa líder en el mercado de los zapatos y obtener en cinco años una mayor participación de mercado con una marca reconocida por la calidad, innovación, tecnología y confiabilidad de sus productos, que permitan obtener una mayor rentabilidad.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!--TERMINA PRUEBA DE ACORDEON EN PAGINA PRINCIPAL-->

            <!--COMIENZA PRUEBA DE PANELES DE INFORMACION-->

            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="panel panel-primary">
                    <div class="panel panel-heading">OBJETIVOS EMPRESARIALES:</div>
                    <div class="panel panel-body">

                      <p>• Objetivo General:</p> Ampliar nuestras instalaciones, de acuerdo a la demanda que el mercado exija y estableciendo puntos de venta fuera de nuestras fronteras.
                      <br>
                      <br>
                      <p>• Objetivos Específicos:</p> Lograr una mayor variedad de productos, incrementar la rentabilidad económica un 10% durante 2020. o Conseguir una cuota de mercado del 15% antes de diciembre de 2020. Optimizar los recursos empleados durante el año 2020.

                    </div>
                  </div>
                </div>






                <div class="row">
                  <div class="col-sm-12">
                    <div class="panel panel-primary">
                      <div class="panel panel-heading">ZAPATERÍA NOVEDADES</div>
                      <div class="panel panel-body">

                        <img src="dist/img/logozapateria.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-4" style="opacity: .8">

                      </div>
                    </div>
                  </div>

                  <!--TERMINA PRUEBA DE PANELES DE INFORMACION-->

                </div>
              </div>
            </div>
            <!-- /.content-wrapper -->

















            <footer class="main-footer">

              <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
              All rights reserved.
              <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.2
              </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->

          <!-- jQuery -->
          <script src="plugins/jquery/jquery.min.js"></script>
          <!-- jQuery UI 1.11.4 -->
          <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
          <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
          <script>
            $.widget.bridge('uibutton', $.ui.button)
          </script>
          <!-- Bootstrap 4 -->
          <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- ChartJS -->
          <script src="plugins/chart.js/Chart.min.js"></script>
          <!-- Sparkline -->
          <script src="plugins/sparklines/sparkline.js"></script>
          <!-- JQVMap -->
          <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
          <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
          <!-- jQuery Knob Chart -->
          <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
          <!-- daterangepicker -->
          <script src="plugins/moment/moment.min.js"></script>
          <script src="plugins/daterangepicker/daterangepicker.js"></script>
          <!-- Tempusdominus Bootstrap 4 -->
          <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
          <!-- Summernote -->
          <script src="plugins/summernote/summernote-bs4.min.js"></script>
          <!-- overlayScrollbars -->
          <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
          <!-- AdminLTE App -->
          <script src="dist/js/adminlte.js"></script>
          <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
          <script src="dist/js/pages/dashboard.js"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="dist/js/demo.js"></script>
</body>

</html>