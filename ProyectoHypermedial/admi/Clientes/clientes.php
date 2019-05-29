<?php
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

	$where= "";
	if(!empty($_POST)){
		$valor = $_POST['buscar'];
		if(!empty($valor)){
			$where = "WHERE apellido LIKE '$valor%'";
		}
	}
	$sql= "select * from persona  $where ORDER BY idPersona ASC";
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
	
		<div style="text-align: left">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
			<b>Buscar:</b>&nbsp;&nbsp;<input type="text" id="buscar" name="buscar" placeholder="Buscar por apellido" class="txt" style="width: 20%">
			<input type="submit"  id="bbuscar" name="bbuscar" class="botonb" value="Buscar" >
			</form>
		</div>
		<br>
		<br>
		
		<div>
		<form  method="post">
			<table>
				<thead>
					<tr>
						<th>Codigo</th> 
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cedula</th>
						<th>Correo</th>
						<th>Contraseña</th>
					</tr>
				</thead>
				
				<tbody style="color: black">
					<?php while($row = $resultado->fetch_assoc()) { ?>

					<tr>
						<td><?php echo $row["idPersona"]; ?></td>
						<td><?php echo $row["nombre"]; ?></td>
						<td><?php echo $row["apellido"]; ?></td>
						<td><?php echo $row["cedula"]; ?></td>
						<td><?php echo $row["correo"]; ?>
						<td><?php echo $row["contrasenia"]; ?>		
					</tr>
					<?php } ?>
				</tbody>
			</table>
			
	</form>
</div>
<br>
<br>
<a href="../inicioad.php" style="text-decoration:none"><button class="boton">Regresar a la pagina anterior</button></a>
</div>
	</section>
</body>
</html