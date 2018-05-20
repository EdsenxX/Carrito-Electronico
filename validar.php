<?php
include("conex.php");

session_start();


if (isset($_POST['submit'])) {
	echo "0<br>";
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$ge=$_POST['usuario'];
	$cont=$_POST['contrasena'];
	
	$con=mysqli_connect($host,$user,$pw,$bd)or die("Base de datos");
	$mos=mysqli_query($con,"SELECT * FROM 'usuarios' WHERE 'usuario'='$ge' and 'contrasena'='$cont'")or die("error111111");
	//$mos=mysqli_query($con,"SELECT * FROM`login` WHERE `Usuario`='$ge'AND`Contrasena`='$cont'")or die("error1");
	
	 $va=$mos->num_rows;

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo "2<br>";


$bloc=mysqli_query($con,"SELECT * FROM 'usuarios' WHERE 'usuario' ='$ge' and 'contrasena'='$cont' and 'bloqueo'=0")or die("error2");
 $blo=$bloc->num_rows;
echo "lala<br>";
 if ($blo==0) {
 	echo "kak<br>";
 		header("location: bloqueo.php");
  }else{
  	echo "nokak<br>";
  	if ((isset($_POST["usuario"])) || (isset($_POST["contraseña"]))) {
		$nom=$_POST["usuario"];
		$con1=$_POST["contraseña"];
		$co=mysqli_query($con,"SELECT * FROM `usurios` WHERE `usuario`='$ge'AND`contrasena`='$cont' and conectado=1");
		$si=$co->num_rows;
		echo "$si lalala<br>";
		if ($si>0) {
			header("location: cuentadoble.php?usuario=$ge");

		}else{
			if ($va > 0) {
			echo "3<br>";
			$_SESSION['user']=$nom;
			mysqli_query($con,"UPDATE `usuarios` SET `conectado`= 1 WHERE `usuario`= '$nom'")or die("error tonto");
			echo "4<br>";
			header("location: index.php");
			echo "5<br>";
		}else{
			echo "3.4<br>";

		header("location: inicio.php");
		}
		}
		
	}else{
	echo "2.3<br>";
	header("location: inicio.php");
	}
  }
  	
}else{
	echo "1.3";
	$user=$_SESSION['user'];
	session_unset();
	session_destroy();
	$des=$user;
	echo "$des";
	$usa=$_GET['usuario'];
	mysqli_query($con,"UPDATE `usuarios` SET `conectado`= 0 WHERE `usuario`= '$des'")or die("error tonto2");
	mysqli_query($con,"UPDATE `usuarios` SET `conectado`= 0 WHERE `usuario`= '$usa'")or die("error tonto2");
	header("location: inicio.php");
}

?>