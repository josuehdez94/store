<?php
$enlace =  mysqli_connect('127.0.0.1','allaccess','aiduald1','taco');
if (!$enlace) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

//echo 'Éxito... ' . mysqli_get_host_info($enlace) . "\n";

//mysqli_close($enlace);
//phpinfo();

?>