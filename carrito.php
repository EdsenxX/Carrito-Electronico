<?php 
	
	session_start();
	include 'conex.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$url="";
						$id=$_GET['id'];
						include ("conex.php");
						$consulta="SELECT * FROM archivos WHERE id='$id'";
  						$query=mysqli_query($con, $consulta); 
 		 				while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
							$url=$f['url'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Url'=>$url,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}




	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$url="";
			$id=$_GET['id'];
			include ("conex.php");
			$consulta="SELECT * FROM archivos WHERE id='$id'";
  			$query=mysqli_query($con, $consulta); 
 		 	while ($f=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
				$url=$f['url'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Url'=>$url,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
	
	include("php/funciones.php");
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

		<section>
		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>

				<a href="archivo.php?id=<?php echo $datos[$i]['Id']; ?>"><div class="contenedor">
						<div class="elemento">
							<?php if($datos[$i]['Imagen']<>"archivos/Videojuego/" and $datos[$i]['Imagen']<>"archivos/Pelicula/" and $datos[$i]['Imagen']<>"archivos/Serie/" and $datos[$i]['Imagen']<>""){?>
							<img src="<?php echo $datos[$i]['Imagen']; ?>" class="port">
							<?php } else{?>
							<img src="./imagenes/no.jpg" class="port">
							<?php }?>
							<center><p><?php echo $datos[$i]['Nombre'];?></p></center>
							<center><p>$<?php echo $datos[$i]['Precio'];?></p></center>
							<center><p>Cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"></center>
							<p><?php echo $datos[$i]['Url'];?></p>
						</div>
					</div></a>


			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
			$pagina='index.php';
			?>
			<div class="total">
				<?php
				echo '<br><br><br><center><h2>Total: $'.$total.'</h2></center>';
				echo '<center><a href='.$pagina.'>Ver catalogo</a></center>';
				?>
			</div>
			<?php
				
			}else{
				$pagina='index.php';
				echo '<br><br><br><br><br><center><h2>No has añadido ningun producto</h2></center>';
				echo '<center><a href='.$pagina.'>Ver catalogo</a></center>';
			}
		
		?>
		
		

		
	</section>

	</body>
</html>