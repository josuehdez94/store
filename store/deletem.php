<?php
include('db.php');
include('funciones.php');

$id=$_GET['id'];

if(isset($id)){
$sql1='DELETE FROM marcas WHERE id="'.$id.'"';

mysqli_query($enlace,$sql1) or die('no se pudo eliminar');

header('Location:marcas.php');	

}