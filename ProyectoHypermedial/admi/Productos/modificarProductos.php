<?php
	session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}
	$id = $_GET['idProducto'];
	$sql = "SELECT * FROM producto WHERE idProducto = '$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modficar Productos</title>
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
<form action="sqlproductosm.php?idProducto=<?php echo $row['idProducto']; ?>"  method="post" i>
	<table style="width:100%">
 <caption><b>DATOS DEL PRODUCTO</b></caption>
 <tr>
    <th width="15%">Código:</th>
    <td> <input type="text" id= "idProducto" class="tabtexto" name="idProducto" style="width: 98%" value="<?php echo $row['idProducto']; ?>" disabled /> </td>
  </tr>
  <tr>
    <th>Nombre:</th>
    <td width="25%"><input type="text" id="nombre" class="tabtexto" name="nombre" placeholder="Ingresar el nombre del producto" value="<?php echo $row['nombreProducto']; ?>"></td>
  </tr>
  <tr>
    <th>Descripcion:</th>
    <td width="25%"><input type="text" id="descripcion" class="tabtexto" name="descripcion" placeholder="Ingresar la descripcion del producto" value="<?php echo $row['descripcion']; ?>"></td>
  </tr>
  <tr>
    <th >Precio</th>
    <td><input type="text" id="precio" class="tabtexto" name="precio" placeholder="Ingresar el precio del producto" value="<?php echo $row['precio']; ?>"></td>
  </tr>
  <tr>
    <th >Imagen:</th>
    <td > <input type="file" name="imagen" value="<?php echo $row['imagen']; ?>"></td>
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

</body>
</html>
