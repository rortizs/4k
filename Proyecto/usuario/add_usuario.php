<?php
include "../modulos/panel.php";
include_once 'dbconfig.php';

if (isset($_POST['btn-save'])) {
    // variables for input data
    $Nombre_Usuario = $_POST['Nombre_Usuario'];
    $Dpi            = $_POST['Dpi'];
    $Direccion      = $_POST['Direccion'];
    $Telefono       = $_POST['Telefono'];
    $Email          = $_POST['Email'];
    $Cargo          = $_POST['Cargo'];
    $User_Name      = $_POST['User_Name'];
    $Password       = $_POST['Password'];
    $Imagen         = $_FILES["Imagen"]["name"];
    $file_name      = $_FILES["Imagen"]["name"];
    $file_tmp       = $_FILES["Imagen"]["tmp_name"];
    $contraseña    = $_POST['contraseña'];
    if ($file_name != '') {
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
    }
    // variables for input data
    $passwordhash = password_hash($Password, PASSWORD_DEFAULT, ['cost' => 10]);
    // sql query for inserting data into database

    $sql_query = "INSERT INTO usuario (`Nombre_Usuario`,`Dpi`,`Direccion`,`Telefono`,`Email`,`Cargo`,`User_Name`,`Password`,`Imagen`,`contra`) VALUES('" . $Nombre_Usuario . "','" . $Dpi . "','" . $Direccion . "','" . $Telefono . "','" . $Email . "','" . $Cargo . "','" . $User_Name . "','" . $passwordhash . "','" . $Imagen . "','" . $contraseña . "')";
    // sql query for inserting data into database
    $verificar_usuario = mysqli_query($con, "SELECT * from usuario WHERE User_Name= '$User_Name'");
    $verificar_email   = mysqli_query($con, "SELECT * from usuario WHERE Email= '$Email'");

    // sql query execution function
    if (mysqli_num_rows($verificar_email) > 0) {
        echo '<script>
                alert ("El email ya está Registrado");
                window.history.go(-1);
                </script>';
        exit;
    } else if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '<script>
                alert ("El usuario ya está Registrado");
                window.history.go(-1);
                </script>';
        exit;
    } else if ($Password != $contraseña) {

        echo '<script>
                alert ("Las contraseñas no coinciden");
                window.history.go(-1);
                </script>';
        exit;
    } else if (mysqli_query($con, $sql_query)) {
?>
        <script type="text/javascript">
            alert('Usuario agregado exitosamente ');
            window.location.href = 'index.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Ocurrió un error, Revisa los datos');
        </script>
<?php
    }
}

// sql query execution function

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Core PHP Crud functions By PHP Code Builder</title>
    <!--<link rel="stylesheet" href="style.css" type="text/css" />-->
    <script src="validar.js"></script>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <center>

        <br><br><br>
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <h1><label>Ingreso de Datos | Zapatería Novedades</a></label></h1>
                </div>
                <div class="panel panel-body">




                    <div id="header">
                        <div id="content">


                        </div>
                    </div>


                    <div id="body">
                        <div id="content">
                            <form method="post" enctype="multipart/form-data" onsubmit="return validar();">

                                <div class="container">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Nombre Completo </label>
                                            <input type="text" id="Nombre_Usuario" class="form-control" name="Nombre_Usuario" placeholder="Nombre y Apellidos" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Ingrese DPI</label>
                                            <input type="number" id="Dpi" class="form-control" name="Dpi" placeholder="DPI" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <br><br>
                                            <label>Dirección</label>
                                            <input type="text" id="Direccion" class="form-control" name="Direccion" placeholder="Dirección" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <br><br>
                                            <label>Teléfono</label>
                                            <input type="number" id="Telefono" class="form-control" name="Telefono" placeholder="Teléfono" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <br><br>
                                            <label>Email</label>
                                            <input type="text" id="Email" class="form-control" name="Email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <br><br>
                                            <label>Cargo</label>
                                            <input type="text" id="Cargo" class="form-control" name="Cargo" placeholder="Cargo" required>
                                        </div>
                                        <div class="col-sm-3">
                                            <br><br>
                                            <label>Nombre de Usuario</label>
                                            <input type="text" id="User_Name" class="form-control" name="User_Name" placeholder="User_Name" required>
                                        </div>
                                        <div class="col-sm-3">
                                            <br><br>
                                            <label>Password</label>
                                            <input type="text" id="Password" class="form-control" name="Password" placeholder="Password" required>
                                        </div>
                                        <div class="col-sm-3">
                                            <br><br>
                                            <label>Password</label>
                                            <input type="text" id="contraseña" class="form-control" name="contraseña" placeholder="Vuelva a escribir la contraseña" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <br><br>
                                            <label>Imagen</label>
                                            <input type="file" id="Imagen" class="form-control" name="Imagen" placeholder="Imagen" required>
                                        </div>


                                    </div>

                                    <br><br>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <button type="submit" name="btn-save" class="btn btn-primary"><strong>Guardar</strong></button>
                                        </div>

                                        <div class="col-sm-6">
                                            <a href="index.php" class="btn btn-danger">Atrás</a>
                                        </div>
                                    </div>



                                </div>






                        </div>
                    </div>
                </div>



                <body>