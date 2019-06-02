<!DOCTYPE html>
<head>
<meta charset="utf-8">
</head>
<?php
session_start();
	include 'conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: index.php" );
	}
//$startSesion=new controlSesion();
//$startSesion->iniciarSesion();

$correo=$_POST["usuario"];
$contrasenia=$_POST["contrasenia"];

$sql="SELECT * FROM persona WHERE correo='$correo' AND contrasenia='$contrasenia';";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
    $_SESSION['usuario']=$row['correo'];
	$_SESSION['logeado']='true';
	echo "Bienvenido $username";
	/*echo "<script>alert('Usuarioo')</script>";*/
	echo '<script>window.location.replace("index.php")</script>';
	header("Location: menu.php");
}else {
	echo "<script>alert('Usuario no registrado.')</script>";
}
$conn->close();
?>
<body>
</body>
</html>