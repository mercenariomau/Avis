<?php
include("conexion.php");

		$query="select a.id_mov,c.vehiculo,b.categoria,a.tipo_mov,a.cantidad,a.n_fac_orden,a.usuario,a.fecha, a.permiso from movimiento a, categoria b, vehiculo c where a.descripcion=b.id_categ and a.vehiculo=c.id_vehi order by fecha desc limit 10";
		$respuesta=mysql_query($query,$conexion) or die("Error en SELECT 1 SQL.");
?>
<?php
		while($row=mysql_fetch_array($respuesta)){?>
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
				<td><?php if($row['tipo_mov']=="1"){ echo "<a href='pdf/reportes/ordenreporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} else { echo "<a href='pdf/reportes/facturareporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} echo $row['n_fac_orden'];?> </a>
				</td>
                <td><?php echo $row['usuario'];?>
				</td>
                <td><?php echo $row['fecha'];?>
				</td>
				<td><?php if($row['permiso']=="1"){ echo "Pendiente";} else if($row['permiso']=="2"){ echo "Rechazado";} else if($row['permiso']=="3"){ echo "Aprobado"; }?></td>
				<td><?php if($row['tipo_mov']=="1"){ echo "<a class='button' href='pdf/reportes/ordenreporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} else { echo "<a class='button' href='pdf/reportes/facturareporte.php?q=" . $row['n_fac_orden'] . "' target='_blank'>";} echo "Detalles";?> </a></td>
			</tr>
<?php }?>
		
