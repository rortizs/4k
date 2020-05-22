
<?php require_once "dependencias.php" 

?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <body style="background-image: url(../img/1.jpg);
background-repeat: no-repeat;
  background-size: cover;
  background-position: bottom;
  background-attachment: fixed;


  display: flex;
  justify-content: center;
  align-items: center;
" }>
</body>



  <!-- Begin Navbar -->
  <div id="nav">

    <div class="navbar-toggleable-lg navbar-fixed-top"  style="color:blue" data-spy="affix" data-offset-top="50">
      <div class="container">
        <div class="p-3 mb-2 bg-info text-black">.</div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"  style="color:blue" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        <div id="navbar" class="collapse navbar-collapse" >

          <ul class="nav navbar-nav nav-item navbar-right" >

            <li class="active" ><a href="inicio.php" style="color:blue"><span class="glyphicon" ></span> Inicio </a>
            </li>

              <li class="active" ><a href="inicio.php" style="color:blue"><span class="glyphicon" ></span> Proveedores </a>
            </li>

          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle"  style="color:blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon"></span> Administrar Productos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php" style="color:blue">Categorias</a></li>
              <li><a href="articulos.php" style="color:blue">Productos</a></li>
            </ul>
          </li>


        <?php
        if($_SESSION['usuario']=="admin"):
         ?>
           <li><a href="usuarios.php"><span class="glyphicon"></span> Administrar Usuarios</a>
            </li>
         <?php 
       endif;
          ?>

          <li><a href="clientes.php" style="color:blue"><span class="glyphicon"></span> Clientes</a>
          </li>
          <li><a href="ventas.php" style="color:blue"><span class="glyphicon"></span> Vender Productos</a>
          </li>
          
          <li class="dropdown" >
            <a href="#" style="color: blue"  class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon"></span> Usuario: <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: blue" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>
</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(200);

    }
    else {
      $('.logo').height(100);
    }
  }
  );
</script>