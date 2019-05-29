<?php
session_start();
	include "../conexion.php";
	if(isset($_SESSION['usuario'])){

	}else{
		header("Location: admin.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Panel de Administración</title>
<link rel="stylesheet" type="text/css" href="../css.css">
<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="../logo.PNG" id="logo" height="100" width="200">
	</header>
	<section>
	<form action="insertarProductos.php" method="post">
	<table style="width:100%">
 <caption><b>DATOS DEL PRODUCTO</b></caption>
  <tr>
    <th>Nombre:</th>
    <td width="25%"><input type="text" id="nombre" class="tabtexto" name="nombre" placeholder="Ingresar el nombre del producto"></td>
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
    <td > <input type="file" name="file"></td>
  </tr>
  <tr>
    <th >Categoria</th>
    <td> <select>
  <option value="seleccionar">Seleccionar</option>
  <option value="entradas" class="tabtexto">Entradas</option>
  <option value="pf" class="tabtexto">Platos fuertes</option>
  <option value="postres" class="tabtexto">Postres</option>
  <option value="bebidas" class="tabtexto">Bebidas</option>
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