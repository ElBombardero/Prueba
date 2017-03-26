<?php
	session_start();
		$nom=$_SESSION['Logueado'];
		if(!isset($_SESSION["Logueado"])) {
			header("location:loginX.php");		
		}

?>
<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap Core CSS na'-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS NA'-->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS na'-->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts Los iconos-->
	<script type="text/javascript" src="vendor/jquery/jquery.js"></script>
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<title>Productos</title>
	</head>
	<body >
	<div>
		<nav class="navbar bg-primary navbar-fixed-top" role="navigation">
		<ul class="nav navbar-top-links navbar-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="" style="color:white">Inicio</a>
            </div>
            <!-- /.navbar-header -->			
				<ul class="nav navbar-nav">
					<li><a href="Menu.php" style="color:DarkSlateGrey">login</a></li>
					<li><a href="ArticuloSeleccionado.php" style="color:DarkSlateGrey">Articulo S</a></li>
					<li>
						<a href="AgregarArticulo.php" style="color:DarkSlateGrey">
							<i class="fa fa-arrow-up"></i>
						</a>
                    </li>
				</ul>
			</ul>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" style="color:white" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" style="color:gold" data-toggle="dropdown" href="#">
                        <i class="fa fa-cart-plus fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Compra 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver todas las compras</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" style="color:white" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="label pull-right">8</i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>                       
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" style="color:white" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $nom; ?></a>
                        </li>
                        <li><a href="Configuracion.php"><i class="fa fa-gear fa-fw"></i> Configuracion</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar articulos">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-car fa-fw"></i> Vehiculos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gamepad fa-fw"></i> video juegos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Play Station</a>
                                </li>
                                <li>
                                    <a href="morris.html">X-Box</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-futbol-o fa-fw"></i> Deportes</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-home fa-fw"></i> Vivienda</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-television fa-fw"></i> Electrodomesticos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html"> vibradores</a>
                                </li>
                                <li>
                                    <a href="buttons.html"> licuadoras</a>
                                </li>
                                <li>
                                    <a href="notifications.html"> Neveras</a>
                                </li>
                                <li>
                                    <a href="typography.html"> Estufas</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Ventiladores</a>
                                </li>
                                <li>
                                    <a href="grid.html"> Tostadoras</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-medkit fa-fw"></i> Esteroides<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"> HGH</a>
                                </li>
                                <li>
                                    <a href="#"> Anabolicos</a>
                                </li>
                                <li>
                                    <a href="#"> Testosterona<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#"> Estanozolol</a>
                                        </li>
                                        <li>
                                            <a href="#"> Decarudabolin</a>
                                        </li>
                                        <li>
                                            <a href="#"> Sustanon</a>
                                        </li>
                                        <li>
                                            <a href="#"> Anadrol</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-intersex fa-fw"></i> Sexo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html"> vibradores</a>
                                </li>
                                <li>
                                    <a href="login.html"> Dildo</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
							<a href="Vestimenta.php"><i class="fa fa-money"></i> Vestimentas</a>
						</li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		<script>
			
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>
		<div class="col-md-9 col-md-offset-3">
			<h3 class="panel-heading panel-primary">
				<div class="row">
					<p class="pull-left">Productos</p>
				</div>			
					<p style="font-size:11px" class="pull-right">10/150</p>
			</h3>
                <div class="row">
                    <div class="col-sm-4 col-lg-3 col-md-4">
                        <div class="thumbnail">
                            <a class="fancybox" rel="group" href="images/Dominicanos.png"><img src="images/Dominicanos.png" /></a>
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">Escudo Nacional</a>
                                </h4>
                                <p>Escudo nacional del pais Dios Patria y libertad</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 col-md-4">
                        <div class="thumbnail">
                            <img src="images/61BgyG4pkSL._SL1100_.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Audifonos Ratata</a>
                                </h4>
                                <p>Audifonos que se escuchan G-vi</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 col-md-4">
                        <div class="thumbnail">
                            <img src="images/31i-UUSBPHL.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Hoverboard</a>
                                </h4>
                                <p>Pa' que de la para montate en la Hoverboard</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 col-md-4">
                        <div class="thumbnail">
                            <img src="images/GorraWolves.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="ArticuloSeleccionado.php">Gorra Wolves</a>
                                </h4>
                                <p>La gorra mas dura que hay ahora mismo.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 col-md-4">
                        <div class="thumbnail">
                            <img src="images/GorraWolves.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="ArticuloSeleccionado.php">Gorra Wolves</a>
                                </h4>
                                <p>La gorra mas dura que hay ahora mismo.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
				
	<nav class="col-md-offset-5">
  <ul class="pagination">
    <li class=""><a href="#" aria-label="Previous"><span>&laquo;</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li class=""><a href="#">2 <span class="sr-only"></span></a></li>
    <li class=""><a href="#">3 <span class="sr-only"></span></a></li>
    <li class=""><a href="#">4 <span class="sr-only"></span></a></li>
    <li class=""><a href="#" aria-label="next"><span >&raquo;</span></a></li>
    
  </ul>
	</nav>
            </div>
			<!--<audio class="pull-center" src="13-orochimaru-s-theme.mp3" controls></audio>-->

    <!-- Bootstrap Core JavaScript despliega-->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript navegador lateral cerrado-->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript na'-->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript navegador lateral cerrado-->
    <script src="dist/js/sb-admin-2.js"></script>
	</body>
</html>