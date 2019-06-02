<?php
session_start();
class controlSesion{
public function iniciarSesion(){
	if (isset($_SESSION['usuario'])){
	echo "VienBenido ";
} else {
	header( "Location: index.php" );

}
}
public function serrarSesion(){
	session_start();
	session_destroy();
	header("Location: index.php");
}
}
?>