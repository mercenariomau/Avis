<?php

include ("conexion.php");
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


$query="select * from usuarios where usuario='$usuario' and clave='$clave'";
$respuesta=mysql_query($query,$conexion) or die("Error al conexion con MYSQL E INSERT SQL.");

$num=mysql_num_rows($respuesta);
$var=mysql_fetch_array($respuesta);
if($num>0)
{
	
	
	$_SESSION['inventario']=$var;
	header("Location: main.php");
}	
	else
{
	
	header("Location: index.php?q=1");
}
?>