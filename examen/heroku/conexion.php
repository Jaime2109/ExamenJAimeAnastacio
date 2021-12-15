<?php
$host = "localhost";
$basededatos = "autos";
$usuariodb = "localhost";
$clavedb = "";

$tabla_db1 = "domicilio";

error_reporting(0);

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

if ($conexion->connect_errno){
    echo "Servidor Presenta Fallas";
    exit();
}
?>