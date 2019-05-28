<!--Este archivo sirve para realizar la fuctura luego del pedido-->
<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <head>
       <title>Facturacion</title>
       <link rel="stylesheet" href="./cssfactura/crearFactura.css" type="text/css">
    </head>
    <body>
        <script></script>
        <div>
            <!--Seccion datos empresa-->
            <table id="tbldempresa">
                <caption>Facturación</caption>
                <tbody>
                    <tr>
                        <td>
                            <label id="empresa" for="empresa">Empresa</label>
                        </td>
                        <td>
                            <label id="txtempresa" for="empresa">...</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="ruc" for="ruc">R.U.C.</label>
                        </td>
                        <td>
                            <label id="txtruc" for="txtruc"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="direccionM" for="direccionM">Dirección Matriz</label>
                        </td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <!--Seccion de datos sucursal-->
            <table id="tbldsucursal">
                <tbody>
                    <tr>
                        <td>
                            <label id="sucursal" for="sucursal">Sucursal</label>
                        </td>
                        <td>
                            <label id="txtsucursal" for="txtsucursal"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="direccionS" for="direccionS">Dirección</label>
                        </td>
                        <td>
                            <label id="txtdireccionS" for="txtdireccionS"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="telefonoS" for="telefonoS">Telefono</label>
                        </td>
                        <td>
                            <label id="txttelefonoS" for="txttelefonoS"></label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <!--Cabecera-->
        </div>
        <div>
            <!--Datos Facturacion-->
            <table id="tbldcabecera">
                <tbody>
                    <tr>
                        <td>
                            <label id="fecha" for="fecha">Fecha</label>
                            <label id="txtfecha" for="fecha"></label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <!---->
        </div>
    </body>
</html>