<?php 

require_once "../../clases/Conexion.php";
$c= new conectar();
$conexion=$c->conexion();
?>


<h4><strong>Vender un Producto</strong></h4>
<div class="row">
	<div class="col-sm-4">
		<form id="frmVentasProductos">
			<label>Cliente Registrado</label>
			<select class="form-control input-sm" id="clienteVenta" name="clienteVenta">
				<option value="A">Seleccionar Cliente</option>
				<?php
				$sql="SELECT id_cliente,nombre,apellido 
				from clientes";
				$result=mysqli_query($conexion,$sql);
				while ($cliente=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $cliente[0] ?>"><?php echo $cliente[1]." ".$cliente[2] ?></option>
				<?php endwhile; ?>
			</select>
			<label>Producto</label>
			<select class="form-control input-sm" id="productoVenta" name="productoVenta">
				<option value="A">Seleccionar Producto</option>
				<?php
				$sql="SELECT id_producto,
				nombre
				from articulos";
				$result=mysqli_query($conexion,$sql);

				while ($producto=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $producto[0] ?>"><?php echo $producto[1] ?></option>
				<?php endwhile; ?>
			</select>
			<label>Descripcion</label>
			<textarea readonly="" id="descripcionV" name="descripcionV" class="form-control input-sm"></textarea>
			<label>Cantidad</label>
			<input readonly="" type="text" class="form-control input-sm" id="cantidadV" name="cantidadV">
			<label>Precio</label>
			<input readonly="" type="text" class="form-control input-sm" id="precioV" name="precioV">
			<p></p>
			<span class="btn btn-primary" id="btnAgregaVenta">Agregar</span>
			
		</form>
	</div>

	<!--Line for Load image and Table Temp> <*****************************************************-->
	<div class="col-sm-3">
		<div id="imgProducto"></div>
	</div>
	<div class="col-sm-4">
		<div id="tablaVentasTempLoad"></div>
	</div>
</div>


<!--Script Load Table Temp><*******************************************-->
<script type="text/javascript">
	$(document).ready(function(){

		$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");

		$('#productoVenta').change(function(){
			$.ajax({
				type:"POST",
				data:"idproducto=" + $('#productoVenta').val(),
				url:"../procesos/ventas/llenarFormProducto.php",
				success:function(r){
					dato=jQuery.parseJSON(r);

					$('#descripcionV').val(dato['descripcion']);
					$('#cantidadV').val(dato['cantidad']);
					$('#precioV').val(dato['precio']);

					$('#imgProducto').prepend('<img class="img-thumbnail" id="imgp" src="' + dato['ruta'] + '" />');
				}
			});
		});



	
		$('#btnAgregaVenta').click(function(){
			vacios=validarFormVacio('frmVentasProductos');

			if(vacios > 0){
				alertify.alert("Llenar todos los Campos!!");
				return false;
			}

			datos=$('#frmVentasProductos').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"../procesos/ventas/agregaProductoTemp.php",
				success:function(r){
					$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
				}
			});
		});

	});
</script>


<!--Function Quit and Add Venta> <-->

<script type="text/javascript">
	function quitarP(index){
		$.ajax({
			type:"POST",
			data:"ind=" + index,
			url:"../procesos/ventas/quitarproducto.php",
			success:function(r){
				$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
			}
		});
	}

	function crearVenta(){
		$.ajax({
			url:"../procesos/ventas/crearVenta.php",
			success:function(r){
				if(r > 0){
					$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
					$('#frmVentasProductos')[0].reset();
					alertify.alert("Venta creada con exito");
				}else if(r==0){
					alertify.alert("No Ventas Hechas!!");
				}else{
					alertify.error("No se pudo Crear la Venta");
				}
			}
		});
	}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#clienteVenta').select2();
		$('#productoVenta').select2();

	});
</script>