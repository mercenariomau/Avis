<?php

$host="localhost";
$user="root";
$pass="";

$conexion=mysql_connect($host, $user, $pass) or die("error de conexion a host");
mysql_select_db('inventario') or die("error al seleccionar DB");


?>