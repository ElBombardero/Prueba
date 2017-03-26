<?php
$x= 12345;
session_start();
$nom = $_SESSION["Logueado"];
if(!isset($_SESSION["Logueado"])) {
	header("Location:loginX.php");
}

$ComentarioEscrito="wey eso esta durismo ,lo voy a comprar. ";


?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/zoomImg.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar bg-primary">
			<div class="navbar-header"><a class="navbar-brand" href="Productos.php" style="color:white;">Inicio</a></div>
		</nav>
		<table style="width:100%">
			<td style="width:400px">
				<div class="pull-left">
					<p style="color:gray"><a href="categorias">categoria</a>:<a href="Vestimenta.php"> Vestimentas</a>/<a href="poloches">gorras</a>/Gorra Wolves</p>
					<div id="galeria">
						<img src="images/GorraWolves.jpg">
					</div>
				</div>
			</td>
			<td class="pull-left" style="width:350px">
				<h3 class="panel-heading panel-primary" >Gorra Wolves</h3>			
                <div class="ratings">
				<p class="pull-right">31 visitas</p>
					<p>
						<span class="glyphicon glyphicon-star" style="color:gold"></span>
						<span class="glyphicon glyphicon-star" style="color:gold"></span>
						<span class="glyphicon glyphicon-star" style="color:gold"></span>
						<span class="glyphicon glyphicon-star" style="color:gold"></span>
						<span class="glyphicon glyphicon-star-empty" style="color:gold"></span>
                    </p>
               </div>
			<p>Precio:<i class="fa fa-dollar" style="color:lightgreen">2500</i></p>
			<div class="">
				<b class="text-title">Descripcion:</b>
				<p class="text">La gorra de wolves es la mas nura ahora mismo, <br>comprala para que des la para.</p>
			</div>
			</td>
			<td class="" width="100px" >	
				<div class="panel panel-info" style="margin-left:100px;margin-right:20px">
					<div class="panel-heading">
						<div class="panel-title">Vendedor</div>
					</div>
					<div class="panel-body">
						<img src="charmeleon.png" name="CImagen" id="CImagen" style="width:200px"><hr>
						<a href="#" style="color:black"><?php print $nom; ?></a>
					</div>
				</div>
			</td>
		</table><hr>
		<div class="form-inline" align="center">
			<button class="btn btn-danger">Comentar</button>
			<textarea name="comentario" id="comentario" style="resize:none;" rows="1" cols="130" class="form-control"></textarea>
		</div><br>
		<div class="panel panel-primary" style="margin-left:50px;margin-right:50px">
			<div class="panel-heading">
				<div class="panel-title">Comentarios</div>
			</div>
			<script>var mes=["Enero","febrero","Marzo","Abril","mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];</script>
			<div class="panel-body form-inline">
				<?php $nombreUsuario=$nom;?>
				<p class="pull-right"><script>var fecha= new Date();document.write(fecha.getDate()+"-"+ mes[fecha.getMonth()] +"-"+ fecha.getFullYear()+" | "+ fecha.getHours()+":"+ fecha.getMinutes());</script></p>
				<h3 class="text form-inline"><a href="#"><?php print "<b>".$nombreUsuario.":</b>"?></a> <?php print"<h5>".$ComentarioEscrito."</h5>"; ?></h3><hr>
				<p class="pull-right"><script>var fecha= new Date();document.write(fecha.getDate()+"-"+ mes[fecha.getMonth()] +"-"+ fecha.getFullYear()+" | "+ fecha.getHours()+":"+ fecha.getMinutes());</script></p>
				<h3 class="text form-inline"><a href="#"><?php print "<b>".$nombreUsuario.":</b>"?></a> <?php print"<h5>".$ComentarioEscrito."</h5>"; ?></h3><hr>
				<p class="pull-right"><script>var fecha= new Date();document.write(fecha.getDate()+"-"+ mes[fecha.getMonth()] +"-"+ fecha.getFullYear()+" | "+ fecha.getHours()+":"+ fecha.getMinutes());</script></p>
				<h3 class="text form-inline"><a href="#"><?php print "<b>".$nombreUsuario.":</b>"?></a> <?php print"<h5>".$ComentarioEscrito."</h5>"; ?></h3>
			</div>
		</div>
	</body>
</html>