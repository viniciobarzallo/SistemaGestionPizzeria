<!DOCTYPE html>
<html>
<body>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_pizza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
//echo "Conexión exitosa";

?> 

</body>
</html> 

