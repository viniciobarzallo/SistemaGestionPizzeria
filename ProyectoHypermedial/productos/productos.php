<?php
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}

	$sql = "SELECT id, nombre, imagen,descripcion, precio,catDescripcion  FROM producto,categoria WHERE Categoria_idCategoria=idCategoria order by id ASC";
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
			<b><a href="../serrarSesion.php">Cerrar Sesion</a></b><a>
		</div>
		<br>
		<br>
		
		<div >
		<form action="borrar.php"  method="post">
			<table>
				<thead>
					<tr>
						<th>Codigo</th> 
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Precio</th>
						<th>Imagen</th>
						<th>Categoria</th>
						<th>Eliminar</th>
						<th>Modificar</th>
						<th>Seleccionar</th>
					</tr>
				</thead>
				
				<tbody style="color: black">
					<?php while($row = $resultado->fetch_assoc()) { ?>

					<tr>
						<td><?php echo $row["id"]; ?></td>
						<td><?php echo $row["nombre"]; ?></td>
						<td><?php echo $row["descripcion"]; ?></td>
						<td><?php echo $row["precio"]; ?></td>
						<td><?php echo $row["imagen"]; ?><div>
   <img src="Categorias/Postres/<?php echo $ruta_img; ?>" alt="" />
</div></td>
						<td><?php echo $row["catDescripcion"]; ?></td>						
						<td><a href="eliminarProductos.php?id=<?php echo $row['id']; ?>" style="text-decoration: none"><input type="button" class="boton" value="Eliminar"></a></td>
						<td><a href="modificarProductos.php?id=<?php echo $row['id']; ?>" style="text-decoration: none"><input type="button" class="boton" value="Modificar"></a></td>	
						<td><input type="checkbox" name="eliminar[]" value="<?php echo $row["Codigo"]; ?>"/></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<div>
		<input type="submit" name="borrar" value="Borrado Multiple" class="boton">
	</div>
	</form>
</div>

<a href="agregarProductos.php" style="text-decoration:none"><button class="boton">Insertar Producto</button></a>
<br>
<br>
<a href="../inicioad.php" style="text-decoration:none"><button class="boton">Regresar a la pagina anterior</button></a>
</div>
	</section>
</body>
</html