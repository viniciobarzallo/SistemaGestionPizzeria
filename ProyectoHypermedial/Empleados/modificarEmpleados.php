<?php 
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}
	$id = $_GET['cedula'];
	$sql = "SELECT * FROM persona WHERE cedula = '$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
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

<form action="sqlempleadosm.php?cedula=<?php echo $row['cedula']; ?>"  method="post" >
	<table style="width:100%">
 <caption><b>DATOS EMPLEADO</b></caption>
 <tr>
    <th>Nombre:</th>
    <td width="25%"><input type="text" id="nombre" class="tabtexto" name="nombre" placeholder="Ingresar el nombre" value="<?php echo $row['nombre']; ?>" > </td>
  </tr>
  <tr>
    <th>Apellido:</th>
    <td width="25%"><input type="text" id="apellido" class="tabtexto" name="apellido" placeholder="Ingresar el apellido" value="<?php echo $row['apellido']; ?>"></td>
  </tr>
 <tr>
    <th width="15%">Cédula:</th>
    <td> <input type="text" id= "cedula" class="tabtexto" name="cedula" placeholder="Ingresar el número de cédula" value="<?php echo $row['cedula']; ?>" ></td>
  </tr>
  <tr>
    <th> Correo:</th>
    <td><input type="text" id="email" class="tabtexto" name="correo" placeholder="Ingresar correo electrónico" value="<?php echo $row['correo']; ?>"></td>
  </tr>
  <tr>
    <th >Contraseña:</th>
    <td > <input type="text" id="contrasenia" class="tabtexto" name="contrasenia" placeholder="Ingresar contraseña" value="<?php echo $row['contrasenia']; ?>"></td>
  </tr>
  <tr>
    <th >Cargo</th>
    <td><select style="width: 400px" class="tabtexto">
  <option value="seleccionar" alue="<?php echo $row['tipoCargo']; ?>">Seleccionar</option>
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