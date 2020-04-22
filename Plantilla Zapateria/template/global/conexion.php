<?php

include('config.php');

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;

try{
	$pdo= new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8") );


echo "<csript> alert ('Conectado...'); </script>";
}catch(PDOExeption $e){

	echo "<csript> alert ('Error...'); </script>";
}

?>