<!DOCTYPE html>
<html>
<body>

 <?php
$servername = "localhost";
$username = "angel";
$password = "root";
$dbname = "tiendaonline";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
//echo "Conexión exitosa";

?> 

</body>
</html> 

