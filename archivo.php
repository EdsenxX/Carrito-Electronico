<?php
	
	session_start();
	if (isset($_SESSION['user'])) {
		$user=$_SESSION['user'];
		$ta=$user;
	}

include("php/funciones.php");

include("conex.php");
	$id = $_GET['id'];

	$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
	$mos=mysqli_query($con,"SELECT * FROM `archivos` WHERE id=$id")or die("problemas al extrar datos");
	$row= $mos->fetch_assoc();



?>
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

		<div class="contenedor">
		
			<center><h1><?php echo $row['nombre'];?></h1></center><br>

			<center>
				<?php 
				if($row['video']<>""){
				echo $row['video'];
				}else{?>
				<center><img src="imagenes/no-video.jpg" class="no"></center>
				<?php } ?>
			</center>
		
			<center><div>

				<div class="controles">
					<i class="fa fa-eye fa-2" aria-hidden="true"></i>
					<p class="numeros"><?php echo $row['visitas']; ?></p>
					<i class="icono fa fa-thumbs-o-up fa-2" aria-hidden="true"></i>
					<p class="numeros"><?php echo $row['megusta']; ?></p>
					<i class="icono fa fa-thumbs-o-down fa-2" aria-hidden="true"></i>
					<p class="numeros"><?php echo $row['nomegusta']; ?></p>
					<a href="favoritos.php?id=<?php  echo $row['id'];?>"><i class="icono fa fa-heart-o fa-2" aria-hidden="true"></i></a>

				</div>
		
				<center>
					<a class="agrega" href="carrito.php?id=<?php  echo $row['id'];?>">Agregar al carrito</a>
				</center>
				
			<?php
				if($row['url']<>"") {?>
					<center>
						<h2 class="sub">Descripcion:</h2>
						<p class="des"><?php echo $row['url']; ?></p>
					</center>
					<?php
				}
			?>
		
			<?php if($row['idioma']<>"") { ?>
				<h2 class="sub">Idioma Original:</h2>
				<p class="des"><?php echo $row['idioma'];?></p>
			<?php } ?>		
			<?php if($row['director']<>"") { ?>
				<h2 class="sub">Director:</h2>
				<p class="des"><?php echo $row['director'];?></p>
			<?php } ?>	
			<?php if($row['ejecutivos']<>"") { ?>
				<h2 class="sub">Ejecutivos:</h2>
				<p class="des"><?php echo $row['ejecutivos'];?></p>
			<?php } ?>	
			<?php if($row['cinematografia']<>"") { ?>
				<h2 class="sub">Cinematografía:</h2>
				<p class="des"><?php echo $row['cinematografia'];?></p>
			<?php } ?>	
			<?php if($row['actores']<>"") { ?>
				<h2 class="sub">Actores:</h2>
				<p class="des"><?php echo $row['actores'];?></p>
			<?php } ?>	
			<?php if($row['plataforma']<>"") { ?>
				<h2 class="sub">Plataforma(s):</h2>
				<p class="des"><?php echo $row['plataforma'];?></p>
			<?php } ?>	
			<?php if($row['fecha']<>'0000-00-00' and $row['fecha']<>'' ) { ?>
				<h2 class="sub">Fecha de Salida:</h2>
				<p class="des"><?php echo $row['fecha'];?></p>
			<?php } ?>
			<?php if($row['genero']<>"") { ?>
				<h2 class="sub">Genero(s):</h2>
				<p class="des"><?php echo $row['genero'];?></p>
			<?php } ?>
			<?php if($row['desarrolladores']<>"") { ?>
				<h2 class="sub">Desarroladores:</h2>
				<p class="des"><?php echo $row['desarrolladores'];?></p>
			<?php } ?>
		
			<?php if($row['so']<>"" or $row['procesador']<>"" or $row['ram']<>"" or $row['graficos']<>"" or $row['direct']<>"" or $row['red']<>"" or $row['almacenamiento']<>"") { ?>
		
				<h2 class="sub">Requisitos minimos del sistema:</h2>
				<?php if($row['so']<>"") {?>
				<p class="des"><b>SO:</b> <?php echo $row['so'];?></p>
				<?php } ?>
				<?php if($row['procesador']<>"") {?>
				<p class="des"><b>Procesador:</b> <?php echo $row['procesador'];?></p>
				<?php } ?>
				<?php if($row['ram']<>"") {?>
				<p class="des"><b>Memoria RAM:</b> <?php echo $row['ram'];?></p>
				<?php } ?>
				<?php if($row['graficos']<>"") {?>
				<p class="des"><b>Tarjeta Grafica:</b> <?php echo $row['graficos'];?></p>
				<?php } ?>
				<?php if($row['direct']<>"") {?>
				<p class="des"><b>DirectX: </b><?php echo $row['direct'];?></p>
				<?php } ?>
				<?php if($row['red']<>"") {?>
				<p class="des"><b>RED:</b> <?php echo $row['red'];?></p>
				<?php } ?>
				<?php if($row['almacenamiento']<>"") {?>
				<p class="des"><b>Almacenamiento: </b><?php echo $row['almacenamiento'];?></p>
				<?php } ?>
			<?php } ?>
		</div></center>

		</div>


		</script>
	</body>
</html>