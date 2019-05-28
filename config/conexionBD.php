<?php        

    $servername = "db4free.net:3306";
    $username = "pizzeria";
    $password = "pizzeria";
    $dbname = "pizzeriadb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
    	//echo "Conexion exitosa !!";
    }  
?>
