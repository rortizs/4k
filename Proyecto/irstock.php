<?php

if (empty($_SESSION['active'])) {
  header('location: ../');
}

include "../conexion.php";

if (isset($_GET['delete_id'])) {
  $sql_query = "DELETE FROM usuario WHERE Id_Usuario=" . $_GET['delete_id'];
  mysqli_query($con, $sql_query);
  header("Location: $_SERVER[PHP_SELF]");
}
if (isset($_GET['changestatus_id'])) {
  $sql_query = "UPDATE usuario SET `status`='" . $_GET['status'] . "' WHERE Id_Usuario=" . $_GET['changestatus_id'];
  mysqli_query($con, $sql_query);
  header("Location: $_SERVER[PHP_SELF]");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PRODUCTOS EN TIENDA | Zapatería Novedades</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <script type="text/javascript">
    function edt_id(id) {
      window.location.href = 'edit_usuario.php?edit_id=' + id;
    }

    function view_id(id) {
      window.location.href = 'view_usuario.php?view_id=' + id;
    }

    function delete_id(id) {
      if (confirm('Sure to Delete ?')) {
        window.location.href = 'index.php?delete_id=' + id;
      }
    }

    function changestatus_id(id, status) {
      window.location.href = 'index.php?changestatus_id=' + id + '&status=' + status;
    }
  </script>
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

    <div id="header">
      <div id="content">
        <label>PRODUCTOS EN STOCK<a target="_blank"></a> </a></label>



        </li>
        <li class="nav-item d-none d-sm-inline-block">

        </li>
        <!--<a href="../modulos/logout.php">Logout</a>-->
      </div>
    </div>

    <div id="body">
      <th colspan="5"><a href="#" button class="btn btn-primary btn-md">CALZADO</a></th>

      <br><br><br>
      <div id="content">
        <table align="center">



          <?php
          $sql_query  = "SELECT * FROM producto";
          $result_set = mysqli_query($con, $sql_query);
          $i          = 1;
          while ($row = mysqli_fetch_row($result_set)) {
          ?>
            <tr>
              <td align="center"><?php echo $i; ?></td>
              <td align="center"> <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <?php echo $row[1]; ?> </a> </td>
              <?php if ($row[count($row) - 1] == 1) { ?>
                <td align="center"><a button class="btn btn-danger btn-xs" href="javascript:changestatus_id('<?php echo $row[0]; ?>',0)  ">Dar de Baja</a></td>
              <?php } else { ?>

              <?php } ?>
              <td align="center"><a button class="btn btn-warning btn-xs" href="javascript:edt_id('<?php echo $row[0]; ?>')">Modificar</a></td>
              <td align="center"><a button class="btn btn-danger btn-xs" href="javascript:delete_id('<?php echo $row[0]; ?>')">Eliminar</a></td>
            </tr>
          <?php
            $i++;
          }
          ?>
        </table>
        <th><a href="../perfil.php" button class="btn btn-danger btn-md">Atrás</a>
      </div>
    </div>

  </center>

</body>

</html>