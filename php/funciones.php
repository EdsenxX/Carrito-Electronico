<?php 

class funciones{

	public static function head(){
		?><head>
				<meta charset="utf-8">
				<title>Serrano Corp</title>
				<link rel="shortcut icon" href="imagenes/Gamepad.ico">
				<link rel="stylesheet" type="text/css" href="css/menu.css">
				<link rel="stylesheet" type="text/css" href="css/panel.css">
				<link rel="stylesheet" type="text/css" href="css/redes.css">
				<link rel="stylesheet" type="text/css" href="css/estilos.css">
				<script src="https://use.fontawesome.com/3370734ed6.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
			</head>
		<?php
	}


	public static function menu(){
		?>
			
		<header>
				<div class="ancho">
					<div class="logo">
						<p><a href="index.php">Serrano Corp.</a></p>
					</div>
					<nav>
						<ul>
						<li><a href="index.php"><span class="fa fa-home"></span>Inicio</a></li>
						<li><a href="videojuegos.php"><span class="fa fa-gamepad"></span>Videojuegos</a></li>
						<li><a href="peliculas.php"><span class="fa fa-film"></span>Peliculas</a></li>
						<li><a href="series.php"><span class="fa fa-book"></span>Series</a></li>
						<li><a href="carrito.php"><span class="fa fa-shopping-cart"></span>Carrito</a></li>
						<li><a href="favoritos.php"><span class="fa fa-heart"></span>Favoritos</a></li>
   							<?php
   								//$_SESSION['user']
   								if (isset($_SESSION['user'])) {

									$user=$_SESSION['user'];
									$ta=$user;
									include("conex.php");
									$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
									$sql =mysqli_query($con, "SELECT * FROM `usuarios` WHERE `usuario`='$ta' and `conectado`=1");
									$va=$sql->num_rows;
								
									if ($va<>1 ) {
							?>
						<li><a href="validar.php"><span class="fa fa-user"></span>Cerrar Secion</a></li>
   						<!--<li><a href="login.php"><span class="fa fa-user"></span>Inicia Secion</a></li>-->
						<?php }} else {?>
						<!--<li><a href="validar.php"><span class="fa fa-user"></span>Cerrar Secion</a></li>-->
						<li><a href="login.php"><span class="fa fa-user"></span>Inicia Secion</a></li>
						<?php } ?>
						<?php

							if (isset($_SESSION['user'])) {
								
								$user=$_SESSION['user'];
								$ta=$user;
								include("conex.php");
								$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
								$sql =mysqli_query($con, "SELECT * FROM `usuarios` WHERE `usuario`='$ta' and `admin`=1");
								$va=$sql->num_rows;
								
							if ($va==1 ) {?>
   						<li><a href="subir.php"><span class="fa fa-user"></span>Administrador</a></li>
						<?php }}?>
					</ul>
				</nav>
				</div>
			</header>
		<?php
	}

	public static function redes(){
		?>
			<div class="red">
				<div id="facebook"><a href="#" class="fa fa-facebook"></a></div>
				<div id="youtube"><a href="#" class="fa fa-youtube-play"></a></div>
				<div id="twitter"><a href="#" class="fa fa-twitter"></a></div>
				<div id="paypal"><a href="#" class="fa fa-paypal"></a></div>
			</div>
		<?php
	}

	public static function contenido($mos){
		?>
			<section>
	
				<div id="con">
					<?php
						$N=0;
						while ($row= $mos->fetch_assoc()) {
						$N=$N+1;		
			    	?>
				
					<a href="archivo.php?id=<?php echo $row['id']; ?>"><div class="contenedor">
						<div class="elemento">
							<div class="ports">
								<?php if($row['preorden']=="1"){
								?>
								<p class="pre">Pre-Venta</p>
								<?php
								}
								?>
								<?php if($row['oferta']=="30%" or $row['oferta']=="50%" or $row['oferta']=="75%"){
								?>
								<p class="of"><?php echo $row['oferta']; ?> de descuento</p>
								<?php
								}
								?>
								<?php if($row['imagen']<>"archivos/Videojuego/" and $row['imagen']<>"archivos/Pelicula/" and $row['imagen']<>"archivos/Serie/" and $row['imagen']<>""){?>
								<img src="<?php echo $row['imagen']; ?>" class="port">
								<?php } else{?>
								<img src="./imagenes/no.jpg" class="port">
								<?php }?>
							</div>
							<div class="medio">
								<center><p class="pad"><?php echo $row['nombre'];?></p></center>
								<center><p class="pad">$<?php echo $row['precio'];?></p></center>
								<p class="pad"><?php echo $row['url'];?></p>
							</div>
							<center><a href="./carrito.php?id=<?php  echo $row['id'];?>"><img src="imagenes/carrito.png" class="carrito"></a></center>
						</div>
					</div></a>
								<?php
									$N=$N+1;
									}	
								?>
				</div>
			

			</section>
		<?php
	}

}

?>