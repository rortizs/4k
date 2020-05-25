<?php
require_once "../../clases/Conexion.php";

$obj = new conectar();
$conexion = $obj->conexion();

$sql = "SELECT id_proveedor, 
				nombre,
				apellido,
				direccion,
				email,
				telefono,
				Nit 
		from proveedores";
$result = mysqli_query($conexion, $sql);
?>

<div class="table-responsive">
	<table class="modal-content table-bordered" style="text-align: center;">
		<h3><strong>Proveedores Registrados</strong></h3>
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Direccion</td>
			<td>Email</td>
			<td>Telefono</td>
			<td>Nit</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>

		<?php while ($ver = mysqli_fetch_row($result)) : ?>

			<tr>
				<td><?php echo $ver[1]; ?></td>
				<td><?php echo $ver[2]; ?></td>
				<td><?php echo $ver[3]; ?></td>
				<td><?php echo $ver[4]; ?></td>
				<td><?php echo $ver[5]; ?></td>
				<td><?php echo $ver[6]; ?></td>
				<td>
					<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalProveedoresUpdate" onclick="agregaDatosProveedor('<?php echo $ver[0]; ?>')">
						<span class="glyphicon glyphicon-pencil"></span>
					</span>
				</td>
				<td>
					<span class="btn btn-danger btn-xs" onclick="eliminarProveedor('<?php echo $ver[0]; ?>')">
						<span class="glyphicon glyphicon-remove"></span>
					</span>
				</td>
			</tr>
		<?php endwhile; ?>
	</table>
</div>