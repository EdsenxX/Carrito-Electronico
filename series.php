<?php 
session_start();
	if (isset($_SESSION['user'])) {
		$user=$_SESSION['user'];
		$ta=$user;
	}

include("php/funciones.php");

include("conex.php");

	$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
	$mos=mysqli_query($con,"SELECT * FROM `archivos` WHERE `categoria`='Serie' ORDER BY`id`DESC")or die("problemas al extrar datos");
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
	
		<header>
			<?php 
				funciones::menu();
			?>
		</header>
	
		<?php
			funciones::contenido($mos);
		?>
	
	</body>
</html>