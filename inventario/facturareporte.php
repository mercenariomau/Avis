<?php
include ("conexmsql.php");
echo $q=$_GET["q"];

$sql="SELECT tipo_doc,nro_doc,co_cli,contrib,fec_emis,fec_venc,nro_fact,observa,tipo,moneda,monto_imp,monto_gen,monto_a1,monto_a2,monto_bru,recargo,monto_rec,monto_otr,monto_net,fe_us_in,co_us_mo FROM docum_cp where nro_doc='$q' and tipo_doc='FACT' and anulado=0";
$ejecutar=odbc_exec($conexion2,$sql);
$ccon=odbc_fetch_array($ejecutar);
//20012700 n factura ejemplo

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0//EN" "http://www.w3.org/TR/REC-html40/strict.dtd">
<html>
	<head>
		<META http-equiv="Content-Type" content="text/html">
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"><!--
 
    Styles for report # 1  in this run, 
    D:\PROFIT~4\PROFIT~3\REPORADI\fac_form_adicio.FRX-->
			<style type="text/css"><!--.FRX1_19{
				   position:absolute;font-size:1pt;
				  border: 1px  solid 
				 #000000;
				   left: 0in;
					   width: 7.9791667in;
				  height: 1px; margin: 0px;
				   }
				  .FRX1_54{
				   position:absolute;font-size:1pt;
				  border: 2px  solid 
				 #000000;
				   left: 0in;
					   width: 7.9895833in;
				  height: 1px; margin: 0px;
				   }
				  .FRX1_66{
				   position:absolute;font-size:1pt;
				  border: 2px  solid 
				 #000000;
				   left: 0in;
					   width: 7.9895833in;
				  height: 1px; margin: 0px;
				   }
				  .FRX1_67{
				   position:absolute;font-size:1pt;
				  border: 2px  solid 
				 #000000;
				   left: 0in;
					   width: 7.9895833in;
				  height: 1px; margin: 0px;
				   }
				  .FRX1_68{
				   position:absolute;font-size:1pt;
				  border: 2px  solid 
				 #000000;
				   left: 0in;
					   width: 7.9895833in;
				  height: 1px; margin: 0px;
				   }
				  .FRX1_69{
				   position:absolute;font-size:1pt;
				  border: 1px  solid 
				 #000000;
				   left: 0.010416700000000001in;
					   width: 7.9791667in;
				  height: 1px; margin: 0px;
				   }
				  .FRX1_84{
				   position:absolute;font-size:1pt;
				  border: 1px  solid 
				 #000000;
				   left: 4.8125in;
					   width: 2.4270833in;
				  height: 1px; margin: 0px;
				   }
				  .FRX1_10{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: bold;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_11{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_12{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_13{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_14{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 8pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow: auto;
					 margin-top:4px;
					
				   position: absolute;
				   }
				  .FRX1_15{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_16{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_17{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_18{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_20{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_21{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_22{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_23{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_24{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_25{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 8pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_26{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 8pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_27{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_28{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_29{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_30{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_31{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_32{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_33{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_34{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_35{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_36{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_37{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_38{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: bold;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_39{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: bold;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_40{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: bold;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_41{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_42{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_43{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_44{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_45{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_46{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_47{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_48{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_49{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_50{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_51{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_52{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_53{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_55{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_56{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_57{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_58{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_59{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_60{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_61{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_62{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_63{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_64{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_65{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_70{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_71{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_72{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_73{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_74{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_75{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_76{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: bold;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_77{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_78{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_79{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 9pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_80{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_81{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_82{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_83{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_85{
				  
				  text-align:right;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Arial Narrow;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  .FRX1_86{
				  
				  text-align:left;
					direction:ltr;  
				   vertical-align: top;
				   font-family: Courier New;
				   font-size: 10pt;
				   border: 0px none;
				  padding: 0px;
				  margin: 0px;
				  font-weight: normal;
				   color:
				 #000000;
				 
				  background-color:transparent;
				  
					 overflow:hidden;
					
				   position: absolute;
				   }
				  -->
		</style>
		<title>FACTURA</title>
	</head>
			<body>
				<div style=" width:100%;top:0in;page-break-after:always;page-break-inside:avoid; position:absolute; ">
					<div style="position: absolute;z-Index:1;top:2.19792in;left:5.77083in;width:0.90625in;height:0.17708in;" class="FRX1_20"></div>
					<div style="position: absolute;z-Index:2;top:1.26042in;left:1.34375in;width:6.05208in;height:0.17708in;" class="FRX1_21">PLATINO RENT A CAR C.A.</div>
					<div style="position: absolute;z-Index:3;top:1.83333in;left:6.47917in;width:1.11458in;height:0.17708in;" class="FRX1_22"><?php echo $ccon["nro_doc"]; ?></div>
					<div style="position: absolute;z-Index:4;top:1.61458in;left:0.98958in;width:2.11458in;height:0.17708in;" class="FRX1_23"></div>
					<div style="position: absolute;z-Index:5;top:1.83333in;left:5.33333in;width:1.16667in;height:0.16667in;" class="FRX1_24"> Orden Nro.:</div>
					<div style="position: absolute;z-Index:6;top:1.92708in;left:0.54167in;width:4.61458in;height:0.51042in;" class="FRX1_28">QUINTA RAYLAN</div>
					<div style="position: absolute;z-Index:7;top:2.02083in;left:5.555in;width:1.11458in;height:0.17708in;" class="FRX1_29">Factura Nro.:</div>
					<div style="position: absolute;z-Index:8;top:2.02083in;left:6.42708in;width:1.16667in;height:0.16667in;" class="FRX1_30"><?php echo $ccon["nro_fact"]; ?></div>
					<div style="position: absolute;z-Index:9;top:3.41667in;left:0.29167in;width:1.08333in;height:0.16667in;" class="FRX1_31"></div>
					<div style="position: absolute;z-Index:10;top:3.41667in;left:1.47917in;width:1.51042in;height:0.17708in;" class="FRX1_32"></div>
					<div style="position: absolute;z-Index:11;top:3.59375in;left:0.005in;width:1.5in;height:0.16667in;" class="FRX1_33">Fecha Entrada:</div>
					<div style="position: absolute;z-Index:12;top:3.59375in;left:0.6in;width:3.0in;height:0.17708in;" class="FRX1_34"><?php echo $ccon["fec_emis"]; ?></div>
					<div style="position: absolute;z-Index:13;top:3.32292in;left:5.03125in;width:1.75000in;height:0.16667in;" class="FRX1_35"></div>
					<div style="position: absolute;z-Index:14;top:3.45833in;left:5.43750in;width:0.41667in;height:0.16667in;" class="FRX1_36"></div>
					<div style="position: absolute;z-Index:15;top:3.59375in;left:4.77083in;width:1.08333in;height:0.16667in;" class="FRX1_37"></div>
					<div style="position: absolute;z-Index:16;top:3.84375in;left:0.88542in;width:1.50000in;height:0.16667in;" class="FRX1_38"></div>
					<div style="position: absolute;z-Index:17;top:3.84375in;left:1.76042in;width:2.75000in;height:0.16667in;" class="FRX1_39">INFO GENERAL</div>
					<div style="position: absolute;z-Index:18;top:3.84375in;left:6.43750in;width:0.66667in;height:0.16667in;" class="FRX1_40"></div>
					<div style="position: absolute;z-Index:19;top:4.04167in;left:0.31250in;width:0.65000in;height:0.16667in;" class="FRX1_41">Usuario:</div>
					<div style="position: absolute;z-Index:20;top:4.37500in;left:0.31250in;width:0.50000in;height:0.16667in;" class="FRX1_42">Proveedor:</div>
					<div style="position: absolute;z-Index:21;top:4.21875in;left:0.31250in;width:0.58333in;height:0.16667in;" class="FRX1_43">Moneda:</div>
					<div style="position: absolute;z-Index:22;top:4.72917in;left:0.31250in;width:0.50000in;height:0.16667in;" class="FRX1_44"></div>
					<div style="position: absolute;z-Index:23;top:4.54167in;left:0.30208in;width:0.75000in;height:0.16667in;" class="FRX1_45"></div>
					<div style="position: absolute;z-Index:24;top:4.03125in;left:1.10417in;width:1.61458in;height:0.17708in;" class="FRX1_46"><?php echo $ccon["co_us_mo"]; ?></div>
					<div style="position: absolute;z-Index:25;top:4.20833in;left:1.10417in;width:1.61458in;height:0.17708in;" class="FRX1_47"><?php echo $ccon["moneda"]; ?></div>
					<div style="position: absolute;z-Index:26;top:4.38542in;left:1.10417in;width:1.61458in;height:0.17708in;" class="FRX1_48"><?php echo $ccon["co_cli"]; ?></div>
					<div style="position: absolute;z-Index:27;top:4.56250in;left:1.10417in;width:1.61458in;height:0.17708in;" class="FRX1_49"></div>
					<div style="position: absolute;z-Index:28;top:4.75000in;left:1.10417in;width:1.62500in;height:0.34375in;" class="FRX1_50"></div>
					<div style="position: absolute;z-Index:29;top:4.38542in;left:3.07292in;width:30.35417in;height:0.17708in;" class="FRX1_51"></div>
					<div style="position: absolute;z-Index:30;top:4.39583in;left:6.5in;width:2.35417in;height:0.17708in;" class="FRX1_52"></div>
					<div style="position: absolute;z-Index:31;top:3.46875in;left:5.69792in;width:0.76042in;height:0.17708in;" class="FRX1_64"></div>
					<div style="position: absolute;z-Index:32;top:3.60417in;left:5.69792in;width:0.76042in;height:0.17708in;" class="FRX1_65"></div>
					<hr class="FRX1_66" style="top:3.79167in;left:0.16667in;height:0.02083in;z-Index:33;">
					<hr class="FRX1_67" style="top:3.98958in;left:0.16667in;height:0.02083in;z-Index:34;">
					<hr class="FRX1_68" style="top:5.10417in;left:0.16667in;height:0.02083in;z-Index:35;">
					<div style="position: absolute;z-Index:36;top:2.98958in;left:0.29167in;width:0.75000in;height:0.16667in;" class="FRX1_70"></div>
					<div style="position: absolute;z-Index:37;top:3.03125in;left:1.13542in;width:6.91667in;height:0.17708in;" class="FRX1_71"></div>
					<div style="position: absolute;z-Index:38;top:0.20833in;left:5.71875in;width:2.35417in;height:0.32292in;" class="FRX1_77">Caracas Departamento de Sistemas</div>
					<div style="position: absolute;z-Index:39;top:0.55208in;left:5.71875in;width:2.35417in;height:0.32292in;" class="FRX1_78"></div>
					<div style="position: absolute;z-Index:40;top:0.89583in;left:5.71875in;width:2.35417in;height:0.32292in;" class="FRX1_79"></div>
					<div style="position: absolute;z-Index:41;top:1.42708in;left:1.54167in;width:3.91667in;height:0.17708in;" class="FRX1_80">J30970885-6</div>
					<div style="position: absolute;z-Index:42;top:1.4in;left:5.71875in;width:2.0in;height:0.17708in;" class="FRX1_81">Sistema de Inventario</div>
					<div style="position: absolute;z-Index:43;top:2.33333in;left:6.61458in;width:0.90625in;height:0.17708in;" class="FRX1_82"></div>
					<div style="position: absolute;z-Index:1;top:5.19792in;left:5.28125in;width:0.26042in;height:0.16667in;" class="FRX1_15">Cant.</div>
					<div style="position: absolute;z-Index:2;top:5.19792in;left:0.41667in;width:0.35417in;height:0.16667in;" class="FRX1_16">Tipo</div>
					<div style="position: absolute;z-Index:3;top:5.19792in;left:7.45833in;width:0.22917in;height:0.16667in;" class="FRX1_17">Neto</div>
					<div style="position: absolute;z-Index:4;top:5.19792in;left:6.21875in;width:0.56250in;height:0.16667in;" class="FRX1_18">Precio Unit.</div>
					<hr class="FRX1_19" style="top:5.38542in;left:0.16667in;height:0in;z-Index:5;">
					<div style="position: absolute;z-Index:6;top:5.19792in;left:2.65625in;width:0.57292in;height:0.16667in;" class="FRX1_27">Descripción</div>
					<hr class="FRX1_69" style="top:5.38542in;left:0.17708in;height:0in;z-Index:7;">
					<div style="position: absolute;z-Index:1;top:5.42708in;left:6.95833in;width:1.12500in;height:0.17708in;" class="FRX1_11"></div>
					<div style="position: absolute;z-Index:2;top:5.42708in;left:5.84375in;width:1.04167in;height:0.17708in;" class="FRX1_13"></div>
					<textarea readonly rows="0" cols="0" style="height:0.16667in;top:5.32708in;left:1.12500in;width:3.64583in;z-Index:3;" class="FRX1_14"></textarea>
					<div style="position: absolute;z-Index:4;top:5.42708in;left:0.26042in;width:0.83333in;height:0.16667in;" class="FRX1_25"></div>
					<div style="position: absolute;z-Index:5;top:5.42708in;left:0.26042in;width:0.82292in;height:0.16667in;" class="FRX1_26"></div>
					<div style="position: absolute;z-Index:6;top:5.42708in;left:4.71875in;width:1.04167in;height:0.17708in;" class="FRX1_72"></div>
					<div style="position: absolute;z-Index:1;top:5.55in;left:6.95833in;width:1.12500in;height:0.17708in;" class="FRX1_11"><?php echo $ccon["monto_bru"]; ?></div>
					<div style="position: absolute;z-Index:2;top:5.55in;left:5.84375in;width:1.04167in;height:0.17708in;" class="FRX1_13"><?php echo $ccon["monto_bru"]; ?></div>
					<textarea readonly rows="0" cols="0" style="height:0.16667in;top:5.50417in;left:1.12500in;width:3.64583in;z-Index:3;" class="FRX1_14"><?php echo $ccon["observa"]; ?></textarea>
					<div style="position: absolute;z-Index:4;top:5.55in;left:0.26042in;width:0.83333in;height:0.16667in;" class="FRX1_25"><?php echo $ccon["tipo_doc"]; ?></div>
					<div style="position: absolute;z-Index:5;top:5.60417in;left:0.26042in;width:0.82292in;height:0.16667in;" class="FRX1_26"></div>
					<div style="position: absolute;z-Index:6;top:5.55in;left:4.36in;width:1.04167in;height:0.17708in;" class="FRX1_72"><?php echo $ccon["contrib"]; ?></div>
					<div style="position: absolute;z-Index:1;top:5.78125in;left:6.95833in;width:1.12500in;height:0.17708in;" class="FRX1_11"></div>
					<div style="position: absolute;z-Index:2;top:5.78125in;left:5.84375in;width:1.04167in;height:0.17708in;" class="FRX1_13"></div>
					<textarea readonly rows="0" cols="0" style="height:0.16667in;top:5.68125in;left:1.12500in;width:3.64583in;z-Index:3;" class="FRX1_14"></textarea>
					<div style="position: absolute;z-Index:4;top:5.78125in;left:0.26042in;width:0.83333in;height:0.16667in;" class="FRX1_25"></div>
					<div style="position: absolute;z-Index:5;top:5.78125in;left:0.26042in;width:0.82292in;height:0.16667in;" class="FRX1_26"></div>
					<div style="position: absolute;z-Index:6;top:5.78125in;left:4.71875in;width:1.04167in;height:0.17708in;" class="FRX1_72"></div>
					<div style="position: absolute;z-Index:1;top:6.55208in;left:3.96875in;width:4.11458in;height:0.17708in;" class="FRX1_10"><?php echo $ccon["monto_net"]; ?></div>
					<div style="position: absolute;z-Index:2;top:6.03125in;left:7.04167in;width:1.04167in;height:0.17708in;" class="FRX1_61"><?php echo $ccon["monto_bru"]; ?></div>
					<div style="position: absolute;z-Index:3;top:6.20833in;left:7.04167in;width:1.04167in;height:0.17708in;" class="FRX1_62">0</div>
					<div style="position: absolute;z-Index:4;top:6.38542in;left:6.08333in;width:1.97917in;height:0.17708in;" class="FRX1_63"><?php echo $ccon["monto_imp"]; ?></div>
					<div style="position: absolute;z-Index:5;top:6.03125in;left:4.64583in;width:2.35417in;height:0.17708in;" class="FRX1_73">Sub-Total Gravables BSF:</div>
					<div style="position: absolute;z-Index:6;top:6.20833in;left:4.64583in;width:2.35417in;height:0.17708in;" class="FRX1_74">Sub-Total Exento BSF:</div>
					<div style="position: absolute;z-Index:7;top:6.38542in;left:4.64583in;width:2.35417in;height:0.17708in;" class="FRX1_75">I.V.A BSF:</div>
					<div style="position: absolute;z-Index:8;top:6.56250in;left:4.95833in;width:2.04167in;height:0.17708in;" class="FRX1_76">Total BSF:</div>
					<hr class="FRX1_54" style="top:6.73958in;left:0.16667in;height:0.02083in;z-Index:1;">
					<div style="position: absolute;z-Index:2;top:6.78125in;left:0.35417in;width:0.66667in;height:0.16667in;" class="FRX1_55"></div>
					<div style="position: absolute;z-Index:1;top:7.14583in;left:7.32292in;width:0.76042in;height:0.17708in;" class="FRX1_12"></div>
					<div style="position: absolute;z-Index:2;top:7.15625in;left:0.37500in;width:0.76042in;height:0.17708in;" class="FRX1_56"></div>
					<div style="position: absolute;z-Index:3;top:7.15625in;left:1.30208in;width:2.41667in;height:0.17708in;" class="FRX1_57"></div>
					<div style="position: absolute;z-Index:4;top:7.15625in;left:4.82292in;width:0.34375in;height:0.16667in;" class="FRX1_58"></div>
					<div style="position: absolute;z-Index:5;top:7.15625in;left:5.19792in;width:0.57292in;height:0.17708in;" class="FRX1_59"></div>
					<div style="position: absolute;z-Index:6;top:7.14583in;left:6.82292in;width:0.33333in;height:0.16667in;" class="FRX1_60"></div>
					<div style="position: absolute;z-Index:1;top:8.23958in;left:5.22917in;width:1.91667in;height:0.16667in;" class="FRX1_83"></div>
					
					<div style="position: absolute;z-Index:3;top:8.15625in;left:1.37500in;width:2.35417in;height:0.17708in;" class="FRX1_86"></div>
				</div>
			</body>
</html>
