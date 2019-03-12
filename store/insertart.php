<?php
include('db.php');
include('funciones.php');

$art=strtoupper($_POST['articulo']);
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];

$sql='INSERT INTO articulos SET descripcion="'.$art.'",
							    marca="'.$marca.'",
							    modelo="'.$modelo.'",
							    estatus="A"';

mysqli_query($enlace,$sql) or die('linea 9');

header('Location:articulos.php');

