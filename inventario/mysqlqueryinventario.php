	<?php
		include("conexion.php");
		include("conexmsql.php");

		//select de inventario
		$query1="select c.vehiculo, b.categoria,sum(a.cantidad) as cantidad, a.descripcion as des,a.vehiculo as vehi,a.descripcion as descr from movimiento a, categoria b, vehiculo c where a.descripcion=b.id_categ and a.permiso='3' and a.tipo_mov='0' and a.vehiculo=c.id_vehi group by c.vehiculo, b.categoria, a.descripcion,a.vehiculo,a.descripcion order by c.vehiculo asc";
		$respuesta=mysql_query($query1,$conexion) or die("Error en SELECT SQL1.");
		//select de profit
		/*$sql="SELECT * FROM docum_cp where nro_doc='20012700' and tipo_doc='FACT' and anulado=0";
		$ejecutar=odbc_exec($conexion2,$sql);
		$ccon=odbc_fetch_array($ejecutar);*/	
	?>
	<?php
		while($row=mysql_fetch_array($respuesta))
		{
		$variable=$row['des'];
		$variable2=$row['vehi'];
		
		//select de resta de inventario
		$query2="select sum(a.cantidad) as cantidad from movimiento a, categoria b, vehiculo c where a.descripcion=b.id_categ and a.permiso='3' and a.tipo_mov='1' and a.descripcion='$variable' and a.vehiculo='$variable2' and a.vehiculo=c.id_vehi order by c.vehiculo asc";
		$respuesta2=mysql_query($query2,$conexion) or die("Error en SELECT SQL2.");
		
		//select de ultimo precio
		$vehiculo=$row['vehi'];
		$categoria=$row['descr'];
		$query3="select precio from movimiento where vehiculo='$vehiculo' and descripcion='$categoria' order by id_mov desc limit 1";
		$respuesta3=mysql_query($query3,$conexion) or die("Error en SELECT SQL3.");
		
		//operacion de resta de sql1 y sql2
		$busqueda=mysql_fetch_array($respuesta2);
		$total=$row['cantidad']-$busqueda['cantidad'];
		
		$row2=mysql_fetch_array($respuesta3);
		$suma=$row2['precio']*$total;
		$contador1=$contador1+$suma;
		$contador2=$contador2+$row2['precio'];
		$contador3=$contador3+$total;
		?>
					<tr>
						<td><?php echo $row['vehiculo'];?>
						</td>
						<td><?php echo $row['categoria'];?>
						</td>
						<td><?php echo $total;?>
						</td>
						<td><?php echo $row2['precio'];?>
						</td>
						<td><?php echo $row2['precio']*$total;?>
						</td>
					</tr>
				<?php 
				
			}
		?>
					<tr>
						<td>
						</td>
						<td><b>Total:</b>
						</td>
						<td><?php echo $contador3;?>
						</td>
						<td><?php echo $contador2;?>
						</td>
						<td><?php echo $contador1;?>
						</td>
					</tr>
