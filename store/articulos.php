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
    	<a class="nav-link " href="index.php">Inicio</a>
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
	<form method="POST" action="insertart.php">
	<h3 class="text-center">Articulos</h3>
	<br>
	<div class="container align-items-center">
  <div class="row">
    <div class="col-sm">
      <div class="form-group">
       <input type="text" name="articulo"  class="form-control"  placeholder="Ingresa un Articulo" required>
    </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" name="marca" required>
      <option disabled selected>Selecciona una Marca</option>
        <div class="dropdown-menu">
        <?php  
        $sql='SELECT * FROM marcas WHERE estatus="A"';
        $resultsql=mysqli_query($enlace,$sql) or die('linea 73');
        while($row=mysqli_fetch_array($resultsql)){
        $marca=$row['descripcion'];
        $marcaid=$row['id'];
        echo'<option value="'.$marcaid.'">'.$marca.'</option>';
        }
        ?>
      </select>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" name="modelo" required>
      <option disabled selected>Selecciona un Modelo</option>
        <div class="dropdown-menu">
        <?php  
        $sql2='SELECT * FROM modelos WHERE estatus="A"';
        $resultsql2=mysqli_query($enlace,$sql2) or die('linea 73');
        while($row=mysqli_fetch_array($resultsql2)){
        $modelo=$row['descripcion'];
        $modeloid=$row['id'];
        echo'<option value="'.$modeloid.'">'.$modelo.'</option>';
        }
        ?>
      </select>
      </div>
    </div>
    </div>
  </div>
  <div class="container col-4">
  <div class="text-center">
      <button type="submit" class=" btn btn-block mybtn btn-outline-success tx-tfm">Insertar</button>
  </div>
  </div>
</div>
 	</form>
</div>
<br>
<div class="container">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Articulo</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
	<?php  
		$sql3='SELECT * FROM articulos';
		$resultsql3=mysqli_query($enlace,$sql3) or die('linea 75');
		while($row=mysqli_fetch_array($resultsql3)){
			$id=$row['id'];
			$marca1=$row['marca'];
      $modelo1=$row['modelo'];
      $des=$row['descripcion'];
			$estatus=$row['estatus'];

			if($estatus=='A'){
      echo'<tbody class="table-striped">
					<tr>
						<td>'.$des.'-'.buscar($marca1,'marcas','id','descripcion').'-'.buscar($modelo1,'modelos','id','descripcion').'</td>
						<td><a href="deleteart.php?id='.$id.'"><button class="btn btn-success"><span class="spinner-border spinner-border-sm"></span>Borrar</button></a></td>
            <td><a href="editart.php?id='.$id.'"><button class="btn btn-primary"><span class="spinner-border spinner-border-sm"></span>Editar</button></a></td>
					</tr>';
		  }elseif($estatus=='E'){
        echo'<form method="POST" action="updateart.php">
        <tbody class="table-striped">
          <tr>
            <td><input type="text" value="'.$des.'" name="articulo"></td>
            <td><div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" name="marca">
      <option value="'.$marca1.'">'.buscar($marca1,'marcas','id','descripcion').'</option>
        <div class="dropdown-menu">';
        $sqlmar='SELECT * FROM marcas WHERE estatus="A"';
        $resultmar=mysqli_query($enlace,$sqlmar) or die('linea 73');
        while($row=mysqli_fetch_array($resultmar)){
        $mar=$row['descripcion'];
        $marid=$row['id'];
        echo'<option value="'.$marid.'">'.$mar.'</option>';
        }

        echo'</select>
            </div>
          </div>
            </td>';
            echo'<td><div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" name="modelo">
      <option value="'.$modelo1.'">'.buscar($modelo1,'modelos','id','descripcion').'</option>
        <div class="dropdown-menu">';
        $sqlmod='SELECT * FROM modelos WHERE estatus="A"';
        $resultmod=mysqli_query($enlace,$sqlmod) or die('linea 73');
        while($row=mysqli_fetch_array($resultmod)){
        $mod=$row['descripcion'];
        $modid=$row['id'];
        echo'<option value="'.$modid.'">'.$mod.'</option>';
        }
         echo'</select>
            </div>
          </div>
            </td>';
            echo'<td><button class="btn btn-primary"><span class="spinner-border spinner-border-sm"></span>Actualizar</button></td>
            <input type="hidden" value="'.$id.'" name="id">
          </tr></form>';
      }
    }
		echo'</table>
</div>';
	?>
</body>
</html>