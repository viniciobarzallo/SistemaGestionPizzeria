<?php
    session_start();
    include 'conexion.php';
    if(isset($_SESSION['usuario'])){
		$correo=$_SESSION['usuario'];
		///echo $correo;

        $sqlIdCli="SELECT * FROM PERSONA WHERE correo= '".$_SESSION['usuario']."' ;";

        $result = $conn->query($sqlIdCli);
    	$idPer='';
    	while ($f=mysqli_fetch_array($result)) {
        	$idPer= $f['idPersona'];
        }
        echo $idPer;

        $sqla="SELECT AUTO_INCREMENT 
        FROM INFORMATION_SCHEMA.TABLES
        WHERE TABLE_NAME='factura'
        AND TABLE_SCHEMA=DATABASE();";

        //$sqla="SELECT * FROM pedido";
        $res = $conn->query($sqla);
        while($g=mysqli_fetch_array($res))
        {
            $auto=$g['AUTO_INCREMENT'];
        }
        
        date_default_timezone_set('America/Guayaquil');
        $fecha=strftime( "%Y/%m/%d   %H:%M", time() );
        echo $fecha;
    	//$result = $conn->query($sqlIdCli);
    	//$idPer='';
    	//while ($f=mysqli_fetch_array($result)) {
        //	$idPer= $f['idPersona'];
        //}
	}
?>