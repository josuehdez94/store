<?php  
include('db.php');
include('funciones.php');

echo $id=$_GET['id'];

$sql='UPDATE articulos SET estatus="E" WHERE id="'.$id.'" ';

mysqli_query($enlace,$sql) or die('linea 7');

header('Location:articulos.php');

?>