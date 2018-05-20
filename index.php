<?php 
	session_start();
		if (isset($_SESSION['user'])) {
			$user=$_SESSION['user'];
			$ta=$user;
		}

	include("php/funciones.php");

	include("conex.php");
		$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
		$mos=mysqli_query($con,"SELECT * FROM `archivos` ORDER BY`id`DESC")or die("problemas al extrar datos");

		$co=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
		$mo=mysqli_query($co,"SELECT * FROM `usuarios`")or die("problemas al extrar datos");
		$ro= $mo->fetch_assoc();
?>

<!doctype html>
<html>

		<?php
			funciones::head();
		?>

	<body>
	
		<?php 
			funciones::redes();
		?>
	
		<?php 
			funciones::menu();
		?>
	
		<?php
			funciones::contenido($mos);
		?>

	</body>
</html>