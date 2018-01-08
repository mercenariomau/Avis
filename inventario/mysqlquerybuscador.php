<?php
	include("conexion.php");
	$buscar=$_POST['buscar'];
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
									if($_SESSION['inventario']['permiso']=="3")
									{
								?>
									<li><a href="enespera.php">Aprobar</a></li>
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
				<!--buscador php -->
				<?php
                include ("buscador.php");    
                ?>
				</section>
				<section class="wrapperr alt style7">
					<div class="inner">
						<table>
							<thead>
							<tr>
								<td>Id movimiento</td>
								<td>Vehiculo</td>
								<td>Categoría de repuesto</td>
								<td>Tipo de movimiento</td>
								<td>Cantidad movida</td>
								<td>Número de orden/factura</td>
								<td>Usuario</td>
								<td>Fecha</td>
								<td>Estatus</td>
							</tr>
							

								<tbody>
								<?php
									$query="select a.id_mov,c.vehiculo,b.categoria,a.tipo_mov,a.cantidad,a.n_fac_orden,a.usuario,a.fecha,a.permiso from movimiento a, categoria b, vehiculo c where a.n_fac_orden like '%$buscar%'  and a.vehiculo=c.id_vehi and a.descripcion=b.id_categ";
									$respuesta=mysql_query($query,$conexion) or die("Error en SELECT SQL.");
									
									/* valida si busqueda devuelve nada*/
									if(mysql_num_rows($respuesta)==0)
									{
										$mensaje="<h1>No hay registros para mostrar</h1>";
									}

									while($row=mysql_fetch_array($respuesta)){
								?>
								<tr>
									<td><?php echo $row['id_mov'];?>
									</td>
									<td><?php echo $row['vehiculo'];?>
									</td>
									<td><?php echo $row['categoria'];?>
									</td>
									<td><?php if($row['tipo_mov']=="1"){ echo "Retiro";} else { echo "Ingreso"; }?>
									</td>
									<td><?php echo $row['cantidad'];?>
									</td>
									<td><?php echo $row['n_fac_orden'];?>
									</td>
									<td><?php echo $row['usuario'];?>
									</td>
									<td><?php echo $row['fecha'];?>
									</td>
									<td><?php if($row['permiso']=="1"){ echo "Pendiente";} else if($row['permiso']=="2"){ echo "Rechazado";} else if($row['permiso']=="3"){ echo "Aprobado"; }?></td>
							
								</tr>
							<?php }
							?>					
							   </tbody>
						</table>
					
					</div>
				</section>
			<?php 
			/*mensaje de busqueda vacia*/
				echo $mensaje; 
			?>
			<?php
				include ("footer.php");    
			?>
	</body>

	
		
