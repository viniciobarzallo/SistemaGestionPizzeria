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
		<a href="">Cerrar Sesión</a>
		<br/>
		<br/>
	</div>
	<div>
	<div>
	<?php
		$sqlPedido="SELECT * FROM producto,pedido WHERE ped_fk_per_id=".$idPer." and ped_fk_pro_id=id;	";
		//echo $sqlPedido;
		$res = $conn->query($sqlPedido);?>
		<table id="tabla">
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
					<td name="cel<?php echo $i?>"><label id="idpro"<?php echo $i?>><?php echo $idPro=$g['ped_id'];?></label></td>
					<td><label id="npro<?php echo $i?>" ><?php echo $nPro=$g['nombre'];?> </label></td>
					<td><label id="ppro<?php echo $i?>" ><?php echo $descPro=$g['descripcion'];?></label></td>
					<td > <label id="pre<?php echo $i?>"><?php echo $prePro=$g['precio'];?></label> </td>
					<td><img id="impro" src="./productos/<?php echo $imgpro=$g['imagen'];?>" style="width:40px;height:40px" ></td>
					<td><input id="can<?php echo $i?>" type="text" style="width:20px;height:15px" 
							onkeyup="suma(<?php echo $i ?>)"/></td>
					<td><label id="tot<?php echo $i?>" style="width:20px;height:15px"></label></td>
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
		<td><input id="tcantidad" type="text" style="width:30px;height:15px" disabled/></td>
		<td><input id="tprecio" type="text" style="width:30px;height:15px" disabled/></td>
	</tr>
	<tbody>
		</table>
	</div>
	<div>
		<a href="facturacion.php" style="width:100px;height:30px">Facturación</a>
		<h5>Costo de envio $5.00</h5>
		<br/>
		<a href="menu.php" onclick="facturar()">Ir a productos</a>
		<h1></h1>
	</div>

	<script type="text/javascript">
		function suma(id){
			var total="tot"+id;
			var idpre="pre"+id;
			//alert(idpre);
			var precio=document.getElementById(idpre).innerHTML;
			var idcan="can"+id;
			var can=document.getElementById(idcan).value;

			//alert(precio);
			document.getElementById(total).innerHTML=precio*can;
			
			var nfilas=($("#tabla tr").length)-2;
			var i=0;
			var totalcantidad=0;
			var totalprecio=0;
			
			for(i=1;i<=nfilas;i++){
				var tcid="can"+i;
				var ttid="tot"+i;
				
				try{
					var tcan=document.getElementById(tcid).value;
					var ttot=document.getElementById(ttid).innerHTML;
					totalcantidad=totalcantidad+tcan;//sumatoria final de cantidades
					totalprecio=totalprecio+ttot;//sumatoria final de precios
				}
				catch(error){
					alert(error);
				}
			}
			document.getElementById("tcantidad").value=totalcantidad;
			document.getElementById("tprecio").value=totalprecio;
		}
		function facturar(){
			var nfilas=($("#tabla tr").length)-2;
			var ncolumnas=document.getElementById("tabla").row.length);
			var i=0;
			var totalcantidad=0;
			var totalprecio=0;
			for(){
				var id = document.getElementById("idpro"+$i).value;
				var nombre = document.getElementById("npro"+$i).value;
				var descripcion = document.getElementById("ppro"+$i).value;
				var precio = document.getElementById("pre"+$i).value;
				var imagen = document.getElementById("impro"+$i).value;
				var cantidad = document.getElementById("can"+$i).value;
				var total = document.getElementById("").value;
			}
		}
	</script>
</body>
</html>