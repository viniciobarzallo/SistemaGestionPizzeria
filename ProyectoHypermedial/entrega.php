<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
table, th, td {
    border: 1px solid black;
    align-content: center;
    align-items: center;
}
</style>

</head>

<body>
<div align=right>
    <h2 align="center"> ENTREGAS </h2>
    <h4 align="right">REPARTIDOR: 
    <?php
        session_start();
        echo $_SESSION['usuario'];
    ?></h4>
    <form method="post" action="funciones.php" id="form">  
    <INPUT type="submit" name="salir" value="Cerrar Sesion" onclick="reload()"/>
    </form>
        
</div>    
    
        <?php   
  include 'conexion.php';

$sql = "SELECT * FROM entrega";
$result = $conn->query($sql);

$row=$result->fetch_assoc();

 
?>
    
    
<form align =center method="post" action="funciones.php?idPedido=<?php echo $row['idEntrega']?>" id="formulario" name="formulario">    
    
      
    
    <table align =center>
    <tr>
        <th>NUMERO PEDIDO</th>
        <th>UBICACION</th>
        <th>ESTADO</th>
        	
    </tr>
    <?php while($row = $result->fetch_assoc()) {?>
    
   <tr align=center>
   	
      <td> <?php echo $row['idEntrega'] ?></td>
      
        <td> <a href='vistaUbicacion.php?buscar=".$row['idUbicacion']."'>Ubicacion </a> </td>
        
        
        <td><select name="estado">
        			<option value="seleccionar">--seleccionar</option>
        			<option value="ENTREGADO">ENTREGADO</option>
        			<option value="EN CURSO">EN CURSO</option>     			  </select></td>
        
     <?php }?>
     
</table>
    

<INPUT type="submit" name="ae" value="ACTUALIZAR" onclick="location=entrega.php?id=<?php echo $row['idEntrega'];?>'"/>    
      
        
</form>



</body>
</html>