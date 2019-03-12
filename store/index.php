<?php
include('db.php');
include('funciones.php');

session_start();
$sesion=$_SESSION['id'];

if($sesion==''){
	header('Location:login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<header>
	<nav>
		<ul class="nav nav-pills">
  		<li class="nav-item">
    	<a class="nav-link active" href="index.php">Inicio</a>
  		</li>
  		<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Opciones</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="marcas.php">Marcas</a>
      <a class="dropdown-item" href="modelos.php">Modelos</a>
      <a class="dropdown-item" href="articulos.php">Articulos</a>
    </div>
  </li>
  <li class="nav-item">

    <a class="nav-link disabled" href="#">Usuario:<?php echo buscar($sesion,'usuarios','usuario','usuario');  ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cerrarsesion.php">Cerrar Sesión</a>
  </li>
</ul>
	</nav>
</header>
<body>
  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.jpg" alt="First slide" width="700px" height="600px">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="display-2 text-danger">Todas las Marcas</h5>
      <p class="text-primary">Nueva sudadera de México</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.webp" alt="Second slide" width="700px" height="600px">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="display-2 text-danger">Articulos hasta 50% off</h5>
      <p class="text-gray-dark">Playera deportiva ADIDAS</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/3.jpg" alt="Third slide" width="700px" height="600px">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="display-2 text-danger">Los mejores Tenis</h5>
      <p class="text-primary">Running Nike REACT</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  
</body>
</html>