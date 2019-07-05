<!DOCTYPE html>
<html>
<head>
	<title>Paqueteria DEY CIMAV</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import css-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon"  href="imagenFirmas/ico.ico">
</head>
<body>

	<div class="row">
		<div class="col s12">
			<ul class="tabs"> 

				<li class="tab col s4"><a class="black-text" onclick=" renderSalida()" >Recepción</a></li>
				<li class="tab col s4"><a class="black-text" onclick=" renderHistorial()">Historial</a></li>
				<li class="tab col s4"><a class="black-text" onclick=" renderExcel()">excel</a></li>
			</ul>
		</div>
	<div class="container">
		<div id="productosDiv"></div>
	</div>



	<script type="text/javascript" src="js/navBar.js"></script>
	<script type="text/javascript">
		 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);
	});
	</script>
</body>


</html>