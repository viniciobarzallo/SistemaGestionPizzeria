<!DOCTYPE html>
<html>
    <head>
        <title>Facturas recibidas</title>
        <meta charset="UTF-8">
        <style type="text/css">
            .error{
                color:red;
            }
        </style>
    </head>
    <?php
        session_start();
        include "../../config/conexionBD.php";
    ?>
    <body>
            <nav>
                    <ul>
                        <li>
                            <a href="../home.html">Home</a>
                        </li>
                        <li>
                            <a href="">Mis pedidos</a>
                        </li>
                    </ul>
                </nav>
    </body>
</html>