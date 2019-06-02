<?php
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

$checkbox = $_POST['eliminar'];
//El constructor FOREACH funciona sobre arrays y objetos
foreach ($checkbox as $id) {   
	$sql = "DELETE producto FROM producto, categoria WHERE idProducto = '".id."'";
	$resultado = $conn->query($sql);
	
	if($resultado){ 
		echo "<script>alert('Registro eliminado con éxito')</script>";
		echo "<script>window.location.replace('productos.php')</script>";
	} else{
		echo "<script>alert('No se a seleccionado nungún registro')</script>";
	}
				
    
}
?>
?>