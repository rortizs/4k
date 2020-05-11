<?php
include "modulos/panel.php";

?>



<!DOCTYPE html>
<html>


<head>

  <!--RECURSOS-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perfil | Zapatería Novedades</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="plugins/bootstrap/bootstrap/css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="plugins/bootstrap/bootstrap/jquery-3.2.1.min.js"></script>
  <script src="plugins/bootstrap/bootstrap/js/bootstrap.js"></script>
  <!--RECURSOS-->
</head>









<body class="hold-transition sidebar-mini">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="Vistapanel.php" class="nav-link">Página Principal</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="modulos/logout.php" class="nav-link">Logout</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->









    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="dist/img/logozapateria.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
        <span class="brand-text font-weight-light">Zapatería Novedades</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrador</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Páginas
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>


              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="ventas.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ventas</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compras</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Productos</p>
                  </a>
                </li>
              </ul>




            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Usuarios Registrados
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="usuario/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de Usuarios</p>
                  </a>
                </li>


              </ul>



            <li class="nav-item has-treeview">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Facturas
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>


              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="examples/profile.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Crear Facturas</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="examples/profile.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver Facturas</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="examples/profile.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modificar Facturas</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="examples/profile.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Eliminar Facturas</p>
                  </a>
                </li>

              </ul>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>





    <!--CUERPO DEL BODY-->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Perfil del usuario</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>






      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Administrador</h3>

                  <p class="text-muted text-center">Zapatería Novedades</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Nombre</b> <a class="float-right">Administrador</a>
                    </li>
                    <li class="list-group-item">
                      <b>Correo</b> <a class="float-right">administrador@gmail.com</a>
                    </li>
                    <li class="list-group-item">
                      <b>Permiso del Usuario</b> <a class="float-right">Id_Permiso</a>
                    </li>
                  </ul>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->






              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Acerca de mí</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Escolaridad</strong>

                  <p class="text-muted">
                    PENDIENTE DE DEFINIR
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Residencia</strong>

                  <p class="text-muted">PENDIENTE DE DEFINIR</p>

                  <hr>

                  <strong><i class="fas fa-pencil-alt mr-1"></i> Cargo dentro de la Empresa</strong>

                  <p class="text-muted">
                    <span class="tag tag-danger">Propietario / Administrador</span>
                  </p>

                  <hr>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->









            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#objetivos" data-toggle="tab">Objetivos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Imagenes" data-toggle="tab">Imagenes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#logoshoestore" data-toggle="tab">Logotipo de la Empresa</a></li>
                  </ul>
                </div><!-- /.card-header -->







                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="objetivos">
                      <!-- Post -->

                      <!-- /.post -->

                      <!-- Post -->

                      <!-- /.post -->


                      <!-- Post -->
                      <div class="post">
                        <div class="user-block">
                          <img src="dist/img/logozapateria.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
                          <span class="username">
                            <a href="#">Administrador</a>
                          </span>
                        </div>

                        <!-- /.user-block -->
                        <div class="row mb-3">
                          <div class="col-sm-6">
                            <span>
                              <p><br><b>Objetivos Generales</b><br>

                                Ampliar nuestras instalaciones, de acuerdo a la demanda que el mercado exija y estableciendo puntos de venta fuera de nuestras fronteras.

                                <br>

                                <br><b>Objetivos Específicos</b><br>

                                Lograr una mayor variedad de productos, incrementar la rentabilidad económica un 10% durante 2020. o Conseguir una cuota de mercado del 15% antes de diciembre de 2020. Optimizar los recursos empleados durante el año 2020.
                              </p>
                            </span>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-6">
                            <div class="row">
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="dist/img/photo1.png" alt="Photo">
                                <img class="img-fluid" src="dist/img/prod-2.jpg" alt="Photo">
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="dist/img/prod-3.jpg" alt="Photo">
                                <img class="img-fluid" src="dist/img/photo4.jpg" alt="Photo">
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Imagenes">
                      <!-- The Imagenes -->
                      <div class="timeline timeline-inverse">
                        <!-- timeline time label -->

                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-envelope bg-primary"></i>

                          <div class="timeline-item">



                            <div class="timeline-body">
                              NADA
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->

                        <!-- /.timeline-label -->
                        <!-- timeline item -->

                        <!-- END timeline item -->
                        <div>
                          <i class="far fa-clock bg-gray"></i>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="logoshoestore">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <img src="dist/img/logozapateria.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">

                          <div>
                            <span>
                              <p><br><b>Misión</b><br>

                                Ser una empresa de comercialización a nivel nacional e internacional, ofreciendo a los clientes un producto de cálida; cumpliendo exigentes estándares de calidad, aportando valor agregado a nuestro servicio, promoviendo un mejor nivel de vida de nuestros empleados y contribuir en el desarrollo de nuestra sociedad.

                                <br>

                                <br><b>Visión</b><br>

                                Ser la empresa líder en el mercado de los zapatos y obtener en cinco años una mayor participación de mercado con una marca reconocida por la calidad, innovación, tecnología y confiabilidad de sus productos, que permitan obtener una mayor rentabilidad.
                              </p>
                            </span>
                          </div>
                        </div>
                        <!--/div form-->
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!--CUERPO DEL BODY-->








    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.2
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
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
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>