<?php
session_start();
	include '../conexion.php';
	if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: admin.php" );
	}
	$id = $_GET['idProducto'];
	$sql = "SELECT * FROM producto, categoria WHERE idProducto = '$id' and idCategoria=Categoria_idCategoria";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();	

    $conn->close();
		
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Votos</title>
<link rel="stylesheet" href="../css.css" media="screen">
</head>

<body>
<header><img src="../logo.PNG" id="logo" height="100" width="200"></header>
<div style="text-align: right" >
	<b>Administrador:</b> <input type="text" id= "usu" class="tabtexto" name="usu" style="width: 7%" value="<?php echo $_SESSION['usuario']; ?>" disabled /> </td>
	<br>
	<br>
	<b><a href="/..Cerrar_Sesion.php">Cerrar Sesion</a></b><a>
</div>
<form action="sqlproductose.php?idProducto=<?php echo $row['idProducto']; ?>"  method="post" >
	<table style="width:100%">
 <caption><b>DATOS DEL PRODUCTO</b></caption>
 <tr>
    <th width="15%">Código:</th>
    <td> <input type="text" id= "idProducto" class="tabtexto" name="idProducto" style="width: 98%" value="<?php echo $row['idProducto']; ?>" disabled /> </td>
  </tr>
  <tr>
    <th>Nombre:</th>
    <td width="25%"><input type="text" id="nombre" class="tabtexto" name="nombre" style="width: 98%" value="<?php echo $row['nombreProducto']; ?>" disabled> </td>
  </tr>
  <tr>
    <th>Descripcion:</th>
    <td width="25%"><input type="text" id="descripcion" class="tabtexto" name="descripcion" style="width: 98%" value="<?php echo $row['descripcion']; ?>" disabled> </td>
  </tr>
  <tr>
    <th >Precio:</th>
    <td > <input type="text" id="precio" class="tabtexto" name="precio" style="width: 98%" value="<?php echo $row['precio']; ?>" disabled></td>
  </tr>
  <tr>
    <th >Imagen</th>
    <td><input type="text" id="imagen" class="tabtexto" name="imagen" style="width: 98%" value="<?php echo $row['imagen']; ?>" disabled></td>
  </tr>
  <tr>
    <th> Categoria:</th>
    <td><input type="text" id="email" class="tabtexto" name="correo" style="width: 98%" value="<?php echo $row['catDescripcion']; ?>" disabled></td>
  </tr>
</table>
<div>
<p>¿Desea eliminar el producto?</p>
<input type="submit" value="Eliminar" class="boton" >
<a href="productos.php" style="text-decoration: none" class="boton">Cancelar </a>
</div>
</form>

<form >

</form>

</body>

</html>