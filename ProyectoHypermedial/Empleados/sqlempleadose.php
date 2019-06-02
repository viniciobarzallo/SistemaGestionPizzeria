<?php 
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

$cedula=$_GET['cedula'];
$sql = "DELETE empleado FROM empleado, persona WHERE cedula = '".$cedula."'";
		if($conn->query($sql)==TRUE){
			
	echo "<script>alert('Registro eliminado con éxito')</script>";
	echo "<script>window.location.replace('empleados.php')</script>";
		   } 
?>