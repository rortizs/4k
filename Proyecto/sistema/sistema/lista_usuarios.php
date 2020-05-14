<?php
session_start();
if ($_SESSION['rol'] != 1) {
	header("location: ./");
}

include "../conexion.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Lista de usuarios</title>
</head>

<body>
	<?php include "includes/header.php"; ?>
	<section id="container">

		<h1>Lista de usuarios</h1>
		<a href="registro_usuario.php" class="btn_new">Crear usuario</a>

		<form action="buscar_usuario.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
			<input type="submit" value="Buscar" class="btn_search">
		</form>

		<table>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>DPI</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Usuario</th>
				<th>Clave</th>
				<th>Rol</th>
				<th>Acciones</th>
			</tr>
			<?php
			//Paginador
			$sql_registe = mysqli_query($conection, "SELECT COUNT(*) as total_registro FROM usuario WHERE estatus = 1 ");
			$result_register = mysqli_fetch_array($sql_registe);
			$total_registro = $result_register['total_registro'];

			$por_pagina = 5;

			if (empty($_GET['pagina'])) {
				$pagina = 1;
			} else {
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina - 1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);

			$query = mysqli_query($conection, "SELECT u.Id_Usuario, u.Nombre_Usuario, u.Dpi, 
												u.Direccion, u.Telefono, u.Email, u.usuario, u.contra, 
												r.rol FROM usuario u INNER JOIN rol r ON u.rol = r.idrol 
												WHERE estatus = 1 ORDER BY u.Id_Usuario ASC LIMIT $desde,$por_pagina 
				");

			mysqli_close($conection);

			$result = mysqli_num_rows($query);
			if ($result > 0) {

				while ($data = mysqli_fetch_array($query)) {

			?>
					<tr>
						<td><?php echo $data["Id_Usuario"]; ?></td>
						<td><?php echo $data["Nombre_Usuario"]; ?></td>
						<td><?php echo $data["Dpi"]; ?></td>
						<td><?php echo $data["Direccion"]; ?></td>
						<td><?php echo $data["Telefono"]; ?></td>
						<td><?php echo $data["Email"]; ?></td>
						<td><?php echo $data["usuario"]; ?></td>
						<td><?php echo $data["contra"]; ?></td>
						<td><?php echo $data['rol'] ?></td>
						<td>
							<a class="link_edit" href="editar_usuario.php?id=<?php echo $data["Id_Usuario"]; ?>">Editar</a>

							<?php if ($data["Id_Usuario"] != 1) { ?>

								<a class="link_delete" href="eliminar_confirmar_usuario.php?id=<?php echo $data["Id_Usuario"]; ?>">Eliminar</a>
							<?php } ?>

						</td>
					</tr>

			<?php
				}
			}
			?>


		</table>
		<div class="paginador">
			<ul>
				<?php
				if ($pagina != 1) {
				?>
					<li><a href="?pagina=<?php echo 1; ?>">|<</a> </li> <li><a href="?pagina=<?php echo $pagina - 1; ?>">
									<<</a> </li> <?php
												}
												for ($i = 1; $i <= $total_paginas; $i++) {
													# code...
													if ($i == $pagina) {
														echo '<li class="pageSelected">' . $i . '</li>';
													} else {
														echo '<li><a href="?pagina=' . $i . '">' . $i . '</a></li>';
													}
												}

												if ($pagina != $total_paginas) {
													?> <li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
					<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
				<?php } ?>
			</ul>
		</div>


	</section>
	<?php include "includes/footer.php"; ?>
</body>

</html>