<!DOCTYPE html>
<head>
<meta charset="utf-8">
</head>
<?php
session_start();
	include 'conexion.php';
//	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	//} else {
		//header( "Location: admin.php" );
	//}
$correo=$_POST["usuario"];
$contrasenia=$_POST["contrasenia"];

$sql = "select idPersona, nombre, apellido, cedula, correo, contrasenia, tipoCargo from persona, empleado, cargo where idPersona = Persona_idPersona and Cargo_idCargo = 2 and Cargo_idCargo=idCargo";

$result= $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
    $_SESSION['usuario']=$row['correo'];
	$_SESSION['logeado']='true';
	/*echo '<script>window.location.replace("inicioad.php")</script>';*/
	header("Location: entrega.php");
	
	echo "<script>alert('Repartidor')</script>";
}else {
	echo "<script>alert('Repartidor no registrado.')</script>";
	/*echo '<script>window.location.replace("index.php")</script>';*/
}
$conn->close();
?>
<body>
</body>
</html>

</html>