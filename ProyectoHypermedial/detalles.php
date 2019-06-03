<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./imagenes/logo1.png" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
	<?php
		include 'conexion.php';
		$id=$_GET['id'];
		 $sql = "SELECT `nombre`,`imagen`,`precio` FROM `producto` WHERE id= ".$id." ;";
		 
       $result = $conn->query($sql);
		while ($f=mysqli_fetch_array($result)) {
		?>
			
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<span>Precio: <?php echo $f['precio'];?></span><br>
				
				<a href="./guardarPed.php?id=<?php  echo $id;?>">Agregar a pedido</a>
			</center>
		
	<?php
		}
	?>
		
		

<?php
		
        

		