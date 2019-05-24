<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div>
        <h1> PIZZERIA </h1>
        <H2>Login : </H2>
        <form id="formulario" name="formulario" action="verificarUsuario.php" method="post">
            <label> Correo : </label>
            <input type="text" name="correo" id="correo" value="">
            <label> Contraseña: </label>
            <input type="password" name="contrasenia" id="contrasenia" value="" >(*)
            <input type="submit" id="ingresar" name="ingresar" value="ingresar"><br>
        </form>
    </div>

</body>
</html>