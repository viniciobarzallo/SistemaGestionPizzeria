<?php 
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

$codigo=$_GET['idProducto'];
$sql = "DELETE FROM producto WHERE idProducto = '".$codigo."'";
		if($conn->query($sql)==TRUE){
			
	echo "<script>alert('Producto eliminado con éxito')</script>";
	echo "<script>window.location.replace('productos.php')</script>";
		   } 
?>