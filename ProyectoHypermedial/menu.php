<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
    
    <?php
    session_start();
	include 'conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: index.php" );
	}
        
	?>
</head>
<body>

<div style="text-align: right" id="very" >
			<div align="center"><b>Usuario:</b>
			  <input type="text" id= "usu" class="tabtexto" name="usu" style="width: 12%" value="<?php echo $_SESSION['usuario']; ?>" disabled /> 
			  <br>
			  <br>
			  <b><a href="serrarSesion.php">Cerrar Sesion</a></b></div>
			<a>
		</div>
	<header>
		<img src="./imagenes/logo1.png" id="logo" align="top">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
  
	<section>
		
	<?php
        $sql ="select * from producto";
				$result = $conn->query($sql);                
                    
		while($f=mysqli_fetch_array($result)) {
		?>
			<div class="producto">
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
			</center>
		</div>
	<?php
		}
	?>
		
		

		
	</section>
	
</body>
</html>

