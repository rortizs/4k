<?php

class proveedores
{

	public function agregaProveedor($datos)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$idusuario = $_SESSION['iduser'];

		$sql = "INSERT into proveedores (id_usuario,
										nombre,
										apellido,
										direccion,
										email,
										telefono,
										Nit)
							values ('$idusuario',
									'$datos[0]',
									'$datos[1]',
									'$datos[2]',
									'$datos[3]',
									'$datos[4]',
									'$datos[5]')";
		return mysqli_query($conexion, $sql);
	}

	public function obtenDatosProveedor($idproveedor)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "SELECT id_proveedor, 
							nombre,
							apellido,
							direccion,
							email,
							telefono,
							Nit 
				from proveedores where id_proveedor='$idproveedor'";
		$result = mysqli_query($conexion, $sql);
		$ver = mysqli_fetch_row($result);

		$datos = array(
			'id_proveedor' => $ver[0],
			'nombre' => $ver[1],
			'apellido' => $ver[2],
			'direccion' => $ver[3],
			'email' => $ver[4],
			'telefono' => $ver[5],
			'Nit' => $ver[6]
		);
		return $datos;
	}

	public function actualizaProveedor($datos)
	{
		$c = new conectar();
		$conexion = $c->conexion();
		$sql = "UPDATE proveedores set nombre='$datos[1]',
										apellido='$datos[2]',
										direccion='$datos[3]',
										email='$datos[4]',
										telefono='$datos[5]',
										Nit='$datos[6]' 
								where id_proveedor='$datos[0]'";
		return mysqli_query($conexion, $sql);
	}

	public function eliminaProveedor($idproveedor)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "DELETE from proveedores where id_proveedor='$idproveedor'";

		return mysqli_query($conexion, $sql);
	}
}
