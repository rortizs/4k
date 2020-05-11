<?php
include "modulos/login.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zapatería Novedades | Login</title>
  <link rel="stylesheet" href="stilo.css">
  <link rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="./usuario/bootstrap/css/bootstrap.css">
  <script src="validar.js"></script>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>


  <div>
    <div class="image">
      <div class="row">
        <div class="col-sm-3">
          <img src="dist/img/logoindex.png" class="img-circle elevation-2" alt="User Image">
        </div>
      </div>
    </div>



    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <form action="index.php" method="post" onsubmit="return validar();">
          <div class="container">
            <h1><label>Inicio de Sesión | Zapatería Novedades</label></h1>
            <div class="row">
              <div class="col-sm-6">
                <h3><label>Correo Electrónico</label></h3>
                <input type="email" id="email" name="txtEmail" class="form-control" placeholder="Email" required>
              </div>
              <div class="col-sm-6">
                <h3><label>Password</label></h3>
                <input type="password" id="password" name="txtPassword" class="form-control" placeholder="Password" required>
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-sm-6">
                <button type="submit" name="btnLogin" class="btn btn-success btn-lg ">Iniciar Sesión</button>
              </div>
              <!-- /.col -->
            </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>