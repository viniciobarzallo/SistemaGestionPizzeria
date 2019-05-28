<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear Nuevo Usuario</title> 
    </head>
    <body><a href="../../config/conexionBD.php"></a>
        <?php
        include '../../config/conexionBD.php';
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $telefono= $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $email = $_POST['correo'];
        $clave = md5($_POST['clave']);
     
        
        $sql = "INSERT INTO usuarios(usu_cedula,usu_nombres,usu_telefono,usu_direccion,usu_correo,usu_contrasena,rol_rol_id,sucursales_suc_id) VALUES ('$cedula','$nombre','$telefono','$direccion', '$email',MD5('$clave'),'2','1')";
        echo "<p> $sql </p>";
        
        
        if ($conn->query($sql) === TRUE) {
            echo "<p>Se ha creado los datos personales correctamemte!!!</p>";
          //  header('Location: ../../vista/admin/index.php');
        } else {
            if ($conn->errno == 1062) {
                echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
            } else {
                echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
            }
        }


        //cerrar la base de datos
        $conn->close();
        echo "<a href='../vista/registro_usuario.php'>Regresar</a>";
        ?>
    </body> 

</html>



