<?php
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula= $_POST["cedula"];
$correo= $_POST["correo"];
$contrasenia = $_POST["contrasenia"];
		
$sql = "UPDATE personas SET nombre='$nombre', apellido= '$apellido', cedula= '$cedula' correo= '$correo', contrasenia='$contrasenia' WHERE cedula='$cedula'";

if($conn->query($sql)==TRUE){
			
	echo "<script>alert('Empleado actualizado con éxito')</script>";
	echo "<script>window.location.replace('empleados.php')</script>";
}
?> 