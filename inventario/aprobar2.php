<?php
include ("conexion.php");
session_start();
$usuario=$_SESSION['inventario']['usuario'];
$q=$_POST['q'];
		$query1="update movimiento set permiso='3' where id_mov='$q'";
		$respuesta1=mysql_query($query1,$conexion) or die("Error en SELECT SQL1.");
		$query2="insert into aprobado(usuario,mov,tipo) values('$usuario','$q','Aprobado')";
		$respuesta2=mysql_query($query2,$conexion) or die("Error en SELECT SQL2.");
		header("Location: enespera.php?q=1");
?>
