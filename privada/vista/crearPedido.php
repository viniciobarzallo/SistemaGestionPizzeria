<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <title>Nuevo Pedido</title>
        <link rel="stylesheet" type="text/css" href="index.css" media="screen">
    </head>
    <body>
  
        
        <h1> Crear Pedido</h1>
        <form id="formulario" name="formulario" method="post" action="guardarPedidos.php" enctype="multipart/form-data">
        <label> Usuario: </label>
        <input type="text" name="usuario" id="usuario" value="">(*)<br>
        <label> Producto: </label>
        <input type="text" name="producto" id="producto" value="">(*)<br>
        <label> Cantidad de Producto: </label>
        <input type="text" name="cantidad" id="cantidad" value="">(*)<br>
        <input type="submit" id="enviar" value="Crear" name="enviar">
        <input type="button" id="cancelar" value="Cancelar">
        
        <!--<input type="submit" id="modificar" value="modificar" name="modificar">-->
        </form>
            
          <?php
    session_start();
    include 'conexion.php';
if(!isset($_SESSION['logueado'])||$_SESSION['logueado'] != "true"){
	echo "<script>alert('No puede para Ingresar');</script>";
	header("Location: index.php");
}
        
        
        ?>
    </body>
</html>