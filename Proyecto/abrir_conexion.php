<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$db_host = "localhost";
$db_user = "root";
$db_pasword ="";
$db_name = "dbsistemas";

	//Lista de Tablas
	$tabla_db1 = "usuario"; 	   // tabla de usuarios
	

	//error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($db_host, $db_user, $db_pasword, $db_name);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>