<?php

$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
	header('location: sistema/');
} else {

	if (!empty($_POST)) {
		if (empty($_POST['usuario']) || empty($_POST['clave'])) {
			$alert = 'Ingrese su usuario y su calve';
		} else {

			require_once "conexion.php";

			$user = mysqli_real_escape_string($conection, $_POST['usuario']);
			$pass = md5(mysqli_real_escape_string($conection, $_POST['clave']));
			$estatus = 1;

			$query = mysqli_query($conection, "SELECT * FROM usuario WHERE usuario= '$user' AND estatus = '$estatus' AND clave = '$pass'");
			mysqli_close($conection);
			$result = mysqli_num_rows($query);

			if ($result > 0) {
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUser'] = $data['Id_Usuario'];
				$_SESSION['Nombre_Usuario'] = $data['Nombre_Usuario'];
				$_SESSION['Dpi']  = $data['Dpi'];
				$_SESSION['Direccion']  = $data['Direccion'];
				$_SESSION['Telefono']  = $data['Telefono'];
				$_SESSION['Email']  = $data['Email'];
				$_SESSION['user']   = $data['usuario'];
				$_SESSION['clave']   = $data['clave'];
				$_SESSION['contra']   = $data['contra'];
				$_SESSION['estatus']   = $data['estatus'];
				$_SESSION['rol']    = $data['rol'];

				header('location: sistema/');
			} else {
				$alert = 'El usuario o la clave son incorrectos';

				session_destroy();
			}
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zapatería Novedades | Login</title>
	<link rel="stylesheet" href="stilo.css">
	<link rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="sistema/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="sistema/plugins/fontawesome-free/css/all.min.css">
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

		<div class="card">
			<div class="card-body login-card-body">
				<form action="index.php" method="post">
					<div class="container">
						<h1><label>Inicio de Sesión | Zapatería Novedades</label></h1>
						<div class="row">
							<div class="col-sm-6">
								<h3><label>Usuario</label></h3>
								<input type="txt" name="usuario" class="form-control" placeholder="Usuario">

							</div>
							<div class="col-sm-6">
								<h3><label>Password</label></h3>
								<input type="password" name="clave" class="form-control" placeholder="Clave">

							</div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-sm-6">
								<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

								<button type="submit" name="INGRESAR" class="btn btn-success btn-lg ">Iniciar Sesión</button>

							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>