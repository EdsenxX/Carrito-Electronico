<?php 
session_start();
	if (isset($_SESSION['user'])) {
		$user=$_SESSION['user'];
		$ta=$user;
	}

include("php/funciones.php");

include("conex.php");

	$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
	$mos=mysqli_query($con,"SELECT * FROM `archivos` WHERE `categoria`='Videojuego' ORDER BY`id`DESC")or die("problemas al extrar datos");
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