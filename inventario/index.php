<?php
$q=$_GET["q"];
if($q=="1")
{
	echo "<script type='text/javascript'> alert('Error Usuario o Clave Invalidos'); </script>";
}
?><!doctype html>
<html>
	<title>INVENTARIO DE REPUESTOS AVIS</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="all" href="assets\css\main.css">	
		<head>
		</head>
			<body>
			<!-- Page Wrapper -->
			<div id="page-wrapper">
			<section id="banner">
				<div class="inner">
					<h2>INVENTARIO DE REPUESTOS AVIS</h2>
				
					<form action="validar.php" method="POST">

						<h1>Nombre: <input name="usuario" type="text"></h1>
						<h1>Contraseña: <input name="clave" type="password"></h1>

						<input type="submit" value="Ingresar">
					</form>
				</div>
			</section>
			</div>
<!-- footer php -->
				
					<?php
					   include ("footer.php");    
					?>
			</body>
</html>

