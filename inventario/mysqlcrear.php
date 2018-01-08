<?php
include("conexion.php");
session_start();

$categoria=$_POST['categoria'];
$repuesto=$_POST['descripcion'];
$usuario=$_SESSION['inventario']['usuario'];

$query="insert into repuesto (vehiculo,categoria,descripcion,usuario) values('$vehiculo','$categoria','$descripcion','$usuario')";
$respuesta=mysql_query($query,$conexion) or die("Error en INSERT SQL.");

?><!doctype html>
<html>
<head>
<title>INVENTARIO DE REPUESTOS AVIS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
       	<link rel="stylesheet" type="text/css" media="all" href="assets\css\main.css">	


</head>

<body>
<?php
	include ("menu.php");    
	?>
    
    <?php if ($respuesta)
	{?>
    	<h2>Repuesto Guardado</h2>
    <?php	
	}
	else
	{?> <h2>Error al guardar el repuesto en la base de datos</h2>
    <?php }
	?>
    
</body>

