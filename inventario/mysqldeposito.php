<?php
include("conexion.php");
session_start();

$vehiculo=$_POST['vehiculo'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$n_fac_orden=$_POST['n_fac_orden'];
$precio=$_POST['precio'];
$usuario=$_SESSION['inventario']['usuario'];
		

?><!doctype html>
<html>
<head>
<title>INVENTARIO DE REPUESTOS AVIS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
       	<link rel="stylesheet" type="text/css" media="all" href="assets\css\main.css">	


</head>

<body>
	<section id="banner">
		<!-- menu php -->
			<?php
				include ("menu.php");    
			?>
	
<?php
		/*//Comprobar que no haya otro numero igual
		$sql="SELECT * FROM movimiento WHERE n_fac_orden='".$n_fac_orden."'";
		$validacion=mysql_query($sql,$conexion);
		if($row=mysql_fetch_array($validacion))
		{
		?>
		<div class="inner">
			<h2>Error al guardar el movimiento en la base de datos</h2>
			<h1>El numero de orden o factura <b><?php echo $n_fac_orden ?></b> ya fue ingresado anteriormente.</h1>
		<?php
			exit();   
		}*/
		//realiza el insert en la tabla si salta la validacion anterior
		$query="insert into movimiento (vehiculo,descripcion,tipo_mov,cantidad,n_fac_orden,precio,usuario,permiso) values ('$vehiculo','$descripcion','0','$cantidad','$n_fac_orden','$precio','$usuario','3')";
		$respuesta=mysql_query($query,$conexion) or die("Error en INSERT SQL 1");
		
		$queryrespaldo="insert into movimiento_resp (vehiculo,descripcion,tipo_mov,cantidad,n_fac_orden,precio,usuario,permiso) values ('$vehiculo','$descripcion','0','$cantidad','$n_fac_orden','$precio','$usuario','3')";
		mysql_query($queryrespaldo,$conexion) or die("Error en INSERT SQL 2");
		
		//busca el numero de movimiento
		$query2="select * from movimiento order by 1 desc limit 1";
		$respuesta2=mysql_query($query2,$conexion) or die("Error en SELECT SQL 1");
		$row2=mysql_fetch_array($respuesta2);

	 
	?>
    
    <?php if ($respuesta)
	{?>
    	<h2>Movimiento Guardado bajo el #<?php echo $row2['id_mov'];?></h2>
    <?php	
	}
	else
	{?> <h2>Error al guardar el movimiento en la base de datos</h2>
    <?php }
	?>
	<!--</div>-->
	</section> 
</body>
		
</html>