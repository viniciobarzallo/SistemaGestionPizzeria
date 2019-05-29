<?php 
session_start();
	include 'C:\xampp\htdocs\jamn\Administrador\conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}
if (isset($_POST["codigo"])&&
    isset($_POST["nombre"])&&
    isset($_POST["descripcion"])&&
    isset($_POST["categoria"])&&
	isset($_POST["imagen"])&&
	isset($_POST["precio"])){
	
	$cedula = $_POST["codigo"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["descripcion"];
	$edad = $_POST["categoria"];
	$direccion = $_POST["imagen"];
	$correo = $_POST["precio"];
	$sql = "INSERT INTO productos (Codigo, Nombre, Descripcion, Imagen, Precio) VALUES ('$codigo', '$nombre', '$descripcion', '$imagen', '$precio')";
	if ($conn->query($sql) == TRUE) {
		echo "<script type=''> alert('Producto registrado con éxito'); </script>";
	} else {
		echo "<script type=''> alert('El producto ya existe')</script>";
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}

?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de Productos</title>
<link rel="stylesheet" href="../css.css" media="screen">
</head>

<body>

<header><img src="../logo.PNG" id="logo" height="100" width="200"></header>
<div style="text-align: right" >
	<b>Administrador:</b> <input type="text" id= "usu" class="tabtexto" name="usu" style="width: 7%" value="<?php echo $_SESSION['usuario']; ?>" disabled /> </td>
	<br>
	<br>
	<b><a href="Cerrar_Sesion.php">Cerrar Sesion</a></b><a>
</div>

<form action="insertarProductos.php" method="post">
	<table style="width:100%">
 <caption><b>DATOS DEL PRODUCTO</b></caption>
 <tr>
    <th width="15%">Codigo:</th>
    <td> <input type="text" id= "codigo" class="tabtexto" name="codigo" placeholder="Ingresar el codigo del producto" ></td>
  </tr>
  <tr>
    <th>Nombre:</th>
    <td width="25%"><input type="text" id="nombre" class="tabtexto" name="nombre" placeholder="Ingresar el nombre del producto"></td>
  </tr>
  <tr>
    <th>Descripcion:</th>
    <td width="25%"><input type="text" id="descripcion" class="tabtexto" name="descripcion" placeholder="Ingresar la descripcion del producto"></td>
  </tr>
  <tr>
    <th >Imagen:</th>
    <td > <input type="text" id="imagen" class="tabtexto" name="imagen" placeholder="Seleccionar imagen"></td>
  </tr>
  <tr>
    <th >Precio</th>
    <td><input type="text" id="precio" class="tabtexto" name="precio" placeholder="Ingresar el precio del producto"></td>
  </tr>
 
</table>
<p id="mensaje" >
</p>
<input type="submit" value="Guardar" class="boton" >
<a href="productos.php" style="text-decoration: none" class="botonc">Cancelar </a>
</form>

</body>
</html>
