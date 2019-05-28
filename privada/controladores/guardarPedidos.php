<?php
    include 'conexion.php';
    $nombre = $_POST["usuario"];
    $correo = $_POST["producto"];
    $password= $_POST["cantidad"];
   $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    
        $sql2 = "Insert into usuario(usu_nombre, usu_correo, usu_password, usu_rol, foto) values ('$nombre', '$correo', '$password', '$rol', '$imagen')";
        if ($conn->query($sql2) === TRUE) {
          
            echo "<script type='text/javascript'>alert('Persona Registrada'); window.location.href='listar.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
?>