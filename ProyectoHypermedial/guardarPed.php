<!DOCTYPE html>
<html>
    <head>
        <title>Pedidos</title>
    </head>
    <body>
    <?php
    session_start();
    include 'conexion.php';
    if (isset($_SESSION['usuario'])){
		//echo $_SESSION['usuario'];
	} else {
		header( "Location: index.php" );
    }
    $id=$_GET['id'];
    $sqlIdCli="SELECT * FROM PERSONA WHERE correo= '".$_SESSION['usuario']."' ;";

    //echo $sqlIdCli;
    $result = $conn->query($sqlIdCli);
    $idPer='';
    while ($f=mysqli_fetch_array($result)) {
        $idPer= $f['idPersona'];
    }
    
    $sql="INSERT INTO  PEDIDO VALUES(0,".$idPer.",".$id.");";
    //echo $sql;
    if($conn->query($sql)===TRUE){
        ?>
        <script> alert("Producto agregado a pedidos")
            window.location.href='./menu.php';
        </script>
        <?php
    }else{
        echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
    }
    $conn->close();

?>
  </body>
</html>