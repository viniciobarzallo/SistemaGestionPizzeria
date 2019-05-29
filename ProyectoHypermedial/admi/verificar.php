<?php
session_start();
	include 'conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

$usu = $_POST["usuario"];
$con = $_POST["psw"];

$sql= "SELECT * FROM administrador WHERE usuario= '$usu' and contrasenia = '$con';";
$result = $conn->query($sql);
if($result->num_rows >0){
	$row = $result->fetch_assoc();
	$_SESSION['usuario'] = $row['usuario'];
	$_SESSION['logueado'] = 'true';
header("Location: inicioad.php");
}else{
	$_SESSION['logueado'] = false;
	header("Location: admin.php?sesion=false");
}
$conn->close();
?>
