<?php  
include('db.php');
include('funciones.php');

$marca=strtoupper($_POST['marca']);

if(isset($marca)){
$sql='INSERT INTO marcas SET descripcion="'.$marca.'", estatus="A"';

mysqli_query($enlace,$sql) or die('no se pudo insertar');

header('Location:marcas.php');
}
?>