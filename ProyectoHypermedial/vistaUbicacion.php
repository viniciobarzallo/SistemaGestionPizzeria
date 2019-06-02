 <?php

include 'conexion.php';

$sql= "SELECT barrio, callePrincipal, calleSecundaria, referencia FROM ubicacion";
$result = $conn->query($sql); 
$row = $result->fetch_assoc() 


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
    <form align= center method="post" action="funciones.php" id="ubicacion" name="ubicacion">

<h1>DIRECCION DE ENTREGA</h1>

<TABLE align =center>
<TR>
<TD>Barrio: </TD>
<TD>
<INPUT type=text name="Barrio"  id="barrio" value="<?php echo $row['barrio']; ?>" required disabled="disabled"><br>
</TD>
</TR>


<TR>
<TD>Calle Principal:</TD>
<TD>
<INPUT type=text name="cPrincipal" id="cPrincipal" value="<?php echo $row['callePrincipal']; ?>" required disabled="disabled"><br>
</TD>
</TR>

<TR>
<TD>Calle Secundaria: </TD>
<TD>
<INPUT type=text name="cSecundaria" id="cSecundaria" value="<?php echo $row['calleSecundaria']; ?>" required disabled="disabled">
</TD>
</TR>

<TR>
<TD>Referencia:</TD>
<TD>
<INPUT type=text name="Refencia" id="referencia" value="<?php echo $row['referencia']; ?>" required disabled="disabled"><br>
</TD>
</TR>


<TR>
<TD>

<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15938.996730420648!2d-78.99978978022459!3d-2.88851154999999!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sec!4v1533591251652" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</TD>
</TR>
</TABLE>

<?php 

if (isset($_POST['actualizarEntrega'])) { 

 echo 'hola';


}
?>
</body>
</html>