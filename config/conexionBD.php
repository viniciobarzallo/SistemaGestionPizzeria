<?php
$db_servername = "db4free.net:3306";
$db_username = "pizzeria"; 
$db_password = "pizzeria"; 
$db_name = "pizzeriadb"; $
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
$conn->set_charset("utf8");
# Probar conexión 
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} else {
    echo "<p>Conexión exitosa!! :)</p>";
}