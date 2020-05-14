<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Zapateria Novedades</title>
</head>

<body <?php include "includes/header.php"; ?>>

	<section id="container">
		<h1>Bienvenido al sistema</h1>

		<section class="content">

			<div class="row">
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="card card-primary card-outline">
						<div class="card-body box-profile">
							<div class="text-center">
								<img class="profile-user-img img-fluid img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">
							</div>

							<h3 class="profile-username text-center"><?php echo $_SESSION['Nombre_Usuario'] ?></h3>

							<p class="text-muted text-center">Zapatería Novedades</p>

							<ul class="list-group list-group-unbordered mb-3">
								<li class="list-group-item">
								<li class="list-group-item">
									<b>Usuario</b> <a class="float-right"><?php echo $_SESSION['user'] ?></a>
								</li>
								<li class="list-group-item">
									<b>Correo</b> <a class="float-right"><?php echo $_SESSION['Email'] ?></a>
								</li>
								<li class="list-group-item">
									<b>Teléfono</b> <a class="float-right"><?php echo $_SESSION['Telefono'] ?></a>
								</li>
							</ul>

						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->






					<!-- About Me Box -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Acerca de mí</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">


							<strong><i class="fas fa-map-marker-alt mr-1"></i> Residencia</strong>
							<a class="float-right"><?php echo $_SESSION['Direccion'] ?></a>

						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->

				<div class="col-md-9">
					<div class="card">
						<div class="card-header p-2">
							<ul class="nav nav-pills">
								<li class="nav-item"><a class="nav-link active" href="#" data-toggle="tab">Objetivos</a></li>
							</ul>
						</div><!-- /.card-header -->


						<div class="card-body">
							<div class="tab-content">
								<div class="active tab-pane" id="objetivos">
									<!-- Post -->

									<!-- /.post -->

									<!-- Post -->

									<!-- /.post -->


									<!-- Post -->
									<div class="post">
										<div class="user-block">
											<img src="dist/img/logozapateria.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
											<span class="username">
												<a href="#">Objetivos Zapatería Novedades</a>
											</span>
										</div>

										<!-- /.user-block -->
										<div class="row mb-3">
											<div class="col-sm-6">
												<span>
													<p><br><b>Objetivos Generales</b><br>

														Ampliar nuestras instalaciones, de acuerdo a la demanda que el mercado exija y estableciendo puntos de venta fuera de nuestras fronteras.

														<br>

														<br><b>Objetivos Específicos</b><br>

														Lograr una mayor variedad de productos, incrementar la rentabilidad económica un 10% durante 2020. o Conseguir una cuota de mercado del 15% antes de diciembre de 2020. Optimizar los recursos empleados durante el año 2020.
													</p>
												</span>
											</div>
											<!-- /.col -->
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-6">
														<img class="img-fluid mb-3" src="dist/img/photo1.png" alt="Photo">
														<img class="img-fluid" src="dist/img/prod-2.jpg" alt="Photo">
													</div>
													<!-- /.col -->
													<div class="col-sm-6">
														<img class="img-fluid mb-3" src="dist/img/prod-3.jpg" alt="Photo">
														<img class="img-fluid" src="dist/img/photo4.jpg" alt="Photo">
													</div>
													<!-- /.col -->
												</div>
												<!-- /.row -->
											</div>
											<!-- /.col -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.post -->
								</div>
								<!-- /.tab-pane -->


								<div class="tab-pane" id="logoshoestore">
									<form class="form-horizontal">
										<div class="form-group row">
											<img src="dist/img/logozapateria.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">

											<div>
												<span>
													<p><br><b>Misión</b><br>

														Ser una empresa de comercialización a nivel nacional e internacional, ofreciendo a los clientes un producto de cálida; cumpliendo exigentes estándares de calidad, aportando valor agregado a nuestro servicio, promoviendo un mejor nivel de vida de nuestros empleados y contribuir en el desarrollo de nuestra sociedad.

														<br>

														<br><b>Visión</b><br>

														Ser la empresa líder en el mercado de los zapatos y obtener en cinco años una mayor participación de mercado con una marca reconocida por la calidad, innovación, tecnología y confiabilidad de sus productos, que permitan obtener una mayor rentabilidad.
													</p>
												</span>
											</div>
										</div>

										<!-- /.row -->
								</div><!-- /.container-fluid -->
		</section>



		<?php include "includes/footer.php"; ?>
</body>

</html>