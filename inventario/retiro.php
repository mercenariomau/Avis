<?php 
/*conexion a la base de datos*/
	include("conexion.php");

	/*select vehiculo*/
		$query="select * from vehiculo order by vehiculo";
		$respuesta1=mysql_query($query,$conexion) or die("Error en SELECT SQL1.");
	/*categoria de repuesto*/
		$query="select * from categoria order by categoria";
		$respuesta2=mysql_query($query,$conexion) or die("Error en SELECT SQL2.");

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
				<section class="wrapperf alt style8">
					<div class="inner">
						<h2>RETIRO DE REPUESTOS</h2>
						<form action="mysqlretiro.php" method="POST" name="retirorepuesto">

							<h1>Vehiculo</h1>
							<a>NOTA: CAUCHOS Y BATERIAS SE RETIRAN COMO **VEHICULO GENERAL**</a>
								
								<select name='vehiculo' required='required'>
									<option value=''> Seleccione una Opcion </option>
									<?php 
									while($row=mysql_fetch_array($respuesta1))
									{
										echo "<option value='" . $row['id_vehi'] . "'>" . $row['vehiculo'] . "</option>";
									}
									?>
								</select>
							
							<br>
							<h1>Categoría del Repuesto</h1>
								
									
									<select name='descripcion' required='required'>
									<option value=''> Seleccione una Opcion</option>
									<?php 
									while($row2=mysql_fetch_array($respuesta2))
									{
										echo "<option value='" . $row2['id_categ'] . "'>" . $row2['categoria'] . "</option>";
									}
									?>
									</select>
								
							<br>
							<h1>Cantidad</h1>
							<input type="text"  name="cantidad" placeholder="LA CANTIDAD MINIMA ES 1" required='required'>
							<br>
							<h1>Número de orden</h1>
							<input name="n_fac_orden" type="text" placeholder="ejemplo: 35890" required='required'>
							<br>
							<input name="submit" type="submit" value="Crear movimiento" class="special">
							<input type="reset" value="Limpiar formulario" class="special">
						</form>
					</div>
				</section>
			<?php
			   include ("footer.php");    
			?>
		</div>
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