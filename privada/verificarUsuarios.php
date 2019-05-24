<?php
session_start();
include "conexion.php";
$usuario = $_POST["correo"];
$contrasenia=$_POST["contrasenia"];
$sql="SELECT * FROM usuario where usu_correo='$usuario' and usu_password='$contrasenia' and usu_rol='admin'";
$sql1="SELECT * FROM usuario where usu_correo='$usuario' and usu_password='$contrasenia' and usu_rol='user'";

$result = $conn->query($sql);
$result1 = $conn->query($sql1);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["usuario"] = $row["usu_nombre"];
    $_SESSION["cor"] = $row["usu_correo"];
    $_SESSION["logueado"] = "true";
    header("location: listar.php");
 } elseif ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $_SESSION["usuario"] = $row1["usu_nombre"];
        $_SESSION["cor"] = $row1["usu_correo"];
    $_SESSION["logueado"] = "true";
    header("location: correo.php");
} else {
        $_SESSION["logueado"] = "false";
        echo "<script type='text/javascript'>alert('Inserte bien su Usuario y Contrasenia'); window.location.href='index.php';</script>";
                    
}
$conn->close();
?>

