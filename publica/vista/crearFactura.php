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
        <div id="navegacion">
            <nav>
                <ul>
                    <li>
                        <a href="../home.html">Home</a>
                    </li>
                    <li>
                        <a href="">Mis pedidos</a>
                    </li>
                    <li>
                        <a href="./listarFacturaCliente.html">Mis facturas</a>
                    </li>

                </ul>
            </nav>
        </div>

        <div id="contenedorDatos-Empresa" class="contenedor">
            <!--Seccion datos empresa-->
            <table id="tbldempresa">
                <caption id="tituloFactura">Facturación</caption>
                <tbody class="datosEmpresa">
                    <tr>
                        <td class="datosEmpresa">
                            <label id="empresa" for="empresa">Razón Social</label>
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
        <div id="contenedorDatos-Sucursal" class="contenedor">
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
        <div class="contenedor">
            <!--Cabecera-->
        </div>
        <div class="contenedor">
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
        <div id="productos" class="contenedor">
            <!---->

        </div>
        <div id="gtotal">
            <div id="total">
                <table>
                    <tbody>
                        <tr>
                            <td id="txttotal">Total</td>
                            <td id="total"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="botones" class="contenedor">
                <p>
                    <input id="guardar" type="button" value="Guardar" style ="border-style: 2px solid; border-color: #7093F3; background-color:#B0C4F7"/>
                </p>
                <p>
                    <input id="cancelar" type="button" value="Cancelar" style="border-style: 2px solid; border-color: #7093F3; background-color:#B0C4F7"/>
                </p>
            </div>
        </div>
    </body>
</html>