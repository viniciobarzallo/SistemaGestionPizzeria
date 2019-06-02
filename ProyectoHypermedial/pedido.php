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

<body background="img/fondo.jpg">
<div align=right>
    <h2 align="center"> PEDIDOS</h2>
    <h4 align="right">CHEF: 
    <?php
        session_start();
		include 'conexion.php';
        echo $_SESSION['usuario'];
    ?></h4>
    <form method="post" action="funciones.php" id="form">  
    <INPUT type="submit" name="salir" value="Cerrar Sesion" onclick="reload()"/>
    </form>
        
</div>    
    
    
    
<form align =center method="post" action="detalles.php" id="formulario" name="formulario">    
    
   
   
    <?php
    
    ?>
    

    
<?php 


$sql = "SELECT * FROM pedido";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table align =center>
    <tr>
        <th>NUMERO PEDIDO</th>
        <th>DETALLE</th>
        <th>ESTADO</th>
        	
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr align=center>";
        echo "<td>";echo $row['idPedido'];echo '</td>';
        
        echo "<td> <a href='detalles.php?buscar=".$row['iddetallefactura']."'> <button type='button'>Detalle </a> </td>";
        

        echo '<td><select name="estado">
        			<option value="seleccionar">--seleccionar</option>
        			<option value="preparacion">PREPARACION</option>
        			<option value="listo">LISTO</option>
     			</select></td>';
    }
    echo "</table>";
} else {
    echo "0 results";
}
        
  
 
?>
       
        
</form>

<INPUT type="submit" name="actualizarPedido" value="ACTUALIZAR"/>



</body>
</html>