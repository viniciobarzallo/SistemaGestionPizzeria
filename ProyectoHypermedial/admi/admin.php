<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrador</title>
<link rel="stylesheet" href="css.css" media="screen">
</head>

<body>
<header>
	<img src="logo.png" id="logo" height="200" width="300">
</header>

<form action="verificar.php" method="post">
<div><br><br><br><br>
	<b>Usuario:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="usuario" name="usuario" placeholder="Ingresar nombre de usuario" class="txt"><br><br><br>
	<b>Contraseña:</b>&nbsp;&nbsp;&nbsp;<input type="password" id="psw" name="psw" placeholder="Ingresar la contraseña" class="txt"><br><br>
	<input type="submit" id="ingresar" name="ingresar" value="Iniciar sesion" class="boton" >
</div>
</form>
</body>
</html>
