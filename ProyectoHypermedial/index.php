<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/indexestilos.css" rel="stylesheet" type="text/css">
<title>Inicio</title>
	<link rel="stylesheet" href="css/nivo-slider.css">
	<link rel="stylesheet" href="css/mi-slider.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<!-- Add mousewheel plugin (this is optional) -->
    <script src="lib/jquery-1.7.1.min.js" type="text/javascript"></script><!-- carga jQuery -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script src="php/jquery/jquery-3.3.1.js"></script>
	<script src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
    
<script type="text/javascript">
		$(document).ready(function() {					
			$('.fancybox').fancybox();
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});
			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'crearCuenta.php',
					type : 'iframe',
					padding : 5,
					
				});
			});
		});
	</script>

</head>
<body>
<div id="contenedor">
  <div id="encabezado">
    <div id="logo"><img src="logo.png" width="222" height="128" alt="logo" /></div>
  </div>
 /* class="fancybox fancybox.iframe"*/
  <a href="sesion.php"></a>
  <div id="registro"><a href="crearCuenta.php" class="fancybox fancybox.iframe">Registrate Aquí</a></div>
<div id="menu">
	<ul class="nav">
	  	<li><a href="">INICIO</a></li>
		<li><a href="menu.php">MENU</a>
        </li>
		<li><a href="quienesSomos.html">QUIENES SOMOS</a></li>
        <li><a href="sesionadmi.php">ADMINISTRACION</a>
            <ul>
            	  <li><a class="sub" href="sesionadmi.php">Administrador</a>
                  <li><a class="sub" href="sesionRep.php">Repartidor</a>
                  <li><a class="sub" href="sesionChef.php">Chéf</a>
            </ul>
        </li>
      <li><a href="sesion.php">INICIAR SESION</a></li>
    </ul>
</div>
<div class="slider-wrapper theme-mi-slider">
	<div id="slider" class="nivoSlider">     
		    <img src="imagenes/pizzaonline1.png" alt="" title="#htmlcaption1" />    
		    <img src="imagenes/pizza1.png" alt="" title="#htmlcaption2" />   
		    <img src="imagenes/pizza.png" alt="" title="#htmlcaption3" /> 
            <img src="../imagenes/pizzaonline2.png" alt="" title="#htmlcaption4" />    
		    <img src="imagenes/pizza1.png" alt="" title="#htmlcaption5" />     
	</div> 
		<div id="htmlcaption1" class="nivo-html-caption">     
	      <h1><b style="color:#F00">Bienvenidos a Pizza y sabor</b></h1>
		    <p><b>OFRECEMOS:</b></p>
		</div>
		<div id="htmlcaption2" class="nivo-html-caption">     
		    <h1>Pizzas de todos los sabores</h1>
		</div>
		<div id="htmlcaption3" class="nivo-html-caption">     
		    <h1></h1>
		</div>

  <div id="htmlcaption4" class="nivo-html-caption">     
		    <h1 style="color:#000"></h1>
	</div>
</div>
<div id="htmlcaption5" class="nivo-html-caption">     
		    <h1></h1>
  </div>
<div id="footer">
  <table width="200" border="0">
  <tr>
    <th width="242" height="37" scope="col"><div align="left">Sobre Nosotros</div></th>
    <th width="202" scope="col"><div align="left">Servicios</div></th>
    <th width="342" scope="col"><div align="left">Contáctanos</div></th>
  </tr>
  <tr>
    <td><a> Nuestra Historia</a></td>
    <td>Entrega</td>
    <td><b>pizzafast@gmail.com</b></td>
  </tr>
  <tr>
    <td><div align="left"><a>Normas de conducta empresarial</a></div></td>
    <td>&nbsp;</td>
    <td>Cel:0979978452</td>
  </tr>
  <tr>
    <td><a>Equipo de liderazgo</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
  <div id="facebook"></div>
  <div id="youtube"></div>
  <div id="twitter"></div>
</div>
</body>
</html>
