<?php
include("modulos/panel.php");

$db_host = "localhost";
$db_user = "root";
$db_pasword ="";
$db_name = "dbsistemas";

  //Lista de Tablas
  $tabla_db1 = "usuario";      // tabla de usuarios
  

  //error_reporting(0); //No me muestra errores
  
  $conexion = new mysqli($db_host, $db_user, $db_pasword, $db_name);


  if ($conexion->connect_errno) {
      echo "Nuestro sitio experimenta fallos....";
      exit();
  }
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Novedades | Ventas</title>
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
</head>
<head>
  <title>Programando Ando</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


    
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">




  



  </div>
  <div class="col-md-4"></div>
</div>



  
  
<body class="hold-transition sidebar-mini layout-fixed">
 
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="Vistapanel.php" class="nav-link">Home</a>
        </li>
        

<div class = "encabezado de página" >



<h1 class="display-1"><p class="text-primary"><p><abbr title="4k">Zapateria</abbr> Novedades</p></p></h1>
    </nav>
    

 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   


<div class="col-lg-12">


<p class="text-primary"><p class="font-weight-bold"><p class="bg-primary">Administracion de Ventas</p></p></p>

    <center><h1>Productos a Vender</h1></center>

    <form method="POST" action="Ventas.php" >

    <div class="form-group">
      <label for="Dpi">Codigo</label>
      <input type="text" name="Dpi" class="form-control" id="Dpi">
  </div>

 
    <center>
            <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
    </center>

  </form>


<?php

    if(isset($_POST['btn1']))
    {
      include("abrir_conexion.php");

if(isset($_POST['Dpi'])){
      $dpi  = $_POST['Dpi'];
      $nombre = $_POST['Nombre_Usuario'];
      $dir = $_POST['Direccion'];
      $tel = $_POST['Telefono'];
}
      mysqli_query($conexion, "INSERT INTO $tabla_db1 (Dpi,Nombre_Usuario,Direccion,Telefono) values ('$dpi','$nombre','$dir','$tel')");
      //La variable $Conexion viene del archivo "Abrir_Conexion", la cual nos conectara a la base de datos
      //y de paso hacemos el registro de datos.
      
      include("cerrar_conexion.php");
      echo "Se insertaron Correctamente";
    }

    if(isset($_POST['btn2']))
    {
      include("abrir_conexion.php");

       if(isset($_POST['Dpi'])){
        $dpi = $_POST['Dpi'];
}
        

        if($dpi=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "Digita un Codigo por favor. (Ej: 123)";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE Dpi = $dpi");
          while($consulta = mysqli_fetch_array($resultados))
          {
            echo
            "
              <table width=\"90%\"border=\"3\">
                <tr>
                  <td><center>Documento</center></td>
                  <td><b><center>Nombre</center></b></td>
                  <td><b><center>Direccion</center></b></td>
                  <td><b><center>Telefono</center></b></td>
                </tr>

                <tr>
                  <td>".$consulta['Dpi']."</td>
                  <td>".$consulta['Nombre_Usuario']."</td>
                  <td>".$consulta['Direccion']."</td>
                  <td>".$consulta['Telefono']."</td>
                </tr>
              </table>
            ";
          }
        }

      include("cerrar_conexion.php");
    }



    if(isset($_POST['AgregaProductoVentas']))
    {
      include("abrir_conexion.php");


      mysqli_query($conexion, "SELECT FROM $tabla_db1 where Dpi,Nombre_Usuario,Direccion,Telefono INSERT INTO productoventas (Dpi,Nombre_Usuario,Direccion,Telefono) values ('$dpi','$nombre','$dir','$tel')");
      //La variable $Conexion viene del archivo "Abrir_Conexion", la cual nos conectara a la base de datos
      //y de paso hacemos el registro de datos.
      
      include("cerrar_conexion.php");
      echo "Se insertaron Correctamente";
    }

    if(isset($_POST['btn2']))
    {
      include("abrir_conexion.php");

       if(isset($_POST['Dpi'])){
        $dpis = $_POST['Dpi'];
}
        

        if($dpis=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE Dpi = $dpis");
          while($consulta = mysqli_fetch_array($resultados))
          {
            
          }
        }

      include("cerrar_conexion.php");
    }

      ?>

      <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">


  </form>



  <?php

  ?>



  </div>
  <div class="col-md-4"></div>
</div>


  <div class="panel-body">


                                                  <div id="error">
                                               
                                                     </div>
                  <div class="row">  
                     <div class="col-md-2"> 
                                                 <div class="form-group"> 
                                                  
<input class="form-control" type="hidden" name="existencia" id="existencia">
<input class="form-control" type="hidden" name="codcategoria" id="codcategoria">
<input class="form-control" type="hidden" name="precioconiva" id="precioconiva">
<input class="form-control" type="hidden" name="precio" id="precio"> 
<input class="form-control" type="hidden" name="ivaproducto" id="ivaproducto">  

                                                  </div> 
                                         </div>
               
                  
                  
              
<div align="right"><button type="button" id="AgregaProductoVentas" class="btn btn-primary"><span class="fa fa-shopping-cart"></span> Agregar Producto</button> 
<button type="button" id="vaciarventas" class="btn btn-danger" ><span class="fa fa-trash-o"></span> Vaciar Productos</button>
<a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><button type="button" class="btn btn-success"><span class="fa fa-user"></span> Nuevo Cliente</button></a>
 <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                          <button class="btn btn-danger" type="reset"><span class="fa fa-times"></span> Cancelar</button> 
                          <button type="submit" name="btn-submit" id="btn-submit" class="btn btn-primary"><span class="fa fa-save"></span> Registrar Ventas</button> 
</div>
                  <hr>  
                    
                    
                    
                    


                           <div class="modal-footer"> 
                             

                          </div>
                                            </div>


                                            <div class="col-lg-12 ds">
                   
            <h3><p class="bg-primary">Datos Factura</p></h3>
            
                                        
                      <!-- First Action -->
                                      <div class="form-group"> 
                                                     <label for="field-12" class="control-label">Código de Venta:</label> 
          <input type="hidden" name="codcaja" id="codcaja" value="1">
      <div id="nroventa"><input class="form-control" type="text" name="codventa" id="codventa" onKeyUp="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="Ingrese N° de Venta" value="2020-001-V00657" readonly="readonly"></div> 
                    </div>  
                                        
                      <!-- First Action -->
                                      <div class="form-group"> 
                                                     <label for="field-12" class="control-label">N° de Serie:</label> 
          <div id="nroserieve"><input class="form-control" type="text" name="codserieve" id="codserieve" onKeyUp="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="Ingrese N° de Serie" value="12052020-001-V00037" readonly="readonly"></div> 
                    </div> 
                                        
                      <!-- First Action -->
                                      <div class="form-group"> 
                                                     <label for="field-12" class="control-label">N° de Autorización:</label> 
          <div id="Id_Usuario"><input class="form-control" type="text" name="Id_Usuario" id="Id_Usuario" onKeyUp="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="Ingrese N° de Autorización" value="VAHXF-2020-001-V00657" readonly="readonly"></div> 
                    </div> 
          
                      <!-- Second Action --> 
                                      <div class="form-group"> 
                                                     <label for="field-12" class="control-label">Búsqueda de Clientes:</label> 
         <input class="form-control" type="hidden" name="codcliente" id="codcliente"><input class="form-control" type="text" name="busqueda" id="busqueda" onKeyUp="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="Búsqueda de Cliente" required="required"><small><span class="symbol required"></span> Búsqueda de Cliente: DPI</small>
                                     </div>
                   
       
           <div class="form-group">
           
           <div class="radio">Tipo de Pago: 
              <label>
                <input name="tipopagove" id="tipopagove" value="CONTADO" onClick="BuscaFormaVenta()" checked="checked" type="radio">
                Contado
              </label>&nbsp;&nbsp;
              <label>
                <input name="tipopagove" id="tipopagove" value="CREDITO" onClick="BuscaFormaVenta(); MuestraCambioPagos();" type="radio">
                Crédito
              </label>
            </div>
            
                      </div>
                               
              
      <div id="muestraformapagoventas"><div class="form-group"> 
                                                     <label for="field-12" class="control-label">Forma de Pago:</label> 
       <select name="formapagove" id="formapagove" class="form-control" onChange="MuestraCambioPagos()" required="required">
         <option value="">SELECCIONE</option>
       <option value="EFECTIVO">EFECTIVO</option>
       <option value="CHEQUE">CHEQUE</option>
       <option value="CHEQUE POSFECHADO">CHEQUE POSFECHADO</option>
       <option value="TARJETA DE CREDITO">TARJETA DE CRÉDITO</option>
       <option value="TRANSFERENCIA">TRANSFERENCIA</option>
      </select>
                                     </div></div>
                   
      <div id="muestracambiospagos"></div>
        
    
      <div class="form-group">
           
           <div class="radio">
              <label>
                <input name="tiporeporte" id="tiporeporte" value="TICKET" checked="checked" type="radio">
                Imprimir Ticket
              </label>&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input name="tiporeporte" id="tiporeporte" value="FACTURA" type="radio">
                Imprimir Factura
              </label>
            </div>
            
                      </div>
              
                
             <div class="form-group">  
                                <label for="field-12" class="control-label">Descuento de Venta %:</label> 
<input class="form-control number calculodescuentove" type="text" name="descuento" id="descuento" onKeyUp="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="Ingrese Descuento de Venta" value="0" required="required"> 
                    </div>

            
            
                                      <div class="form-group">  
                                                     <label for="field-12" class="control-label">Fecha de Venta:</label> 
<input class="form-control" type="text" name="fecharegistro" id="fecharegistro" onKeyUp="this.value=this.value.toUpperCase();" autocomplete="off" placeholder="Ingrese Fecha Venta" readonly="readonly"> 

 <section class="content">
              
              <div class="row">
                <div class="col-12">
              
                                               <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>

                    </div>
                                        </div>
                    
                    
                    
                      
                         
             



                           </div>
              
              
              
                                  </div>
                                </div>
                            </div>
            
            
            
              </div>
                  </div>
                  
                  
     


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="Vistapanel.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

   
      <div class="sidebar">
      
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="Ventas.html" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Ventas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>


            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Compras
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>


            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Productos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>



            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="Registro Usuario.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Registrar Usuario
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>




          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">                 
                  
                  <section class="content">
              
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-12">
                  <p class="lead">Tipos de Pago:</p>
                  <img src="dist/img/credit/visa.png" alt="Visa">
                  <img src="dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="dist/img/credit/american-express.png" alt="American Express">
                  <img src="dist/img/credit/paypal2.png" alt="Paypal">



</nav>
             

              <!-- this row will not appear when printing -->
             



                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      </nav>
    </section>
    <!-- /.content -->

        
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