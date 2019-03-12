<?php
include('db.php');


/*function insert_row($tabla, $columnas, $datos){
	include('db.php');
	$columns=implode(',',$columnas);
	$dates=implode(',',$datos);
	$sql='INSERT INTO '.$tabla.' ('.$columns.') values('.$dates.');';
    mysql_query($sql) or die('error en la funcion');
	return mysql_query($sql);
}*/

function buscar($variable,$tabla,$id,$resultado){
	include('db.php');
	$sql='SELECT '.$resultado.' FROM '.$tabla.' WHERE '.$id.'="'.$variable.'";  ';
	$resultsql=mysqli_query($enlace,$sql) or die('error en la funcion');
	$row=mysqli_fetch_array($resultsql);
	$elemento=$row[$resultado];
	return $elemento;
}

/*function buscarv($variable,$tabla,$id,$resultado){
	include('db.php');
	$sql='SELECT '.$resultado.' FROM '.$tabla.' WHERE '.$id.' LIKE "'.$variable.'";  ';
	$resultsql=mysql_query($sql) or die('error en la funcion');
	while($row=mysql_fetch_array($resultsql)){
		$elemento=$row[$resultado];
		echo $resultado1='<table>
						<tr>
						<td>'.$elemento.'</td>
						<tr>';
		
		
	}
	echo '</table>';
}*/

$columnas=array('c_id','c_nmb');
$datos=array('"R91"','"PLATINO/NARANJA1"');

//insert_row('colores',$columnas,$datos);

//echo buscarv('NISSAN','auto','a_marca','a_id');

	/*$tabla='colores';
	$columns=implode(',',$columnas);
	$dates=implode(',',$datos);
	echo $sql='INSERT INTO '.$tabla.' ('.$columns.') values('.$dates.');';
    mysql_query($sql);*/

    /*$sql='SELECT c_linea FROM coloresr WHERE c_marca LIKE "B21";';
    $resultsql=mysql_query($sql) or die('error en la funcion');
	while($row=mysql_fetch_array($resultsql)){
		$elemento=$row['c_linea'];
		echo'<table>
			<tr>
			<td>'.$elemento.'</td>
			<tr>';
		
	}*/