<?php

session_start();
require_once "../../clases/Conexion.php";
require_once "../../clases/Proveedores.php";

$obj = new proveedores();


$datos = array(
	$_POST['nombre'],
	$_POST['apellidos'],
	$_POST['direccion'],
	$_POST['email'],
	$_POST['telefono'],
	$_POST['rfc']
);

echo $obj->agregaProveedor($datos);
