<?php
echo "<br/>hola soy index en modulos";

if(isset($_POST["btnLogin"])){

	include("global/conexion.php");
	

	
	$txtEmail=($_POST['txtEmail']);
	$txtPassword=($_POST['txtPassword']);

	$sentenciaSQL=$pdo->prepare("SELECT * FROM usuario 
		WHERE Email=:Email 
		AND Password=:Password");

	$sentenciaSQL->bindParam("Email",$txtEmail,PDO::PARAM_STR);
	$sentenciaSQL->bindParam("Password",$txtPassword,PDO::PARAM_STR);	
	$sentenciaSQL->execute();

	$registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
	print_r($registro);




	$numeroRegistros=$sentenciaSQL->rowCount();

	if($numeroRegistros>=1){
		
		session_start();
		$_SESSION['usuario']=$registro;

		echo "<br/>Bienvenido...";
		header('Location:Vistapanel.php');

	}else{
		echo "<br/>No hay registros...";
	}

	echo "<br/> Hay que validar correo y contraseña";

}


?>