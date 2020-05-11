<?php
include "../modulos/panel.php";
include_once 'dbconfig.php';

if (isset($_GET['view_id'])) {
  $sql_query   = "SELECT * FROM usuario WHERE Id_Usuario=" . $_GET['view_id'];
  $result_set  = mysqli_query($con, $sql_query);
  $fetched_row = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>View Uusario | Zapatería Novedades</title>

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">



</head>

<body style="background-image: url(../dist/img/fondo.jpg);
background-repeat: no-repeat;
  background-size: cover;
  background-position: bottom;
  background-attachment: fixed;


  display: flex;
  justify-content: center;
  align-items: center;
" }>



  <div class="col-sm-6">
    <br><br><br><br>
    <div class="panel panel-primary">
      <div class="panel panel-heading">
        <h3>Información General</h3>
      </div>
      <div class="panel panel-body">


        <div class="center">
          <div id="header">

            <div class="row">
              <div class="col-sm-12">
                <strong><span>Nombre Completo</span></strong> <br>
                <th colspan="5"><?php echo $fetched_row['Nombre_Usuario'] ?></th>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <strong><span>DPI</span></strong>
                <th colspan="5"><?php echo $fetched_row['Dpi'] ?></th>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <strong><span>Dirección</span></strong>
                <th colspan="5"><?php echo $fetched_row['Direccion'] ?></th>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <strong><span>Teléfono</span></strong>
                <th colspan="5"><?php echo $fetched_row['Email'] ?></th>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <strong><span>Email</span></strong>
                <th colspan="5"><?php echo $fetched_row['Telefono'] ?></th>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <strong><span>Cargo</span></strong>
                <th colspan="5"><?php echo $fetched_row['Cargo'] ?></th>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <strong><span>Usuario</span></strong>
                <th colspan="5"><?php echo $fetched_row['User_Name'] ?></th>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <strong><span>Password</span></strong>
                <th colspan="5"><?php echo $fetched_row['contra'] ?></th>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-sm-12">
                <strong><span>Imagen</span></strong>
                <th colspan="5"><?php echo $fetched_row['Imagen'] ?></th>
              </div>
            </div>

            <br>
            <th><a href="index.php" button class="btn btn-success btn-md">Aceptar</a>


              </table>






          </div>
        </div>
      </div>
      </center>
</body>

</html>