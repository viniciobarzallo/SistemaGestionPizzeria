<?php
session_start();
	include "../conexion.php";
	if(isset($_SESSION['usuario'])){

	}else{
		header("Location: admin.php");
	}
if (isset($_POST["nombreProducto"])&&
    isset($_POST["descripcion"])&&
    isset($_POST["precio"])&&
    isset($_POST["imagen"])&&
	isset($_POST["Categoria_idCategoria"])){
	
	$nombre = $_POST["nombreProducto"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	$imagen = $_POST["imagen"];
	$categoria = $_POST["Categoria_idCategoria"];
	$sql = "INSERT INTO producto (nombreProducto, descripcion, precio, imagen, Categoria_idCategoria) VALUES ('$nombre', '$descripcion', '$precio', '$imagen', '$categoria')";
	if ($conn->query($sql) == TRUE) {
		echo "<script type=''> alert('Producto guardado con éxito'); </script>";
	} else {
		echo "<script type=''> alert('El producto ya existe')</script>";
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Agregar productos</title>
<link rel="stylesheet" type="text/css" href="../css.css">
</head>
<body>
	<header>
		<img src="../logo.PNG" id="logo" height="100" width="200">
	</header>
	<div style="text-align: right" >
	<b>Administrador:</b> <input type="text" id= "usu" class="tabtexto" name="usu" style="width: 7%" value="<?php echo $_SESSION['usuario']; ?>" disabled /> </td>
	<br>
	<br>
	<b><a href="../Cerrar_Sesion.php">Cerrar Sesion</a></b><a>
</div>
	<section>
	<form action="agregarProductos.php" method="post">
	<table style="width:100%">
 <caption><b>DATOS DEL PRODUCTO</b></caption>
  <tr>
    <th>Nombre:</th>
    <td width="25%"><input type="text" id="nombreProducto" class="tabtexto" name="nombreProducto" placeholder="Ingresar el nombre del producto"></td>
  </tr>
  <tr>
    <th>Descripcion:</th>
    <td width="25%"><input type="text" id="descripcion" class="tabtexto" name="descripcion" placeholder="Ingresar la descripcion del producto"></td>
  </tr>
  <tr>
    <th >Precio</th>
    <td><input type="text" id="precio" class="tabtexto" name="precio" placeholder="Ingresar el precio del producto"></td>
  </tr>
  <tr>
    <th >Imagen:</th>
    <td > <input type="file" name="imagen"></td>
  </tr>
  <tr>
    <th >Categoria</th>
    <td> <select name="Categoria_idCategoria">
  <option>Seleccionar</option>
  <option value="4" class="tabtexto">Entradas</option>
  <option value="3" class="tabtexto">Platos fuertes</option>
  <option value="1" class="tabtexto">Postres</option>
  <option value="2" class="tabtexto">Bebidas</option>
</select> </td>
  </tr>
 
</table>
<p id="mensaje" >
</p>
<input type="submit" value="Guardar" class="boton" >
<a href="productos.php" style="text-decoration: none" class="botonc">Cancelar </a>
</form>
	</section>
</body>
</html>