<?php

$servidor="localhost";
$usuario="root";
$password="";
$bd="estilos_luna";

$conexion = mysqli_connect($servidor,$usuario,$password,$bd);

if(!$conexion){
    die("Error de conexión");
}

?>