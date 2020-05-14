<?php
session_start();
if ($_SESSION['rol'] != 1) {
	header("location: ./");
}

include "../conexion.php";

if (!empty($_POST)) {
	$alert = '';
	if (
		empty($_POST['Nombre_Usuario']) || empty($_POST['Dpi']) || empty($_POST['Direccion'])
		|| empty($_POST['Telefono']) || empty($_POST['Email']) || empty($_POST['usuario'])
		|| empty($_POST['clave']) || empty($_POST['contra']) || empty($_POST['rol'])
	) {
		$alert = '<p class="msg_error">Todos los campos son obligatorios.</p>';
	} else {

		$Nombre_Usuario = $_POST['Nombre_Usuario'];
		$Dpi  = $_POST['Dpi'];
		$Direccion  = $_POST['Direccion'];
		$Telefono  = $_POST['Telefono'];
		$Email  = $_POST['Email'];
		$user   = $_POST['usuario'];
		$clave  = md5($_POST['clave']);
		$contra  = ($_POST['contra']);
		$rol    = $_POST['rol'];


		$query = mysqli_query($conection, "SELECT * FROM usuario WHERE usuario = '$user' OR Email = '$Email' ");

		$result = mysqli_fetch_array($query);

		if ($result > 0) {
			$alert = '<p class="msg_error">El Email o el usuario ya existe.</p>';
		} else {

			$query_insert = mysqli_query($conection, "INSERT INTO usuario(Nombre_Usuario,Dpi,Direccion,Telefono,Email,usuario,clave,contra,rol)
																	VALUES('$Nombre_Usuario','$Dpi','$Direccion','$Telefono','$Email','$user','$clave','$contra', '$rol')");
			if ($query_insert) {
				$alert = '<p class="msg_save">Usuario creado correctamente.</p>';
			} else {
				$alert = '<p class="msg_error">Error al crear el usuario.</p>';
			}
		}
	}
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Registro Usuario</title>
</head>

<body>
	<?php include "includes/header.php"; ?>
	<section id="container">

		<div class="form_register">
			<h1>Registro usuario</h1>
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

			<form action="" method="post">
				<label for="Nombre_Usuario">Nombre Completo</label>
				<input type="text" name="Nombre_Usuario" id="Nombre_Usuario" placeholder="Nombre Completo">
				<label for="Dpi">Dpi</label>
				<input type="Dpi" name="Dpi" id="Dpi" placeholder="DPI">
				<label for="Dpi">Direccion</label>
				<input type="txt" name="Direccion" id="Direccion" placeholder="Direccion">
				<label for="Dpi">Telefono</label>
				<input type="Telefono" name="Telefono" id="Telefono" placeholder="Telefono">
				<label for="Email">Email electrónico</label>
				<input type="email" name="Email" id="Email" placeholder="Email ">
				<label for="usuario">Usuario</label>
				<input type="text" name="usuario" id="usuario" placeholder="Usuario">
				<label for="clave">Clave</label>
				<input type="password" name="clave" id="clave" placeholder="Clave de acceso">
				<label for="clave">Clave</label>
				<input type="txt" name="contra" id="contra" placeholder="Vuelva a escribir la Clave de acceso">
				<label for="rol">Tipo Usuario</label>

				<?php

				$query_rol = mysqli_query($conection, "SELECT * FROM rol");
				mysqli_close($conection);
				$result_rol = mysqli_num_rows($query_rol);

				?>

				<select name="rol" id="rol">
					<?php
					if ($result_rol > 0) {
						while ($rol = mysqli_fetch_array($query_rol)) {
					?>
							<option value="<?php echo $rol["idrol"]; ?>"><?php echo $rol["rol"] ?></option>
					<?php
							# code...
						}
					}
					?>
				</select>
				<input type="submit" value="Crear usuario" class="btn_save">

			</form>


		</div>


	</section>
	<?php include "includes/footer.php"; ?>
</body>

</html>