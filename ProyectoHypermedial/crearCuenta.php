<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="css/estilosReg.css" rel="stylesheet" type="text/css">
<style type="text/css">
#message {
	position: absolute;
	width: 140px;
	height: 115px;
	z-index: 2;
	background-color: #FFFFFF;
}
</style>
<script src="validacionFormulario.js"></script>
</head>
<body class="body">
<p>
<?php
	include 'conexion.php';
	//include('iniciarSesion.php');
	//$sesion=new controlSesion();
	//$sesion->iniciarSesion();
		if (isset($_POST["nombre"])&&
		isset($_POST["apellido"])&&
		isset($_POST["cedula"])&&
		isset($_POST["correo"])&&
		isset($_POST["pass"])){ 
	
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$cedula=$_POST['cedula'];
		$correo=$_POST['correo'];
		$contrasenia=$_POST['pass'];
		
		$sql = "INSERT INTO persona(nombre, apellido, cedula, correo, contrasenia) VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$contrasenia')";
		if ($conn->query($sql) == TRUE) {
		echo "<script type=''> alert('Registro guardado con éxito'); </script>";
	} else {
		echo "<script type=''> alert('El registro ya existe')</script>";
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>

</p>
<div id="contenedor">
	
  <h1 align="center"> <em>Registro de Usuarios</em></h1>
<hr align="center" size="10" style="color:#00F;" />
<div id="formulario">
<form action="crearCuenta.php" method="post" onSubmit="return validarCamposObligatorios(this)">
<table width="600" height="250" border="0" align="center">
  <tr>
    <td><em>Nombre:</em></td>
    <td><input type="text" name="nombre" id="nombre" placeholder="Nombre" onBlur="validarLetrasn()"></td>
  </tr>
  <tr>
    <td><em>Apellido:</em></td>
    <td><input type="text" name="apellido" id="apellido" placeholder="Apellido" onBlur="validarLetrasa()"></td>
  </tr>
  <tr>
    <td><em>Cedula:</em></td>
    <td><input type="text" name="cedula" id="cedula" placeholder="Cédula" onBlur="validarCedula()"></td>
  </tr>
  <tr>
    <td><em>Correo:</em></td>
    <td><input type="text" name="correo" id="correo" placeholder="Correo" onBlur="validarCorreo()"></td>
  </tr>
  <tr>
    <td><em>Contraseña:</em></td>
    <td><input type="text" name="pass" id="pass" placeholder="Contraseña" onBlur="validarContra()"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="registrar" class="button" value="REGISTRAR">
    </div></td>
  </tr>
</table>
</form>
</div>
<div id="message">
<?php 
$mensaje;	
?>
</div>
</div>
</body>
</html>