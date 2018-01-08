<?php
include ("conexmsql.php");
$q=$_GET["q"];

$sql="SELECT tipo_doc,nro_doc,co_cli,contrib,fec_emis,fec_venc,nro_fact,observa,tipo,moneda,monto_imp,monto_gen,monto_a1,monto_a2,monto_bru,recargo,monto_rec,monto_otr,monto_net,fe_us_in,co_us_mo FROM docum_cp where nro_doc='$q' and tipo_doc='FACT' and anulado=0";
$ejecutar=odbc_exec($conexion2,$sql);
$ccon=odbc_fetch_array($ejecutar);
//20012700 n factura ejemplo

?>
<?php
	require_once('../lib/pdf/mpdf.php');
	$html="<header class='clearfix'>
      <div id='logo'>
        <img src='img\logo.png'>
      </div>
      <h1>Número de Control   ".$ccon['nro_doc']."</h1>
      <div id='company' class='clearfix'>
        <div>PLATINO RENT A CAR C.A</div>
        <div>RIF J30970885-6<br /> Quinta Raylan</div>
        <div>(0212) 261-5556</div>
        
      </div>
      <div id='project'>
        <div>Departamento de Sistemas</div>
        <div><span>Número de Control   </span>".$ccon['nro_doc']."</div>
        <div><span>Número de Factura   </span>".$ccon['nro_fact']."</div>
        <div><span>Usuario   </span>".$ccon['co_us_mo']."</div>
        <div><span>Moneda   </span>".$ccon['moneda']."</div>
		<div><span>Proveedor   </span>".$ccon['co_cli']."</div>
        <div><span>Fecha de Emisión   </span>".$ccon['fec_emis']."</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class='service'>TIPO</th>
            <th class='desc'>DESCRIPCION</th>
            <th>CANTIDAD</th>
            <th>PRECIO</th>
            <th>NETO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class='service'>".$ccon['tipo_doc']."</td>
            <td class='desc'>".$ccon['observa']."</td>
            <td class='unit'>".$ccon['contrib']."</td>
            <td class='qty'>".$ccon['monto_bru']."</td>
            <td class='total'>".$ccon['monto_bru']."</td>
          </tr>
          <tr>
            <td colspan='4'>SUBTOTAL</td>
            <td class='total'>".$ccon['monto_bru']."</td>
          </tr>
          <tr>
            <td colspan='4'>I.V.A BSF:  </td>
            <td class='total'>".$ccon['monto_imp']."</td>
          </tr>
          <tr>
            <td colspan='4' class='grand total'>TOTAL BSF:  </td>
            <td class='grand total'>".$ccon['monto_net']."</td>
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
	$mpdf->writehtml($html);
	$mpdf->Output('ingresos.pdf', 'I');
?>