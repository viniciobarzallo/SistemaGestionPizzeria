<?php 

include 'conexion.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body background="img/fondo.jpg">
    <form align= center method="post" action="funciones.php" id="ubicacion" name="ubicacion">

<h1>Insertar nuevo</h1>

<TABLE align =center>

<TR>
<TD>Id: </TD>
<TD>
<INPUT type=text name="idUbicacion" placeholder='Escriba un ID'>(*)<br>
</TD>
</TR>

<TR>
<TD>Barrio: </TD>
<TD>
<INPUT type=text name="Barrio" placeholder='Escriba el Barrio'>(*)<br>
</TD>
</TR>


<TR>
<TD>Calle Principal:</TD>
<TD>
<INPUT type=text name="cPrincipal" placeholder='Escriba su calle Principal'>(*)<br>
</TD>
</TR>

<TR>
<TD>Calle Secundaria: </TD>
<TD>
<INPUT type=text name="cSecundaria"  placeholder='Escriba su calle Secundaria'>(*)
</TD>
</TR>

<TR>
<TD>Referencia:</TD>
<TD>
<INPUT type=text name="Referencia" placeholder='Escriba alguna refenrecia'>(*)<br>
</TD>
</TR>


<TR>
<TD>
<INPUT type="submit" value="Enviar" name='enviar'>
</TD>
</TR>
</TABLE>
</body>
</html>