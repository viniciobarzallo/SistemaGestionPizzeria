<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style type="text/css">
#anuncio {
	background-color:#000;
	color:#FFF;
	font-size:24px;
}
</style>
<script src="php/jquery/jquery-3.3.1.js"></script>
<script>
	$(document).ready(function() {
       $("#anuncio").width(500).height(500).text("Vende").hide().fadeIn(10000); 
    });
</script>
</head>

<body>
<div id="anuncio">
COMPRA
</div>
</body>
</html>