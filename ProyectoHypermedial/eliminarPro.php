<?php
    session_start();
    include 'conexion.php';
    if(isset($_SESSION['usuario'])){
		$correo=$_SESSION['usuario'];
        //echo $correo;
        $idPed=$_GET['id'];

        echo $idPed;

        $sqlIdCli="DELETE  FROM PEDIDO WHERE ped_id=".$idPed.";";
        
    	//echo $sqlIdCli;
    	$result = $conn->query($sqlIdCli);
    	if($result==true){
            ?>
            <script> alert("Se ha eliminado correctamente")
            window.location.href='./carritodecompras.php';
            </script>
            <?php
            
        }
    }
?>