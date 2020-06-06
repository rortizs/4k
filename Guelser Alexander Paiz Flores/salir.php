<?php




session_start();
$_SESSION['id_usuario'];
$fecha = date("Y-m-d");
$hora = date("H:i:s");;
$update->update . "registro";
$update->set . "fechasalida = '$fecha'";
$update->condition = "";
$update->actualizaUsuario;


session_destroy();





header("location:../index.php");
