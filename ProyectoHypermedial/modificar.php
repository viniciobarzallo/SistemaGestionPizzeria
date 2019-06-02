<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM pedido WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Modificar Registro</title> 
    <meta charset="UTF-8">
    <meta name="title" content="Modificar">
    <meta name="description" content="Modificar"> 
      
	  </head>
	<body>
		<div>
			<div>
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form  method="POST" action="update.php" autocomplete="off">
			
                
                <select name="estado" >
                <option value="entregado">entregado</option>
                <option value="en curso">en curso</option>
                
                </select>
                
            
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				
                
        
				<div >
					<div >
                        
						 <br><input type="button" onclick="location.href='principal.php';" value="regresar" />
						<button type="submit" >Guardar</button>
                        
                        
                        
            
					
					</div>
				</div>
			</form>
		</div>
	</body>
</html>