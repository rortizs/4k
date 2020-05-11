<?php

include("con_db.php");
if ($conex) {

	echo "todo correcto";
} else {
	echo "ha ocurrido un error";
}

if (isset($_POST['register'])) {
	if (
		strlen($_POST['name']) >= 1 &&
		strlen($_POST['Dpi']) >= 1 &&
		strlen($_POST['Direccion']) >= 1 &&
		strlen($_POST['Telefono']) >= 1 &&
		strlen($_POST['Email']) >= 1 &&
		strlen($_POST['Cargo']) >= 1 &&
		strlen($_POST['Username']) >= 1 &&
		strlen($_POST['Password']) >= 1
	) {
		$name = trim($_POST['name']);
		$dpi = trim($_POST['Dpi']);
		$direccion = trim($_POST['Direccion']);
		$telefono = trim($_POST['Telefono']);
		$email = trim($_POST['Email']);
		$cargo = trim($_POST['Cargo']);
		$username = trim($_POST['Username']);
		$password = trim($_POST['Password']);





		$consulta = "INSERT INTO usuario(Id_Usuario, Nombre_Usuario, Dpi, Direccion, Telefono, Email, Cargo, User_Name, Password) VALUES ('','$name','$dpi','$direccion','$telefono','$email',
	    	'$cargo','$username','$password')";


		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
?>
			<h3 class="ok">¡Te has inscripto correctamente!</h3>
		<?php
		} else {
		?>
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
		<?php
		}
	} else {
		?>
		<h3 class="bad">¡Por favor complete los campos!</h3>
<?php
	}
}

?>