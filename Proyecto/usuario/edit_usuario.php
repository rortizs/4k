<?php
include "../modulos/panel.php";
include_once 'dbconfig.php';

if (isset($_GET['edit_id'])) {
    $sql_query   = "SELECT * FROM usuario WHERE Id_Usuario=" . $_GET['edit_id'];
    $result_set  = mysqli_query($con, $sql_query);
    $fetched_row = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
}
if (isset($_POST['btn-update'])) {
    // variables for input data

    $Nombre_Usuario = $_POST['Nombre_Usuario'];

    $Dpi = $_POST['Dpi'];

    $Direccion = $_POST['Direccion'];

    $Telefono = $_POST['Telefono'];

    $Email = $_POST['Email'];

    $Cargo = $_POST['Cargo'];

    $User_Name = $_POST['User_Name'];

    $Password = $_POST['Password'];

    $contraseña = $_POST['contraseña'];

    if ($_FILES["Imagen"]["name"] == '') {
        $Imagen = $fetched_row['Imagen'];
    } else {
        $Imagen    = $_FILES["Imagen"]["name"];
        $file_name = $_FILES["Imagen"]["name"];
        $file_tmp  = $_FILES["Imagen"]["tmp_name"];
        if ($file_name != '') {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
        }
    }
    // variables for input data
    $passwordhash = password_hash($Password, PASSWORD_DEFAULT, ['cost' => 10]);
    // sql query for update data into database
    $sql_query = "UPDATE usuario SET `Nombre_Usuario`='$Nombre_Usuario',`Dpi`='$Dpi',`Direccion`='$Direccion',`Telefono`='$Telefono',`Email`='$Email',`Cargo`='$Cargo',`User_Name`='$User_Name',`Password`='$passwordhash',`contra`='$contraseña',`Imagen`='$Imagen' WHERE Id_Usuario=" . $_GET['edit_id'];

    if ($Password != $contraseña) {

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
if (isset($_POST['btn-cancel'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualización de Datos | Zapatería Novedades</title>
    <script src="validarupdate.js"></script>


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
        <br><br><br><br><br>
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <h1><label>Ingreso de Datos | Zapatería Novedades</a></label></h1>
                </div>
                <div class="panel panel-body">




                    <div id="body">
                        <div id="content">
                            <form method="post" enctype="multipart/form-data" onsubmit="return validarup();">

                                <div class="container">


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <br>
                                            <label>Nombre Completo </label>
                                            <input type="text" value="<?php echo $fetched_row['Nombre_Usuario'] ?>" class="form-control" id="Nombre_Usuario" name="Nombre_Usuario" require>
                                        </div>
                                        <div class="col-sm-6">
                                            <br>
                                            <label>Ingrese DPI</label>
                                            <input type="number" value="<?php echo $fetched_row['Dpi'] ?>" class="form-control" id="Dpi" name="Dpi" require>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <br>
                                            <label>Dirección</label>
                                            <input type="text" value="<?php echo $fetched_row['Direccion'] ?>" class="form-control" id="Direccion" name="Direccion" require>
                                        </div>
                                        <div class="col-sm-4">
                                            <br>
                                            <label>Teléfono</label>
                                            <input type="text" value="<?php echo $fetched_row['Telefono'] ?>" class="form-control" id="Telefono" name="Telefono" require>
                                        </div>
                                        <div class="col-sm-4">
                                            <br>
                                            <label>Email</label>
                                            <input type="text" value="<?php echo $fetched_row['Email'] ?>" class="form-control" id="Email" name="Email" require>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <br>
                                            <label>Cargo</label>
                                            <input type="text" value="<?php echo $fetched_row['Cargo'] ?>" class="form-control" id="Cargo" name="Cargo" require>
                                        </div>
                                        <div class="col-sm-3">
                                            <br>
                                            <label>Nombre de Usuario</label>
                                            <input type="text" value="<?php echo $fetched_row['User_Name'] ?>" class="form-control" id="User_Name" name="User_Name" require>
                                        </div>
                                        <div class="col-sm-3">
                                            <br>
                                            <label>Nueva Password</label>
                                            <input type="text" value="" class="form-control" id="Password" name="Password" require>
                                        </div>
                                        <div class="col-sm-3">
                                            <br>
                                            <label>Vuelva a escribir la Nueva Password</label>
                                            <input type="text" value="" class="form-control" id="contraseña" name="contraseña" require>
                                        </div>
                                        <div class="col-sm-4">
                                            <br>
                                            <label>Imagen</label>
                                            <input type="file" value="<?php echo $fetched_row['Imagen'] ?>" class="form-control" id="Imagen" name="Imagen" require>
                                        </div>


                                    </div>
                                    <td>
                                        <br>
                                        <button type="submit" name="btn-update" class="btn btn-success"><strong>Actualizar</strong></button>
                                        <button type="submit" name="btn-cancel" class="btn btn-danger"><strong>Cancelar</strong></button>
                                    </td>

                                </div>
                            </form>
</body>
</div>
</div>






</div>
</div>
</div>



</body>

</html>