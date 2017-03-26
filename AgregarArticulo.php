<?php


?>
<script>
$(document).ready(function(){
	$("#datosDelArticulo").validate();
	
});
</script>
<!Doctype html>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="fancybox/jquery-3.1.1.js"></script>
	<script src="fancybox/jquery.fancybox.js"></script>
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css">
</head>
<body>
	<nav class="navbar bg-primary">
		<div class="navbar-header">
			<a class="navbar-brand" href="productos.php" style="color:white">Producto</a>
		</div>
	</nav>
	<div class="panel panel-primary" style="margin-left:300px;margin-right:300px;">
		<div class="panel-heading">
			<h3 class="panel-title" align="center">Producto</h3>
		</div>
		<div class="panel-body">
			<form name="datosDelArticulo">
				<div class="input-group form-group">
					<span class="input-group-addon">Nombre</span>
					<input type="text" id="Nombre" style="width:300px" class="form-control required" class="requerid"/>
					<span class="input-group-addon">precio</span>
					<input type="text" id="inputPrecio" placeholder="precio" style="width:150px;" class="form-control"/>
				</div>
				<p id="MensajeDeValidacion" class="" style="color:red" align="right"></p>
				<div class="input-group form-group">
					<span class="input-group-addon"> Categoria</span>
					<select style="width:290px;" onchange="cambiarCategoria()"name="Categoria" class="form-control">
						<option value="" selected>Seleccione...
						<option value="Vehiculo">Vehiculo
						<option value="VideoJuegos">Video Juegos
						<option value="Deportes">Deportes
						<option value="Vivienda">Vivienda
						<option value="Electrodomesticos">Electrodomesticos
						<option value="Esteroides">Esteroides
						<option value="Sexo">Sexo
						<option value="Vestimentas">Vestimentas
					</select>
					<span class="input-group-addon">Estado</span>
					<select type="text" style="width:146px;" class="form-control">
						<option value="">selecionar
						<option value="Nueve">Nuevo
						<option value="Viejo">Viejo						
						<option value="AlgoUsado">Algo Usado						
					</select>
				</div>
				<div id="subcategoriaDiv" class="input-group form-group">
					<span class="input-group-addon"> SubCategoria</span>
					<select style="width:150px" name="SubCategoria" class="form-control">
						<option value="" selected>Seleccione...
					</select>
				</div>
			</form>
				<hr><center >imagenes</center><br>
				<div id="ContenedorDeImagenes">
					<input type="file" class="form-control" style="color:transparent" id="imagenCargada">
					<img src="" id="Imagen1" style="width:150px">
					<img src="" id="Imagen2" style="width:150px">
					<img src="" id="Imagen3" style="width:150px">
					<img src="" id="Imagen4" style="width:150px">
				</div>
					<span class="input-group-addon">descripcion del producto</span>
					<textarea class="form-control" style="resize:none"></textarea><br>
					<hr><button class="btn btn-primary pull-right" onclick="DarValorImagen()">Aceptar</button>
					<hr><button class="btn btn-primary pull-right" onclick="cambiarCategoria()">Categoria</button>
					<hr><button class="btn btn-info pull-right" onclick="guardar()">guardar</button>
		</div>
	</div>
					
	<script>		
		var Categoria_VideoJuegos = new Array("Play Station","X-Box");
		var Categoria_Electrodomesticos = new Array("vibradores","licuadoras","Neveras","Estufas","Ventiladores","Tostadoras");
		var Categoria_Esteroides = new Array("HGH","Anabolicos","Testosterona");
		var Categoria_Sexo = new Array("Vibradores","Dildo");
		function DarValorImagen(){
			//document.getElementById("Imagen1").src= document.getElementById("imagenCargada").value;
			var Imagen= document.getElementById("ContenedorDeImagenes");
			var ObtenerImagen= Imagen.getElementsByTagName("img");
			for(var i=0; i<ObtenerImagen.length;i++){
				ObtenerImagen[i].src=document.getElementById("imagenCargada").value;
			}
		}
	//====Dar valor a la Sub categoria=====//
		$("#subcategoriaDiv").hide();
		function cambiarCategoria(){
			var Categorias;
			Categorias = document.datosDelArticulo.Categoria[document.datosDelArticulo.Categoria.selectedIndex].value;
			Nombre.value = Categorias;
			if (Categorias !=0){
				ListaDeCategorias =eval("Categoria_"+ Categorias);
				CantidadCategoria = ListaDeCategorias.length;
				document.datosDelArticulo.SubCategoria.length = CantidadCategoria;
				for(i=0;i<CantidadCategoria;i++){
					document.datosDelArticulo.SubCategoria.options[i].value =ListaDeCategorias[i];
					document.datosDelArticulo.SubCategoria.options[i].text =ListaDeCategorias[i];
				}
			}else{
				document.datosDelArticulo.SubCategoria.options[0].value="22";
				document.datosDelArticulo.SubCategoria.options[0].text="22";
			}
			$("#subcategoriaDiv").show("slow");
		}
		//--------------Guardar------------//
		function guardar(){			
			if(isNaN(document.getElementById('inputPrecio').value) || document.getElementById('inputPrecio').value==""){
				document.getElementById("MensajeDeValidacion").innerHTML="Este campo es requerido";
			}
		}
	</script>
</body>
</html>