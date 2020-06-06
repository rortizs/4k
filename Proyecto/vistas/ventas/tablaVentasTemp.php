<?php 

	session_start();
	//print_r($_SESSION['tablaComprasTemp']);
 ?>
 <h4><strong><div class="modal-content" id="nombreclienteVenta"></div></strong></h4>
 <table class="modal-content table-bordered" style="text-align: center;">
 <!--table class="table table-bordered table-hover table-condensed" style="text-align: center;"-->
 	<caption>
 		<span class="btn btn-success" onclick="crearVenta()"> Generar Venta
 			
 		</span>
 	</caption>
 	<tr>
 		<td>Nombre</td>
 		<td>Pago</td>
 		<td>Descripcion</td>
 		<td>Precio</td>
 		<td>Cantidad</td>
 		<td>Quitar</td>
 	</tr>
 	<?php 
 	$total=0;//esta variable tendra el total de la compra en dinero
 	$cliente=""; //en esta se guarda el nombre del cliente
 		if(isset($_SESSION['tablaComprasTemp'])):
 			$i=0;
 			foreach (@$_SESSION['tablaComprasTemp'] as $key) {

 				$d=explode("||", @$key);
 	 ?>

 	<tr>
 		<td><?php echo $d[1] ?></td>
 		<td><?php echo $d[2] ?></td>
 		<td><?php echo $d[3] ?></td>
 		<td><?php echo $d[4] ?></td>
 		<td><?php echo 1; ?></td>
 		<td>
 			<span class="btn btn-danger btn-xs" onclick="quitarP('<?php echo $i; ?>')">
 				<span class="glyphicon glyphicon-remove"></span>
 			</span>
 		</td>
 	</tr>

 <?php 
 		$total=$total + $d[4];
 		$i++;
 		$cliente=$d[5];
 	}
 	endif; 
 ?>

 	<tr>
 		<td>Total: <?php echo "Q".$total; ?></td>
 	</tr>

 </table>


 <script type="text/javascript">
 	$(document).ready(function(){
 		nombre="<?php echo @$cliente ?>";
 		$('#nombreclienteVenta').text("Nombre del Cliente: " + nombre);
 	});
 </script>