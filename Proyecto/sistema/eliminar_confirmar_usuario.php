<?php
session_start();
if ($_SESSION['rol'] != 1) {
	header("location: ./");
}
include "../conexion.php";

if (!empty($_POST)) {
	if ($_POST['Id_Usuario'] == 1) {
		header("location: lista_usuarios.php");
		mysqli_close($conection);
		exit;
	}
	$Id_Usuario = $_POST['Id_Usuario'];

	//$query_delete = mysqli_query($conection,"DELETE FROM usuario WHERE idusuario =$idusuario ");
	$query_delete = mysqli_query($conection, "UPDATE usuario SET estatus = 0 WHERE Id_Usuario = $Id_Usuario ");
	mysqli_close($conection);
	if ($query_delete) {
		header("location: lista_usuarios.php");
	} else {
		echo "Error al eliminar";
	}
}




if (empty($_REQUEST['id']) || $_REQUEST['id'] == 1) {
	header("location: lista_usuarios.php");
	mysqli_close($conection);
} else {

	$Id_Usuario = $_REQUEST['id'];

	$query = mysqli_query($conection, "SELECT u.Nombre_Usuario,u.usuario,r.rol
												FROM usuario u
												INNER JOIN
												rol r
												ON u.rol = r.idrol
												WHERE u.Id_Usuario = $Id_Usuario ");

	mysqli_close($conection);
	$result = mysqli_num_rows($query);

	if ($result > 0) {
		while ($data = mysqli_fetch_array($query)) {
			# code...
			$nombre = $data['Nombre_Usuario'];
			$usuario = $data['usuario'];
			$rol     = $data['rol'];
		}
	} else {
		header("location: lista_usuarios.php");
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Eliminar Usuario</title>
</head>

<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		<div class="data_delete">
			<h2>¿Está seguro de eliminar el siguiente registro?</h2>
			<p>Nombre: <span><?php echo $nombre; ?></span></p>
			<p>usuario: <span><?php echo $usuario; ?></span></p>
			<p>Tipo Usuario: <span><?php echo $rol; ?></span></p>

			<form method="post" action="">
				<input type="hidden" name="Id_Usuario" value="<?php echo $Id_Usuario; ?>">
				<a href="lista_usuarios.php" class="btn_cancel">Cancelar</a>
				<input type="submit" value="Aceptar" class="btn_ok">
			</form>
		</div>


	</section>
	<?php include "includes/footer.php"; ?>
</body>

</html>