<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body class="body">
<p>
<?php
	include 'conexion.php';
	//include('iniciarSesion.php');
	//$sesion=new controlSesion();
	//$sesion->iniciarSesion();
	
	
	if(isset($_POST['registrar'])){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$cedula=$_POST['cedula'];
		$correo=$_POST['correo'];
		$contrasenia=$_POST['contrasenia'];
		
		$sql = "INSERT INTO persona(nombre, apellido, cedula, correo, contrasenia) VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$contrasenia')";
		
		if ($conn->query($sql) === TRUE) {
			echo "<script>alert('Nuevo registro creado satisfactoriamente')</script>";
			/*echo "<script>window.open('listado.php')</script>";*/
			//header("Location: ");
			
			
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		echo "$nombre.' '.$apellido.' '.$cedula.' '.$correo.' '.$contrasenia";
		
}
$conn->close();
?>
</p>
<div id="contenedor">
  <h2 align="center"> <em>Registro de Usurios</em></h2>
<hr align="center" size="10" style="color:#00F;" />
<div id="formulario">
<form action="pruebita.php" method="post">
<table width="600" height="250" border="0" align="center">
  <tr>
    <td><em>Nombre:</em></td>
    <td><input type="text" name="nombre" id="nombre" placeholder="Nombre"></td>
  </tr>
  <tr>
    <td><em>Apellido:</em></td>
    <td><input type="text" name="apellido" id="apellido" placeholder="Apellido"></td>
  </tr>
  <tr>
    <td><em>Cedula:</em></td>
    <td><input type="text" name="cedula" id="cedula" placeholder="Cédula"></td>
  </tr>
  <tr>
    <td><em>Correo:</em></td>
    <td><input type="text" name="correo" id="correo" placeholder="Correo"></td>
  </tr>
  <tr>
    <td><em>Contraseña:</em></td>
    <td><input type="text" name="contrasenia" id="contrasenia" placeholder="Contraseña"></td>
  </tr>
  <tr>
    <td><div align="center">
      <input type="submit" name="registrar" class="button" value="REGISTRAR">
    </div></td>
    <td><div align="center">
      <input type="button" name="cancelar" class="button" value="CANCELAR">
    </div></td>
  </tr>
</table>
</form>
</div>
</div>
</body>
</html>