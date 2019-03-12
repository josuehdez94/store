<?php  
include('db.php');
include('funciones.php');

$modelo=strtoupper($_POST['modelo']);

if(isset($modelo)){
$sql='INSERT INTO modelos SET descripcion="'.$modelo.'", estatus="A"';

mysqli_query($enlace,$sql) or die('no se pudo insertar');

header('Location:modelos.php');
}

?>