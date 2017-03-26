<?php
	include("Modelos/conectar.php");
	session_start();
	$nom= $_SESSION['Logueado'];
	if(!isset ($_SESSION['Logueado'])){
		header('location:LoguinX.php');
	}
	$conexion=mysqli_connect('localhost','root','');
	/*---Traer Datos de la BD---*/
	$ConsultaBD = mysql_query("Select * from usuarios where Nombre='".$nom."'");
	$NumeroDeFilas= mysql_num_rows($ConsultaBD);
	while($filas=mysql_fetch_assoc($ConsultaBD)){
			$CorreoEnBD=$filas['Correo'];
			$ClaveEnBD=$filas['Clave'];
			$NombreEnBD=$filas['Nombre'];
			$ApellidoEnBD=$filas['Apellido'];
			$TarjetaEnBD=$filas['Tarjeta'];
	}
	/*---/Traer Datos de la BD---*/
	/*==Probando buscador en la Base de datos==*/
	if(isset($_POST["buscar"])){
		$conexion=mysqli_connect('localhost','root','');
	$escrito= mysqli_real_escape_string($conexion, $_POST["textoBuscar"]);
	$sql="Select * from usuarios where Nombre='".$escrito."'";
	echo"$sql<br><br>";
	$res=mysql_query($sql,$conn);		
		while($resultado= mysql_fetch_array($res)){
					echo"<table>
						<tr>
							<td>$resultado[Correo]</td>
							<td>$resultado[Clave]</td>
							<td>$resultado[Nombre]</td>
							<td>$resultado[Apellido]</td>
							<td>$resultado[Tarjeta]</td>
				
						</tr>
						</table>"
						
					;}
	}
	
	/*==/Probando buscador en la Base de datos==*/
	
	/*---reemplazar Datos de la BD---*/
	if(isset($_POST['ButtonguardarT'])){
		
	}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css"> 

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- !! Custom Fonts !! -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<title>Configuracion</title>
	</head>
<body  style="background-color:#00264d">
	<nav class="navbar navbar-fixed-top bg-primary" style="">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="productos.php" class="navbar-brand" style="color:white;">Inicio</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="loginX.php" style="color:white;">login</a></li>
				<li><a href="productos.php" style="color:white;">Productos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" method="post">
					<div class="form-group">
						<input type="text" name="textoBuscar" class="form-control">
					</div>
					<button type="submit" name="buscar" class="btn btn-default">Buscar</button>
				</form>
				<li><a href="logout.php" style="color:white;">Salir</a></li>
			</ul>
		</div>
	</nav>
	<div style="margin-bottom: 2cm">
	<div class="panel panel-primary col-md-6 col-md-offset-1 pull-left" style="resize:both">
		<!--Datos del Usuario-->
		<div class="panel-heading" align="center">
			<div class="panel-title"> Datos</div>
		</div>
		<div class="panel-body">
			<Form class="" method="Post">
			<div class="form-inline">
				<h2 class="text-title">Correo: </h2>
				<input type="text" id="CampoCorreo" class="form-control col-md-1 col-lg-2" value="<?php echo $CorreoEnBD; ?>" disabled>
				<button type="button" onclick="activar(CampoCorreo)" class="btn btn-info col-md-offset-4"><i class="fa fa-edit"></i> Editar</button>
				<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>                    
			</div>
			<div class="form-inline">
				<h2 class="text-title">Clave: </h2>
				<input type="text" id="CampoClave"class="form-control col-md-1 col-lg-2" value="<?php echo $ClaveEnBD; ?>" disabled>
				<button type="button" onclick="activar(CampoClave)" class="btn btn-info col-md-offset-4"><i class="fa fa-edit"></i> Editar</button>
				<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>                    
			</div>
			<div class="form-inline">
				<h2 class="text-title">Nombre: </h2>
				<input type="text" id="CampoNombre" class="form-control col-md-1 col-lg-2" value="<?php echo $nom; ?>" disabled>
				<button type="button" onclick="activar(CampoNombre)" class="btn btn-info col-md-offset-4"><i class="fa fa-edit"></i> Editar</button>
				<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>                    
			</div>
			<div class="form-inline">
				<h2 class="text-title">Apellido: </h2>
				<input type="text" id="CampoApellido"class="form-control col-md-1 col-lg-2" value="<?php echo $ApellidoEnBD; ?>" disabled>
				<button type="button" onclick="activar(CampoApellido)" class="btn btn-info col-md-offset-4"><i class="fa fa-edit"></i> Editar</button>
				<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>                    
			</div>
			<div class="form-inline">
				<h2 class="text-title">Tarjeta: </h2>
				<input type="text" id="CampoTarjeta" class="form-control col-md-1 col-lg-2" value="<?php echo $TarjetaEnBD; ?>" disabled>
				<button type="button" onclick="activar(CampoTarjeta)" class="btn btn-info col-md-offset-4"><i class="fa fa-edit"></i> Editar</button>
				<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>                    
			</div>
		</form>
		</div><hr>			
		<div>
			<button type="button" class="btn btn-primary pull-right" name="ButtonguardarT"><i class="fa fa-edit"></i> Guardar Todo</button>
		</div><br><br>
	</div>
	<div class="panel panel-info col-md-3 pull-right">
		<div class="panel-heading">
			<h3 class="panel-title text-center">Foto de perfil</h3>
		</div>
		<div class="panel-body">
			<img src="" name="CImagen" id="CImagen" style="width:200px">
			<input type="file"  id="CargarImagen" class="form-control" style="color: transparent" ><hr>
			<button class="btn btn-primary pull-right" onclick="cambiar()">Agregar</button>
		</div>
	</div>
	</div>
	
	<script>
		function activar(NombreButton){
			if(NombreButton.disabled == true){
				NombreButton.disabled = false;
			}else{
				NombreButton.disabled = true;
			}
			
		}
		 function cambiar () {
			document.getElementById('CImagen').src = document.getElementById('CargarImagen').value;
			}
	</script>
</body>
</html>