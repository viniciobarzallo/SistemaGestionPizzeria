<?php
	session_start();
	include 'conexion.php';
	if(isset($_SESSION['usuario'])){
		$correo=$_SESSION['usuario'];
		///echo $correo;

    	$sqlIdCli="SELECT * FROM PERSONA WHERE correo= '".$_SESSION['usuario']."' ;";

    	//echo $sqlIdCli;
    	$result = $conn->query($sqlIdCli);
    	$idPer='';
    	while ($f=mysqli_fetch_array($result)) {
        	$idPer= $f['idPersona'];
		}
	}
?>
<!DOCTYPE html>
<html lang='es'>
<head>
	<title>Lista de pedidos</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	
</head>
<body>
	<div>
	<h2>Usuario:<?php echo $correo?></h2>
	<br>
	<div>
	<div>
	<?php
		$sqlPedido="SELECT * FROM producto,pedido WHERE ped_fk_per_id=".$idPer." and ped_fk_pro_id=id;	";
		//echo $sqlPedido;
		$res = $conn->query($sqlPedido);?>
		<table>
				<caption>Lista de productos solicitados</caption>
				<tbody>
				<tr>
					<td><label>Id</label></td>
					<td><label>Nombre</label></td>
					<td><label>Descricion</label></td>
					<td><label>Precio</label></td>
					<td><label>Imagen</label></td>
					<td><label>Cantidad</label></td>
					<td><label>Total</label></td>
					<td><label>Acción</label></td>
				</tr>
				<?php
				$i=0;
				while($g=mysqli_fetch_array($res)){
						$i=$i+1;
				?>
					
				<tr>
					<td name="cel"<?php echo $i?>><?php echo $idPro=$g['ped_id'];?></td>
					<td><?php echo $nPro=$g['nombre'];?></td>
					<td><?php echo $descPro=$g['descripcion'];?></td>
					<td id="pre"<?php echo $i?>>$<?php echo $prePro=$g['precio'];?></td>
					<td><img src="./productos/<?php echo $imgpro=$g['imagen'];?>" style="width:40px;height:40px" ></td>
					<td><input type="text" style="width:20px;height:15px" onkeyup="suma(<?php echo $i ?>)"></td>
					<td><label id="tot"+<?php echo $i?> style="width:20px;height:15px"></label></td>
					<td><a href="./eliminarPro.php?id=<?php echo $g['ped_id'];?>">
						<img src="./imagenes/eliminarLista.jpg" alt="" style="width:40px;height:30px/"></a></td>
				</tr>
				<?php
				}
	?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><label>Total</label></td>
		<td><input type="text" style="width:20px;height:15px" disabled/></td>
		<td><input type="text" style="width:20px;height:15px" disabled/></td>
	</tr>
	<tbody>
		</table>
		<a href="">Facturar</a>
		<br/>
		<br/>
		<a href="menu.php">Ir a productos</a>
		<h1></h1>
	</div>

	<script type="text/javascript">
		function suma(id){
			var id1='"tot'+id+'"';
			alert(id1);
			document.getElementById(id1).innerHTML="10";
		}
	</script>
</body>
</html>