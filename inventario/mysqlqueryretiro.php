<?php
include("conexion.php");

		$query="select a.id_mov,c.vehiculo,b.categoria, b.descripcion,a.tipo_mov,a.cantidad,a.n_fac_orden,a.usuario,a.fecha, a.permiso from movimiento a, categoria b, vehiculo c where a.descripcion=b.id_categ and a.vehiculo=c.id_vehi order by fecha desc limit 10";
		$respuesta=mysql_query($query,$conexion) or die("Error en SELECT 2 SQL.");?>

<?php
		while($row=mysql_fetch_array($respuesta)){?>
			 <tr>
				<td><?php echo $row['id_mov'];?>
				</td>
				<td><?php echo $row['vehiculo'];?>
				</td>
				<td><?php echo $row['categoria'];?>
				</td>
				<td><?php echo $row['descripcion'];?>
				</td>
				<td><?php echo $row['cantidad'];?>
				</td>
				<td><?php echo $row['n_fac_orden'];?>
				</td>
                <td><?php echo $row['usuario'];?>
				</td>
                <td><?php echo $row['fecha'];?>
				</td>

			</tr>
<?php }?>
		
