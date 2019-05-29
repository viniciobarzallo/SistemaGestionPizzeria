<?php
	
	require 'conexion.php';

	$id = $_POST['id'];
	$estado = $_POST['estado'];
	$sql = "UPDATE pedido SET estado='$estado' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Actualizar Registro</title> 
    <meta charset="UTF-8">
    <meta name="title" content="Actualizar">
    <meta name="description" content="Actualizar"> 
      
	  </head>
	
	<body>
		<div>
			<div>
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				 <br><input type="button" onclick="location.href='pedido.php';" value="regresar" />
				
				</div>
			</div>
		</div>
	</body>
</html>
