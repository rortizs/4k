		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>

				<?php
				if ($_SESSION['rol'] == 1) {
				?>
					<li class="principal">
						<a href="#">Panel</a>
						<ul>
							<li><a href="Vistapanel.php">Vista Panel</a></li>

						</ul>
					</li>
					<li class="principal">
						<a href="#">Usuarios</a>
						<ul>
							<li><a href="registro_usuario.php">Nuevo Usuario</a></li>
							<li><a href="lista_usuarios.php">Lista de Usuarios</a></li>
						</ul>
					</li>

					<li class="principal">
						<a href="#">Clientes</a>
						<ul>
							<li><a href="#">Nuevo Cliente</a></li>
							<li><a href="#">Lista de Clientes</a></li>
						</ul>
					</li>

					<li class="principal">
						<a href="#">Proveedores</a>
						<ul>
							<li><a href="#">Nuevo Proveedor</a></li>
							<li><a href="#">Lista de Proveedores</a></li>
						</ul>
					</li>

					<li class="principal">
						<a href="#">Productos</a>
						<ul>
							<li><a href="#">Nuevo Producto</a></li>
							<li><a href="#">Lista de Productos</a></li>
						</ul>
					</li>

					<li class="principal">
						<a href="#">Facturas</a>
						<ul>
							<li><a href="/4k/Proyecto/Ventas.php">Nuevo Factura</a></li>
							<li><a href="#">Facturas</a></li>
						</ul>
					</li>
				<?php } ?>


				<?php
				if ($_SESSION['rol'] == 2) {
				?>

					<li class="principal">
						<a href="#">Proveedores</a>
						<ul>
							<li><a href="#">Nuevo Proveedor</a></li>
							<li><a href="#">Lista de Proveedores</a></li>
						</ul>
					</li>

					<li class="principal">
						<a href="#">Productos</a>
						<ul>
							<li><a href="#">Nuevo Producto</a></li>
							<li><a href="#">Lista de Productos</a></li>
						</ul>
					</li>
				<?php } ?>


				<?php
				if ($_SESSION['rol'] == 3) {
				?>


					<li class="principal">
						<a href="#">Clientes</a>
						<ul>
							<li><a href="#">Nuevo Cliente</a></li>
							<li><a href="Listafactura.php">Lista de Clientes</a></li>
						</ul>
					</li>

					<li class="principal">
						<a href="#">Productos</a>
						<ul>
							<li><a href="#">Lista de Productos</a></li>
						</ul>
					</li>

					<li class="principal">
						<a href="#">Facturas</a>
						<ul>
							<li><a href="/4k/Proyecto/Ventas.php">Nuevo Factura</a></li>
							<li><a href="#">Facturas</a></li>
						</ul>
					</li>
				<?php } ?>
			</ul>
		</nav>