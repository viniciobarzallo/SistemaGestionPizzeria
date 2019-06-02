<?php
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

$codigo = $_GET["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$imagen = $_POST["imagen"];
$categoria = $_POST["Categoria_idCategoria"];
		
$sql = "UPDATE producto SET nombre='$nombre', descripcion= '$descripcion', precio= '$precio', imagen='$imagen', Categoria_idCategoria= '$categoria'  WHERE id='$codigo'";

if($conn->query($sql)==TRUE){
			
	echo "<script>alert('Producto actualizado con éxito')</script>";
	echo "<script>window.location.replace('producto.php')</script>";
}
?> 