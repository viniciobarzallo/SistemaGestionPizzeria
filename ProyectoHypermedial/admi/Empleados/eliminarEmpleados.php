<?php
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}
	$id = $_GET['cedula'];
	$sql = "SELECT * FROM persona, empleado, cargo WHERE cedula = '$id' and idCargo=Cargo_idCargo" ;
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();	

    $conn->close();
		
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ELIMINAR EMPLEADOS</title>
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

<form action="sqlempleadose.php?cedula=<?php echo $row['cedula']; ?>"  method="post" >
	<table style="width:100%">
 <caption><b>DATOS EMPLEADO</b></caption>
 <tr>
    <th>Nombre:</th>
    <td width="25%"><input type="text" id="nombre" class="tabtexto" name="nombre" style="width: 98%" value="<?php echo $row['nombre']; ?>" disabled> </td>
  </tr>
  <tr>
    <th>Apellido:</th>
    <td width="25%"><input type="text" id="apellido" class="tabtexto" name="apellido" style="width: 98%" value="<?php echo $row['apellido']; ?>" disabled> </td>
  </tr>
 <tr>
    <th width="15%">Cédula:</th>
    <td> <input type="text" id= "cedula" class="tabtexto" name="cedula" style="width: 98%" value="<?php echo $row['cedula']; ?>" disabled /> </td>
  </tr>
  
  <tr>
    <th >Correo:</th>
    <td > <input type="text" id="correo" class="tabtexto" name="correo" style="width: 98%" value="<?php echo $row['correo']; ?>" disabled></td>
  </tr>
  <tr>
    <th >Contraseña</th>
    <td><input type="text" id="con" class="tabtexto" name="con" style="width: 98%" value="<?php echo $row['contrasenia']; ?>" disabled></td>
  </tr>
  <tr>
    <th> Cargo:</th>
    <td><input type="text" id="cargo" class="tabtexto" name="cargo" style="width: 98%" value="<?php echo $row['tipoCargo']; ?>" disabled></td>
  </tr>
</table>
<div>
<p>¿Desea eliminar el registro?</p>
<input type="submit" value="Eliminar" class="boton" >
<a href="empleados.php" style="text-decoration: none" class="boton">Cancelar </a>
</div>
</form>

<form >

</form>

</body>

</html>