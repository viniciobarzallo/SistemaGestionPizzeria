<?php
session_start();

include "conexion.php";

if (isset($_POST['ubicacion'])) {
    header("Location: ubicacion.php");
    }

elseif (isset($_POST['enviar'])) { 
			$id = $_POST['idUbicacion'];
            $barrio = $_POST['Barrio'];
            $cPrincipal = $_POST["cPrincipal"];
            $cSecundaria = $_POST["cSecundaria"];
            $referencia = $_POST["Referencia"];

		echo "id: $id";
        echo "barrio: $barrio";
        echo "cPrincipal: $cPrincipal";
        echo "calleSecundaria: $cSecundaria";
        echo "referencia: $referencia";
         

        $sql = "INSERT INTO ubicacion (idUbicacion, barrio, callePrincipal, calleSecundaria, referencia) VALUES($id, '$barrio','$cPrincipal','$cSecundaria','$referencia')";
		
	

        if ($conn->query($sql) === TRUE) {
            //echo "Dato insertado correctamente";
            header("Location: pedido.php");
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: ubicacion.php");
        }

        $conn->close();

}


elseif (isset($_POST['actualizarPedido'])) { 
        $idPedido = $_POST['idPedido'];
		$estado = $_POST['estado'];
			
		echo "idPedido: $idPedido";       
	    echo "estado: $estado";
        
        include "conexion.php";

        $sql = "UPDATE pedido SET estado= '$estado' WHERE idPedido = '$idPedido';";
		
		
		
		
		$resultado = $mysqli->query($sql);
         
        	include "conexion.php";



        if ($conn->query($sql) === TRUE) {
            //echo "Dato insertado correctamente";
            header("Location: pedido.php");
			
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: index.php");
        }

        $conn->close();
}




if(isset($_POST['ae'])){
	$id=$_REQUEST['id'];	
	$estadoValue=$_POST['estado'];
		
//Se realiza la sentecia para actualizar las datos en la BD
$sql = "UPDATE entrega SET estado ='$estadoValue'
WHERE idEntrega='$id'";
//Ejecutar la sentencia sql y verificar la ejecucion
if($conn->query($sql) === TRUE){
     echo"bn hecho";
}else {
    echo "Error de actualizacion de datos: " . $conexion->error;
}

}





elseif(isset($_POST["salir"])){
        header("Location: index.php");
    session_destroy();
}



?>
