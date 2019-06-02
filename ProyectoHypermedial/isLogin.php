<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
    session_start(); 
    $usuario= $_SESSION['usuario'];

    $estado=false;
	if(isset($usuario)){
		$estado=true;
		}
?>
</body>
</html>