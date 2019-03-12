<?php
include('db.php');
include('funciones.php');

echo $art=strtoupper($_POST['articulo']);
echo $marca=$_POST['marca'];
echo $modelo=$_POST['modelo'];
echo $id=$_POST['id'];

$sql='UPDATE articulos SET descripcion="'.$art.'",
						   marca="'.$marca.'",
						   modelo="'.$modelo.'",
						   estatus="A" 
						WHERE id="'.$id.'"';

mysqli_query($enlace,$sql) or die('no se pudo actualizar registro');

header('Location:articulos.php');