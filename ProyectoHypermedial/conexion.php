<?php
//include('iniciarSesion.php');
//$sesion=new controlSesion();
//$sesion->iniciarSesion();

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="tiendaonline";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//echo "Conexion exitosa";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
</body>
</html>