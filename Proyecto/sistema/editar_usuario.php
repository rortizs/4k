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
		|| empty($_POST['contra']) || empty($_POST['rol'])
	) {
		$alert = '<p class="msg_error">Todos los campos son obligatorios.</p>';
	} else {

		$Id_Usuario = $_POST['Id_Usuario'];
		$Nombre_Usuario = $_POST['Nombre_Usuario'];
		$Dpi = $_POST['Dpi'];
		$Direccion = $_POST['Direccion'];
		$Telefono = $_POST['Telefono'];
		$email  = $_POST['Email'];
		$user   = $_POST['usuario'];
		$clave  = md5($_POST['clave']);
		$contra   = $_POST['contra'];
		$rol    = $_POST['rol'];


		$query = mysqli_query($conection, "SELECT * FROM usuario 
													   WHERE (usuario = '$user' AND Id_Usuario != $Id_Usuario)
													   OR (Email = '$email' AND Id_Usuario != $Id_Usuario) ");

		$result = mysqli_fetch_array($query);

		if ($result > 0) {
			$alert = '<p class="msg_error">El Email o el usuario ya existe.</p>';
		} else {

			if (empty($_POST['clave'])) {

				$sql_update = mysqli_query($conection, "UPDATE usuario
															SET Nombre_Usuario = '$Nombre_Usuario', Dpi='$Dpi', 
															Direccion='$Direccion', Telefono='$Telefono', Email='$email',
															usuario='$user', clave='$clave', contra='$contra', rol='$rol'
															WHERE Id_Usuario= $Id_Usuario ");
			} else {
				$sql_update = mysqli_query($conection, "UPDATE usuario
															SET Nombre_Usuario = '$Nombre_Usuario', Dpi='$Dpi', 
															Direccion='$Direccion', Telefono='$Telefono', Email='$email',
															usuario='$user', clave='$clave', contra='$contra', rol='$rol'
															WHERE Id_Usuario= $Id_Usuario ");
			}

			if ($sql_update) {
				$alert = '<p class="msg_save">Usuario actualizado correctamente.</p>';
			} else {
				$alert = '<p class="msg_error">Error al actualizar el usuario.</p>';
			}
		}
	}
	mysqli_close($conection);
}

//Mostrar Datos
if (empty($_REQUEST['id'])) {
	header('Location: lista_usuarios.php');
	mysqli_close($conection);
}
$iduser = $_REQUEST['id'];

$sql = mysqli_query($conection, "SELECT u.Id_Usuario, u.Nombre_Usuario,u.Email,u.Dpi,u.Direccion,u.Telefono,u.clave,u.contra,u.usuario, (u.rol) as idrol, (r.rol) as rol
									FROM usuario u
									INNER JOIN rol r
									on u.rol = r.idrol
									WHERE Id_Usuario= $iduser ");
mysqli_close($conection);
$result_sql = mysqli_num_rows($sql);

if ($result_sql == 0) {
	header('Location: lista_usuarios.php');
} else {
	$option = '';
	while ($data = mysqli_fetch_array($sql)) {
		# code...
		$iduser  = $data['Id_Usuario'];
		$Nombre_Usuario  = $data['Nombre_Usuario'];
		$Dpi = $data['Dpi'];
		$Direccion = $data['Direccion'];
		$Telefono = $data['Telefono'];
		$Email  = $data['Email'];
		$usuario = $data['usuario'];
		$contra = $data['contra'];
		$idrol   = $data['idrol'];
		$rol     = $data['rol'];

		if ($idrol == 1) {
			$option = '<option value="' . $idrol . '" select>' . $rol . '</option>';
		} else if ($idrol == 2) {
			$option = '<option value="' . $idrol . '" select>' . $rol . '</option>';
		} else if ($idrol == 3) {
			$option = '<option value="' . $idrol . '" select>' . $rol . '</option>';
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Actualizar Usuario</title>
</head>

<body>
	<?php include "includes/header.php"; ?>
	<section id="container">

		<div class="form_register">
			<h1>Actualizar usuario</h1>
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

			<form action="" method="post">
				<input type="hidden" name="Id_Usuario" value="<?php echo $iduser; ?>">
				<label for="Nombre_Usuario">Nombre Completo</label>
				<input type="text" name="Nombre_Usuario" id="Nombre_Usuario" placeholder="Nombre_Usuario" value="<?php echo $Nombre_Usuario; ?>">
				<label for="Dpi">DPI</label>
				<input type="Dpi" name="Dpi" id="Dpi" placeholder="Dpi" value="<?php echo $Dpi; ?>">
				<label for="Dpi">Direccion</label>
				<input type="txt" name="Direccion" id="Direccion" placeholder="Direccion" value="<?php echo $Direccion; ?>">
				<label for="Dpi">Telefono</label>
				<input type="Telefono" name="Telefono" id="Telefono" placeholder="Telefono" value="<?php echo $Telefono; ?>">
				<label for="Email">Email</label>
				<input type="email" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>">
				<label for="usuario">Usuario</label>
				<input type="text" name="usuario" id="usuario" placeholder="Usuario" value="<?php echo $usuario; ?>">
				<label for="clave">Clave</label>
				<input type="password" name="clave" id="clave" placeholder="Clave de acceso">
				<label for="txt">Clave</label>
				<input type="text" name="contra" id="contra" placeholder="Vuelva a escribir la Clave de acceso" value="<?php echo $contra; ?>">
				<label for="rol">Tipo Usuario</label>

				<?php
				include "../conexion.php";
				$query_rol = mysqli_query($conection, "SELECT * FROM rol");
				mysqli_close($conection);
				$result_rol = mysqli_num_rows($query_rol);

				?>

				<select name="rol" id="rol" class="notItemOne">
					<?php
					echo $option;
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
				<input type="submit" value="Actualizar usuario" class="btn_save">

			</form>


		</div>


	</section>
	<?php include "includes/footer.php"; ?>
</body>

</html>