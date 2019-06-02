<?php
require("iniciarSesion.php");
$sesion=new controlSesion();
$sesion->iniciarSesion();
$sesion->serrarSesion();

?>