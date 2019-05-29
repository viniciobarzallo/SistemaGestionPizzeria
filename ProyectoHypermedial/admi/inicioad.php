<?php
session_start();
	include 'conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio Administrador</title>
<link rel="stylesheet" href="css.css" media="screen">
</head>
<body>
	<header>
		<img src="logo.png" id="logo" height="200" width="300">
	</header>
	
	<div style="text-align: right" >
		<b>Administrador:</b><input type="text" id= "usu" class="txt" name="usu" style="width: 7%" value="<?php echo $_SESSION['usuario']; ?>" disabled /> 
		<br>
		<br>
		<b><a href="Cerrar_Sesion.php">Cerrar Sesion</a></b><a>
	</div>
	
	<div>
	<a type="button" class="botona" href="Productos/productos.php" ><b>PRODUCTOS</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a type="button" class="botona" href="Empleados/empleados.php"><b>EMPLEADOS</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a type="button" class="botona" href="Clientes/clientes.php"><b>CLIENTES</b></a> 
	</div>
</body>
</html>