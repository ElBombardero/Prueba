<?php
	include("Modelos/conectar.php");
	session_start();
	if(isset($_SESSION["Logueado"])){
		header("Location:Productos.php");
	}
	/*======Logearse====*/
	if(isset($_POST["Entrar"])){
		/*======Verificar datos insertados=====*/
		if(!empty($_POST['Nombre']) && !empty($_POST['Clave'])){
			$NombreUsuario=$_POST['Nombre'];
			$ClaveUsuario=$_POST['Clave'];
			
			$consultaBD = mysql_query("SELECT * FROM usuarios WHERE Nombre='".$NombreUsuario."' AND Clave='".$ClaveUsuario."'");
				
			$NumeroFilas= mysql_num_rows($consultaBD);
			if($NumeroFilas != 0){
				while($filas=mysql_fetch_assoc($consultaBD)){
					$NombreEnBD=$filas['Nombre'];
					$ClaveEnBD=$filas['Clave'];
				}
				/*====Verificar si datos coinciden con los de la BD=====*/
			if($NombreUsuario == $NombreEnBD && $ClaveUsuario == $ClaveEnBD){
				$_SESSION['Logueado']=$NombreUsuario;
				header("location: Productos.php");				
			}			
			}else{
				$message = "Nombre de usuario o contraseña invalida!";	
			 }			
		}else{
			$message =  "todos los campos son requeridos!";	
		 }						
	}
	/*---Registrarse---*/
	if(isset ($_POST['BottonRegistro'])){
		$CorreoR=$_POST['InputCorreoR'];
		$ClaveR=$_POST['InputClaveR'];
		$NombreR=$_POST['InputNombreR'];
		$ApellidoR=$_POST['InputApellidoR'];
		$TarjetaR=$_POST['InputTarjeta'];
		if(isset($CorreoR) && !empty($CorreoR) && isset($ClaveR)&& !empty($ClaveR)&& isset($NombreR)&&!empty($NombreR)&& isset($ApellidoR)&& !empty($ApellidoR) && isset($TarjetaR)&& !empty($TarjetaR)){
			$consultaBD =("Insert into usuarios (Correo,Clave,Nombre,Apellido,Tarjeta) values('$CorreoR','$ClaveR','$NombreR','$ApellidoR','$TarjetaR');");
			$res =mysql_query($consultaBD,$conn);
			if($res){
				echo "Se inserto la vaina";
			}else{
				echo"No se inserto la vaina";
			}
		}else{
			echo "Inserte todos los datos";
		}
	}
	
?>

<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="sidebar-menu.css">
<script src="fancybox/jquery.js"></script>

</head>
<body>
	<nav class="navbar bg-primary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="productos.php" style="color:white">Inicio</a>
			</div>
		</div>
	</nav>	
	<div>
		<div class="col-md-4">
			<div class="login-panel panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" align="center" >Login</h3>
				</div>
				<div class="panel-body">
					<form method="post">						
						<div class="form-group">
							<input type="text" name="Nombre" id="Nombre"placeholder="Usuario" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="text" name="Clave" placeholder="Clave" class="form-control"/>
						</div>
						<div class="error" align="center" style="color:red">
							<?php if (!empty($message)) {echo "<p class=\"error\">" .  $message . "</p>";} ?>
						</div>
						<button type="submit"name="Entrar" class="btn btn-primary col-md-4 col-md-offset-4">Entrar</button>						
					</form>
				</div>
			</div>
		</div>
	<div class="pull-right col-md-5">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Registro</h3>
			</div>
			<div class="panel-body">
				<form method="POST" id="form-registro">
					<div class="form-group">
						<span class="input-group-addon">Correo</span>
						<input type="text" id="InputCorreoRnput" name="InputCorreoR" class="form-control">
					</div>
					<div class="form-group">
						<span class="input-group-addon">Clave</span>
						<input type="text" name="InputClaveR" class="form-control">
					</div>
					<div class="form-group">
						<span class="input-group-addon">Nombre</span>
						<input type="text" name="InputNombreR" class="form-control">
					</div>
					<div class="form-group">
						<span class="input-group-addon">Apellido</span>
						<input type="text" name="InputApellidoR" class="form-control">
					</div>
					<div class="form-group form-inline">
						<span class="input-group-addon">Fecha de nacimiento</span><hr>
						<input type="text" name="Inputdia" placeholder="dia" class="form-control pull-left text-center" style="width:150px;">&nbsp &nbsp &nbsp
						<input type="text" name="Inputmes" placeholder="mes" class="form-control text-center" style="width:150px;">
						<input type="text" name="Inputano" placeholder="año" class="form-control pull-right text-center" style="width:150px;">
					</div><hr>
					<div class="form-group">
						<span class="input-group-addon">Tarjeta de credito</span>
						<input type="text" name="InputTarjeta" class="form-control">
					</div><hr>
					<button type="submit" name="BottonRegistro" class="btn btn-primary pull-right">Registrarse</button>
				</form>
			</div>		
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$("#form-registro").validate({
			rules:{
				InputCorreoR:{
					required:true,
					email:true,
				}
			}
		})
	});
	</script>
</body>
</html>
