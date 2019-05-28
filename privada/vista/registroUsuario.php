<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro usuario | Correo</title>
    </head>
    <body>
        <?php include 'includes/scripts.php'; ?>
        <?php include '../../../config/conexionBD.php'; ?>
        <section id="container">
            <div class="form_register">
                <h1><i class="fas fa-user-plus"></i> Registro Usuario</h1>
                <hr>
                <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div><a href="../controladores/crearUsuario.php"></a>

                <form id="formulario01" method="POST" action="../controladores/crearUsuario.php" enctype="multipart/form-data">
                    <label for="cedula">Apellido: </label>
                    <input type="text" name="cedula" id="cedula" placeholder="Cedula....">                    
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombres Completo...">
                    <label for="telefono">Telefono: </label>
                    <input type="tel" name="telefono" id="telefono" placeholder="Telefono....">
                    <label for="direccion">Direccion: </label>
                    <input type="text" name="direccion" id="direccion" placeholder="Direccion....">
                    <label for="correo">Correo Electr&oacute;nico: </label>
                    <input type="email" name="correo" id="correo" placeholder="Correo Electronico">
                    <label for="clave">Clave: </label>
                    <input type="password" name="clave" id="clave" placeholder="Clave de acceso">
                    
                    
                   <div class="photo">
                        <label for="foto">Foto</label>
                        <div class="prevPhoto">
                            <span class="delPhoto notBlock">X</span>
                            <label for="foto"></label>
                        </div>
                        <div class="upimg">
                            <input type="file" name="foto" id="foto">
                        </div>
                        <div id="form_alert"></div>
                    </div> 

                   
                    <br>
                    <button type="submit" class="btn_save"><i class="far fa-save"></i> Crear Usuario</button>
                </form>
            </div>
        </section>
        <?php include "includes/footer.php"; ?> 
    </body>
</html>
