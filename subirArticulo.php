<?php
$edad ="5";
$edad2 ="55";
echo ($edad > 18) ? "Mayor de Edad " : "Menor de Edad ";

$var = ($edad2 >= 18) ? " Mayor de edad" : " Menor de edad";
echo $var;
$a=array("Z"=>"Volvo","A"=>"BMW","C"=>"Toyota");
print_r(array_reverse($a));

$Prueba=[
	"1Rojo",
	"2Amarillo",
	"3Negro"
	];
print_r(array_reverse($Prueba));

var_dump($_GET);

?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script type="text/javascript" src="fancybox/jquery-3.1.1.js"></script>
		<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
	</head>
	<body>
		<script>
		
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
			
			$(document).ready(function(){
				$("button").click(function(){
					$("p").show();	
					
				});
				
				$("p").click(function(){
					$("p").hide();
					
				});
				
			});
		</script>
		
		<nav class="navbar bg-primary">
			<div class="navbar-header"><a class="navbar-brand" href="productos.php" style="color:white">Inicio</a>
			<ul class="nav navbar-nav">
				<li><a href="ArticuloSeleccionado.php" style="color:DarkSlateGrey">Aticulo</a></li>
			</ul>
		</nav>			
		<button >dame</button>
			<p id="p">wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
			wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
			wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</p>
			<a class="fancybox" rel="group" href="images/poloche-bakano.jpg" title="klk con klk"><img src="images/C-rojo.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="images/Dominicanos.png" title="klk con klk"><img src="images/C-amarillo.png" alt="" /></a>


</div>
<h3 id="elh">popopopopopopo</h3>
<script>

		$("#p").hide();
		$("#elh").hide();
</script>
	</body>
</html>