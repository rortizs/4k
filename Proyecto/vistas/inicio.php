<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
</head>
<body>

<body>
  <body style="background-image: url(../img/12.jpg);
background-repeat: no-repeat;
  background-size: cover;
  background-position: bottom;
  background-attachment: fixed;


  display: flex;
  justify-content: center;
  align-items: center;
" }>
</body>





<!--blockquote class="blockquote text-center" style="color:white">
  <p class="mb-0">Zapateria Novedades</p>
  <footer class="blockquote-footer" style="color:white">La tendencia al cambio, que se vive hoy en día, nos obliga a estar actualizados y pendientes de las metodologías que se usan con mayor éxito y frecuencia en el desarrollo de software, dada esta exigencia el presente equipo de trabajo está poniendo en práctica dichas metodologías en el diseño y elaboración del sistema de gestión administrativa de la empresa Zapatería Novedades. <cite title="Source Title"></cite></footer>
</blockquote-->

</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>