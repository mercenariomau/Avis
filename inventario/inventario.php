<?php
session_start();


if($_SESSION['inventario']['estatus']=="1")
{
?><!doctype html>
<html>
<head>
	<title>INVENTARIO DE REPUESTOS AVIS</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="all" href="assets\css\main.css">
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->	
</head>
	<body>
    <!-- Page Wrapper -->
			<div id="page-wrapper">
				<div id=noprint>
				<!-- Header -->
				<header id="header" class="alt">
						<h1><a href="main.php">INVENTARIO DE REPUESTOS</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
				</header>
				
				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="main.php">Inicio</a></li>
								<li><a href="deposito.php">Deposito de Repuestos</a></li>
								<li><a href="retiro.php">Retiro de Repuestos</a></li>
								<?php session_start(); 
									if($_SESSION['inventario']['permiso']=="2")
									{
								?>
									<li><a href="enespera.php">Aprobar</a></li>
								<?php 
									}
								?>
								<?php session_start(); 
									if($_SESSION['inventario']['permiso']=="1")
									{
								?>
									<li><a href="enespera.php">Aprobar</a></li>
									<li><a href="reportes.php">Reportes</a></li>
								<?php 
									}
								?>
								<?php session_start(); 
									if($_SESSION['inventario']['permiso']=="3")
									{
								?>
									<li><a href="reportes.php">Reportes</a></li>
								<?php 
									}
								?>
								<li><a href="inventario.php">Inventario</a></li>
								<li><a href="index.php">Salir</a></li>
							</ul>
							<a href="#" class="close">Cerrar</a>		
						</div>
					</nav>
				<section id="banner">
					<!-- menu php -->
					<?php
					include ("menu.php");    
					?>
				</section>
				</div>
				<section class="wrapperr alt style7">
					<div class="inner">
						<h2>INVENTARIO GENERAL</h2>	
							<table>
								<thead>
									<tr>
										<td>Vehiculo</td>
										<td>Categoria del Repuesto</td>
										<td>Cantidad</td>
										<td>Precio Unitario Estimado</td>
										<td>Precio Total Estimado</td>
									</tr> 
								</thead>
								<tbody>	
									<?php include("mysqlqueryinventario.php");?>  
								</tbody>
							</table>
					</div>
				</section>
				<?php
					include ("footer.php");    
				?>
			
	</body>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
		
</html>
<?php
}

else
{
	header("Location: index.php");
}	
?>