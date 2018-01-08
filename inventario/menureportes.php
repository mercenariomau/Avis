<!doctype html><head>
</head>
<div class="inner">			
			<h1>TIPOS DE REPORTES</h1>
			
				<ul class="actions">
				<?php session_start(); 
						if($_SESSION['inventario']['permiso']=="3" or $_SESSION['inventario']['permiso']=="1")
						{
						?>
					<li><a href="mov_aprobados.php" class="button">Aprobados</a></li>
					<li><a href="mov_rechazados.php" class="button">Rechazados</a></li>
					<li><a href="reporte_retiros.php" class="button">Retiros</a></li>
					<li><a href="reporte_ingresos.php" class="button">Ingresos</a></li>
					<?php 
						}
					?>
				</ul>	
</div>