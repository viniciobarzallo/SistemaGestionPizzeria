<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio se Sesion</title>
<link href="css/csssesion.css" rel="stylesheet" type="text/css">
/<script src="jquery/jquery-3.3.1.js"></script>
</head>
<body class="body">
<div id="contenedor">
<h1> Iniciar sesión</h1>
<hr align="center" size="10" style="color:#00F;" />
<div id="formulario">
<form action="verificarCuenta.php" method="post" id="form">
<table width="565" height="279" border="0" align="center">
  <tr>
    <td width="196"><div align="left">Usuario:</div></td>
    <td width="316"><div align="center">
      <input name="usuario" type="text" id="usuario">
    </div></td>
  </tr>
  <tr>
    <td>Contraseña:</td>
    <td><div align="center">
      <input name="contrasenia" type="password" id="contrasenia">
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <input class="button" value="Iniciar Sesión" name="iniciar" type="submit" id="iniciar">
		
    </div></td>
    <td><div align="center">
      <input class="button" value="Cancelar" name="cancelar" type="button" id="cancelar" onClick="location.href='index.php'">
    </div></td>
  </tr>
</table>
</form>
</div>
</div>
</body>
</html>