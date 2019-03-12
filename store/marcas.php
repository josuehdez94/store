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
    	<a class="nav-link disabled" href="index.php">Inicio</a>
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
<br>
<div class="jumbotron-fluid">
	<form method="POST" action="insertm.php">
	<h3 class="text-center">Marcas</h3>
	<br>
	<div class="container col-4">
	<div class="form-group">
       <input type="text" name="marca"  class="form-control"  placeholder="Ingresa una marca" required>
    </div>
    <div class="text-center ">
      <button type="submit" class=" btn btn-block mybtn btn-outline-success tx-tfm">Insertar</button>
    </div>
 	</div>
 	</form>
</div>
<br>
<div class="container">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Marca</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
	<?php  
		$sql='SELECT * FROM marcas WHERE estatus="A"';
		$resultsql=mysqli_query($enlace,$sql) or die('linea 59');
		while($row=mysqli_fetch_array($resultsql)){
			$id=$row['id'];
			$marca=$row['descripcion'];
			$status=$row['estatus'];

			echo'<tbody class="table-striped">
					<tr>
						<td>'.$id.'</td>
						<td>'.$marca.'</td>
						<td>'.$status.'</td>
						<td><a href="deletem.php?id='.$id.'"><button class="btn btn-success"><span class="spinner-border spinner-border-sm"></span>Borrar</button></a></td>
					</tr>';
		}
		echo'</table>
</div>';
	?>
</body>
</html>