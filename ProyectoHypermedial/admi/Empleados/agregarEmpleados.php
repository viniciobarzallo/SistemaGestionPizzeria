<?php 
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}
if (isset($_POST["nombre"])&&
    isset($_POST["apellido"])&&
    isset($_POST["cedula"])&&
	isset($_POST["correo"])&&
	isset($_POST["contrasenia"])&&
	isset($_POST["tipoCargo"])){
	
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$correo = $_POST["correo"];
	$contrasenia = $_POST["contrasenia"];
	$correo = $_POST["tipoCargo"];
	$sql = "INSERT INTO persona (nombre, apellido, cedula correo, contrasenia ) VALUES ('$nombre', '$apellido', '$cedula', '$correo','$contrasenia')";
	if ($conn->query($sql) == TRUE) {
		echo "<script type=''> alert('Registro guardado con éxito'); </script>";
	} else {
		echo "<script type=''> alert('El registro ya existe')</script>";
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}

?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EMPLEADOS</title>
<link rel="stylesheet" href="../css.css" media="screen">
</head>

<body>

<header><img src="../logo.PNG" id="logo" height="100" width="200"></header>
<div style="text-align: right" >
	<b>Administrador:</b> <input type="text" id= "usu" class="tabtexto" name="usu" style="width: 7%" value="<?php echo $_SESSION['usuario']; ?>" disabled /> </td>
	<br>
	<br>
	<b><a href="../Cerrar_Sesion.php">Cerrar Sesion</a></b><a>
</div>

<form action="agregarEmpleados.php" method="post" >
	<table style="width:100%">
 <caption><b>DATOS EMPLEADO</b></caption>
 <tr>
    <th>Nombre:</th>
    <td width="25%"><input type="text" id="nombre" class="tabtexto" name="nombre" placeholder="Ingresar el nombre" > </td>
  </tr>
  <tr>
    <th>Apellido:</th>
    <td width="25%"><input type="text" id="apellido" class="tabtexto" name="apellido" placeholder="Ingresar el apellido" ></td>
  </tr>
 <tr>
    <th width="15%">Cédula:</th>
    <td> <input type="text" id= "cedula" class="tabtexto" name="cedula" placeholder="Ingresar el número de cédula"  ></td>
  </tr>
  <tr>
    <th> Correo:</th>
    <td><input type="text" id="email" class="tabtexto" name="correo" placeholder="Ingresar correo electrónico" ></td>
  </tr>
  <tr>
    <th >Contraseña:</th>
    <td > <input type="text" id="edad" class="tabtexto" name="edad" placeholder="Ingresar contraseña" ></td>
  </tr>
  <tr>
    <th >Cargo</th>
    <td><select style="width: 400px" class="tabtexto">
  <option value="seleccionar">Seleccionar</option>
  <option value="chef" class="tabtexto">Chef</option>
  <option value="rep" class="tabtexto">Repartidor</option>
  <option value="rcp" class="tabtexto">Recepcionista</option>
</select></td>
  </tr>
</table>
<p id="mensaje" >
</p>
<input type="submit" value="Guardar" class="boton" >
<a href="empleados.php" style="text-decoration: none" class="botonc">Cancelar </a>
</form>

</body>
</html>
