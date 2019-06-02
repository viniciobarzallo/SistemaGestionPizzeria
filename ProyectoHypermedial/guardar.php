<?php
	
	require 'conexion.php';
	
    $barrio = $_POST["barrio"];
    $cPrincipal = $_POST["callePrincipal"];
    $cSecundaria = $_POST["calleSecundaria"];
    $referencia = $_POST["referencia"];


    
    $sql = "INSERT INTO ubicacion VALUES('$barrio','$cPrincipa','$cSecundaria','$referencia')";
    $resultado = $mysqli->query($sql);
    
	
?>

<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Guardar Registro</title> 
<meta charset="UTF-8">
    <meta name="title" content="Guardar">
    <meta name="description" content="Guardar"> 
      
	</head>
	
	<body>
		<div>
			<div>
				<div style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<input type="button" onclick="location.href='principal.php';" value="Regresar" />
					
				</div>
			</div>
		</div>
	</body>
</html>
