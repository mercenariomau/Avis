

<?php
include ("conexion.php");
$q=$_GET["q"];
//20012700 n factura ejemplo
$sql="select *,concat(DATE_FORMAT(fecha,'%d/%m/%Y %r'),'<br>') as fecha2,concat(DATE_FORMAT(fecha_mp,'%d/%m/%Y %r')) as fecha_mp2 from avisso.mantenimiento_preventivo a,avisso.talleres b,avisso.flota c,avisso.localidad d where id_mp='$q' and a.id_t=b.id_t and c.flota=a.flota and a.id_localidad=d.id_localidad";
$respuesta=mysql_query($sql,$conexion);
$row=mysql_fetch_array($respuesta);


$flota=$row['flota'];
//traer usuario de extranet
$sql2="select * from avisso.control_cambios where accion_cc like '%$q%' order by 2 desc limit 1";
$respuesta2=mysql_query($sql2,$conexion);
$row2=mysql_fetch_array($respuesta2);
$u=$row2['usuario_cc'];

$sql3="select * from control.usuarios where usuario='$u'";
$respuesta3=mysql_query($sql3,$conexion);
$row3=mysql_fetch_array($respuesta3);

$query22="select * from templete.movimientos where flota='$flota' order by fecha_mov desc";
$resultado2=mysql_query($query22,$conexion) or die("Error al realizar consulta SQL.");
$rowre=mysql_fetch_array($resultado2);

$usuariore=$rowre['usuario'];
$mov=$rowre['Movimiento'];
if($mov=="1")
{
	$estado="Disponible";
}
else if($mov=="2")
{
	$estado="Alquilado";
}
else if($mov=="3")
{
	$estado="Fuera de Servicio";
}
else if($mov=="4")
{
	$estado="Prestamo";
}
else if($mov=="5")
{
	$estado="En Venta";
}

$te="select * from control.usuarios where id_u='$usuariore'"; 
$ter=mysql_query($te,$conexion) or die("Error en query SQL."); 
$terr=mysql_fetch_array($ter);
$ste="select a.id,c.usuario as solicitante,a.usuario as aprobatorio,a.mov,a.tipo,b.n_fac_orden,b.permiso,a.fecha,DATE_FORMAT(a.fecha,'%d/%m/%Y %r') as fecha2 from aprobado a, movimiento b, movimiento_resp c where a.mov=b.id_mov and b.id_mov=c.id_mov and b.n_fac_orden='$q'
union all
select 'PENDIENTE',c.usuario as solicitante,'PENDIENTE','PENDIENTE','PENDIENTE',b.n_fac_orden,b.permiso,b.fecha,DATE_FORMAT(b.fecha,'%d/%m/%Y %r') as fecha2 from movimiento b, movimiento_resp c where b.id_mov=c.id_mov and b.n_fac_orden='$q'"; 
$ster=mysql_query($ste,$conexion) or die("Error en query SQL."); 
$sterr=mysql_fetch_array($ster);
$permiso=$sterr["permiso"];
if($permiso=="1")
{
	$permiso2="Pendiente";
}
else if($permiso=="2")
{
	$permiso2="Rechazado";
}
else if($permiso=="3")
{
	$permiso2="Aprobado";
}
?>
<?php 
if($row['frenos']=='0'){$frenos="NO";} else{$frenos="SI";}
if($row['aceite']=='0'){$aceite="NO";} else{$aceite="SI";}
if($row['Alineacion']=='0'){$alineacion="NO";} else{$alineacion="SI";}
if($row['filtro']=='0'){$filtro="NO";} else{$filtro="SI";}
if($row['lavado']=='0'){$lavado="NO";} else{$lavado="SI";}
if($row['operaciones']=='0'){$operaciones="NO";} else{$operaciones="SI";}
if($row['status']=='0'){$status="Abierta";} else{$status="Cerrada";}

	require_once('../lib/pdf/mpdf.php');
	$html="<header class='clearfix'>
      <div id='logo'>
        <img src='img\logo.png'>
      </div>
      <h1>N&uacute;mero de Orden   ".$row['id_mp']."</h1>
      <div id='company' class='clearfix'>
        <div>PLATINO RENT A CAR C.A</div>
        <div>RIF J30970885-6<br /> Quinta Raylan</div>
        <div>(0212) 261-5556</div>
        
      </div>
      <div id='project'>
        <div>Departamento de Sistemas</div>
        <div><span>N&uacute;mero de Orden:   </span>".$row['id_mp']."</div>
        <div><span>N&uacute;mero: de Factura:   </span>".$row['n_factura_mp']."</div>
        <div><span>Marca:   </span>".$row['marca']."</div>
        <div><span>Modelo:   </span>".$row['modelo']."</div>
		<div><span>Modelo:   </span>".$row['placa']."</div>
		<div><span>Flota:   </span>".$row['flota']."</div>
		<div><span>Km:   </span>".$row['kilometraje_mp']."</div>
		<div><span>Taller:   </span>".$row['Taller']."</div>
		<div><span>Estaci&oacute;n:   </span>".$row['nombre']."</div>
		<div><span>Fecha de Apertura:   </span>".$row['fecha2']."</div>
        <div><span>Fecha de Cierre:   </span>".$row['fecha_mp2']."</div>
		<div><span>Status de Orden:   </span>".$status."</div>
		<div><span>&Uacute;ltimo Usuario Extranet:   </span>".$row3['nombre']." <b>(".$row2['usuario_cc'].")</b></div>
		<div><span>Mov Templete:   </span>".$terr['nombre']." <b>(".$terr['usuario'].") (".$estado.")</b></div>
		<div><span>Sist. Inventario Solicitante:   </span><b> (".$sterr['solicitante'].")</b></div>
		<div><span>Sist. Inventario Aprobatorio:   </span><b>(".$sterr['aprobatorio'].")</b></div>
		<div><span>Sist. Inventario Mov.:   </span><b> (".$sterr['mov'].")</b></div>
		<div><span>Sist. Inventario Tipo Status:   </span><b> (".$sterr['tipo'].")</b></div>
		<div><span>Sist. Inventario ID REG STATUS:   </span><b>  ".$sterr['id']." </b></div>
		<div><span>Sist. Inventario # Orden:   </span><b> (".$sterr['n_fac_orden'].")</b></div>
		<div><span>Sist. Inventario Permiso:   </span> <b>(".$permiso2.")</b></div>
		<div><span>Sist. Inventario Fecha:   </span><b> (".$sterr['fecha2'].")</b></div>
      </div>
    </header>
    <main>
		<table>
		<thead>
			 <tr>
				<th>OPERACIONES</th>
				<th>FRENOS</th>
				<th>ACEITE</th>
				<th>ALINEACI&Oacute;N</th>
				<th>FILTRO</th>
				<th>LAVADO</th>
			  </tr>
		</thead>
		<tbody>
			<tr>
				<td class='check'>".$operaciones."</td>
				<td class='check'>".$frenos."</td>
				<td class='check'>".$aceite."</td>
				<td class='check'>".$alineacion."</td>
				<td class='check'>".$filtro."</td>
				<td class='check'>".$lavado."</td>
			</tr>
		</tbody>
      </table>
	  <table>
        <thead>
          <tr>
            <th class='desc'>DESCRIPCION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class='service'>".$row["descrip_mp"]."</td>
          </tr>
        </tbody>
	</table>
      <div id='notices'>
        <div><class='notice'></div>
      </div>
    </main>
    <footer>
      <div>
			<ul>
				<li>&copy; 2017 PLATINO RENT A CAR.C.A</li><li>Diseño: Mauricio Fuentes</li>
			</ul>
		</div>
    </footer>
  
  ";
	$mpdf=new mpdf('c','A4');
	$css= file_get_contents('css/style.css');
	$mpdf->writehtml($css, 1);
	$mpdf->writehtml(utf8_encode($html));
	$mpdf->Output('ordenreporte.pdf', 'I');
?>