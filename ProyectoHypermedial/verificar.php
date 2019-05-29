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
//$startSesion=new controlSesion();
//$startSesion->iniciarSesion();

$correo=$_POST["usuario"];
$contrasenia=$_POST["contrasenia"];

$chef = "select idPersona, nombre, apellido, cedula, correo, contrasenia, tipoCargo from persona, empleado, cargo where idPersona = Persona_idPersona and Cargo_idCargo = 1 and Cargo_idCargo=idCargo";

$sql="SELECT * FROM administrador WHERE usuario='$correo' AND contrasenia='$contrasenia';";

$result = $conn->query($sql);
$repart = $conn->query($rep);
$che = $conn->query($chef);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
    $_SESSION['usuario']=$row['usuario'];
	$_SESSION['logeado']='true';
	//echo "Bienvenido $username";
	/*echo "<script>alert('Logeado');</script>";*/
	/*echo '<script>window.location.replace("inicioad.php")</script>';*/
	header("Location: inicioad.php");
	
}else if ($repart->num_rows > 0) {
	$rows = $repart->fetch_assoc();
    $_SESSION['usuario']=$rows['correo'];
	$_SESSION['logeado']='true';
	echo "Bienvenido $username";
	echo "<script>alert('Repartidor')</script>";
	/*echo '<script>window.location.replace("index.php")</script>';*/
	//header("Location: menu.php");
}else if ($che->num_rows > 0) {
	$fila = $che->fetch_assoc();
    $_SESSION['usuario']=$fila['correo'];
	$_SESSION['logeado']='true';
	echo "Bienvenido $username";
	echo "<script>alert('Chef')</script>";
}else {
	echo "<script>alert('Administrador no registrado.')</script>";
	echo '<script>window.location.replace("index.php")</script>';
}
$conn->close();
?>
<body>
</body>
</html>
