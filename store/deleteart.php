<?php
include('db.php');
include('funciones.php');

$id=$_GET['id'];

$sql='DELETE FROM articulos WHERE id="'.$id.'"';

mysqli_query($enlace,$sql) or die('error al eliminar');

header('Location:articulos.php');

