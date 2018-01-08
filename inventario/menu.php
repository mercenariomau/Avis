<!doctype html><head>
</head>


<div class="inner">
	<h2>INVENTARIO DE REPUESTOS AVIS</h2>
		<h1>Bienvenido <?php session_start(); echo $_SESSION['inventario']['nombre']." ".$_SESSION['inventario']['apellido'];?></h1>
						
				<ul class="actions">
					<li><a href="main.php" class="button">Inicio</a></li>
					<li><a href="deposito.php" class="button">Deposito de repuestos</a></li>
					<li><a href="retiro.php" class="button">Retiro de repuestos</a></li>
					
					<?php session_start(); 
						if($_SESSION['inventario']['permiso']=="2")
						{
						?>
						<li><a href="enespera.php" class="button">Aprobar</a></li>
						<?php 
						}
					?>
					<?php session_start(); 
						if($_SESSION['inventario']['permiso']=="1")
						{
						?>
						<li><a href="enespera.php" class="button">Aprobar</a></li>
						<li><a href="reportes.php" class="button">Reportes</a></li>
						<?php 
						}
					?>
					<?php session_start(); 
						if($_SESSION['inventario']['permiso']=="3")
						{
						?>
						<li><a href="reportes.php" class="button">Reportes</a></li>
						<?php 
						}
					?>
					
					<li><a href="inventario.php" class="button">Lista de Repuestos</a></li>
					<li><a href="index.php" class="button">Salir</a></li>
				</ul>
</div>



