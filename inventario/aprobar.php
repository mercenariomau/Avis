<?php
include("conexion.php");

		$query="select a.id_mov,b.vehiculo,c.categoria,a.n_fac_orden,a.cantidad, a.tipo_mov,a.usuario,a.fecha from movimiento a,vehiculo b, categoria c where a.vehiculo=b.id_vehi and a.descripcion=c.id_categ and a.permiso='1' and a.tipo_mov='1'";
		
		$respuesta=mysql_query($query,$conexion) or die("Error en SELECT SQL2.");
		
		while($row=mysql_fetch_array($respuesta)){
			?>
			 <tr>
			 
				<td><?php echo $row['id_mov'];?>
				</td>
				<td><?php echo $row['vehiculo'];?>
				</td>
				<td><?php echo $row['categoria'];?>
				</td>
				<td><?php if($row['tipo_mov']=="1"){ echo "<a href='pdf/reportes/ordenreporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} else { echo "<a href='pdf/reportes/facturareporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} echo $row['n_fac_orden'];?> </a>
				</td>
				<td><?php echo $row['cantidad'];?>
				</td>
				<td><?php echo $row['usuario'];?>
				</td>
				<td><?php echo $row['fecha'];?>
				</td>
				<td><form method="post" action="aprobar2.php">
				<input type="hidden" name="q" value="<?php echo $row['id_mov'];?>">
				<input type="submit" value="Aprobar">
				</form>
				</td>
				</td>
				<td><form method="post" action="rechazar.php">
				<input type="hidden" name="q" value="<?php echo $row['id_mov'];?>">
				<input type="submit" value="Rechazar">
				</form>
				</td>
				<td><?php if($row['tipo_mov']=="1"){ echo "<a class='button' href='pdf/reportes/ordenreporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} else { echo "<a class='button' href='pdf/reportes/facturareporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} echo "Detalles";?> </a></td>
				
			</tr>
<?php }

if($_POST['q']=="1")
$q=$_POST['q'];
		$query2="update movimiento set permiso='1' where id_mov='$q'";
		$respuesta2=mysql_query($query2,$conexion) or die("Error en SELECT SQL2.");

?>

