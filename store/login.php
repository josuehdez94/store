
<?php
include('db.php');
include('funciones.php');

$mail=$_POST['email'];
$pass=$_POST['password'];

if(isset($mail)){
	$user=buscar($mail,'usuarios','usuario','usuario');
	if($user==$mail){
		$sql='SELECT * FROM usuarios WHERE usuario="'.$user.'" AND pass="'.$pass.'"';
		$resultsql=mysqli_query($enlace,$sql) or die('linea 12');
		$num_rs=mysqli_num_rows($resultsql);

		if($num_rs==1){
		
		session_start();
		$_SESSION['id']=$mail;
		header('Location:index.php');
		}else{
			echo '<script>alert("contraseña incorrecta");
			location.href="login.html";
		</script>';
		}

	}else{
		echo '<script>alert("tu usuario no existe");
			location.href="login.html";
		</script>';
		
	}
}

?>