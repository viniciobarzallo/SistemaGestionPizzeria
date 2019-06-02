<?php
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

	$sql= "select idPersona, nombre, apellido, cedula, correo, contrasenia, tipoCargo from persona, empleado, cargo where idPersona = Persona_idPersona and idcargo= Cargo_idCargo  ORDER BY idPersona ASC";
	$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Productos</title>
<link rel="stylesheet" href="../css.css" media="screen">
</head>
<body>
	<header>
		<img src="../logo.PNG" id="logo" height="100" width="200">
	</header>
	<section>
		<div style="text-align: right" >
			<b>Administrador:</b><input type="text" id= "usu" class="tabtexto" name="usu" style="width: 7%" value="<?php echo $_SESSION['usuario']; ?>" disabled /> 
			<br>
			<br>
			<b><a href="../Cerrar_Sesion.php">Cerrar Sesion</a></b><a>
		</div>
		<br>
		<br>
		
		<div >
		<form  action="borrar.php" method="post">
			<table>
				<thead>
					<tr>
						<th>Codigo</th> 
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cedula</th>
						<th>Correo</th>
						<th>Contraseña</th>
						<th>Cargo</th>
						<th>Eliminar</th>
						<th>Modificar</th>
						<th>Seleccionar</th>
					</tr>
				</thead>
				
				<tbody style="color: black">
					<?php while($row = $resultado->fetch_assoc()) { ?>

					<tr>
						<td><?php echo $row["idPersona"]; ?></td>
						<td><?php echo $row["nombre"]; ?></td>
						<td><?php echo $row["apellido"]; ?></td>
						<td><?php echo $row["cedula"]; ?></td>
						<td><?php echo $row["correo"]; ?></td>
						<td><?php echo $row["contrasenia"];?></td>			
						<td><?php echo $row["tipoCargo"]; ?></td>				
						<td><a href="eliminarEmpleados.php?cedula=<?php echo $row['cedula']; ?>" style="text-decoration: none"><input type="button" class="boton" value="Eliminar"></a></td>
						<td><a href="modificarEmpleados.php?cedula=<?php echo $row['cedula']; ?>" style="text-decoration: none"><input type="button" class="boton" value="Modificar"></a></td>	
						<td><input type="checkbox" name="eliminar[]" value="<?php echo $row["cedula"]; ?>"/></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<div>
		<input type="submit" name="borrar" value="Borrado Multiple" class="boton">
	</div>
	</form>
</div>

<a href="agregarEmpleados.php" style="text-decoration:none"><button class="boton">Insertar Empleados</button></a>
<br>
<br>
<br>
<a href="../inicioad.php" style="text-decoration:none"><button class="boton">Regresar a la pagina anterior</button></a>
</div>
	</section>
</body>
</html