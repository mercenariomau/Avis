<!-- conexion -->
	<?php
		include("conexion.php");
		$query="select c.vehiculo, b.categoria, a.tipo_mov, a.cantidad, a.n_fac_orden, a.usuario, a.fecha, a.permiso, a.comentario from movimiento a, categoria b, vehiculo c where a.tipo_mov='1' and c.id_vehi=a.vehiculo and b.id_categ=a.descripcion order by fecha desc";
		$respuesta=mysql_query($query,$conexion) or die("Error en SELECT SQL.");	
	?>
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
				<!-- reportes php -->
				<?php
                include ("menureportes.php");    
                ?>
				</section>
				<section class="wrapperr alt style7">
					<div class="inner">
				
						<h2>RETIROS</h2>
							<table id="table "class="table-wrapper">
								<thead>
								<tr>
									<td>Vehiculo</td>
									<td>Categoría de repuesto</td>
									<td>Movimiento</td>
									<td>Cantidad</td>
									<td>Orden/Factura</td>
									<td>Usuario</td>
									<td>Fecha</td>
									<td>Permiso</td>
									<td>Comentario</td>
									
								</tr> 
									 <tbody>
										<?php
											while($row=mysql_fetch_array($respuesta)){?>
												 <tr>
													<td><?php echo $row['vehiculo'];?>
													</td>
													<td><?php echo $row['categoria'];?>
													</td>
													<td><?php if($row['tipo_mov']=="1"){ echo "Retiro";} else { echo "Ingreso"; }?>
													</td>
													<td><?php echo $row['cantidad'];?>
													</td>
													<td><a href='pdf/reportes/ordenreporte.php?q=<?php echo $row['n_fac_orden'];?>' target='_blank'><?php echo $row['n_fac_orden'];?> </a>
													</td>
													<td><?php echo $row['usuario'];?>
													</td>
													<td><?php echo $row['fecha'];?>
													</td>
													<td><?php if($row['permiso']=="1"){ echo "Pendiente";} else if($row['permiso']=="2"){ echo "Rechazado";} else if($row['permiso']=="3"){ echo "Aprobado"; }?></td>
													<td><?php echo $row['comentario'];?>
													</td>
													<td><?php if($row['tipo_mov']=="1"){ echo "<a class='button' href='pdf/reportes/ordenreporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} else { echo "<a class='button' href='pdf/reportes/facturareporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} echo "Detalles";?> </a></td>
												</tr>
										<?php }?>								
										   
									 </tbody>
							</table>
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
	
	


