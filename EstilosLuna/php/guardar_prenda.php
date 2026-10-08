<?php
include("conexion.php");

$mensaje = "";
$exito = false;

if(isset($_POST['nombre'])){

    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $id_prenda = $_POST['id_prenda'];
    $precio = $_POST['precio'];
    $talla = $_POST['talla'];
    $color = $_POST['color'];

    $imagen = "";

    if(isset($_FILES['imagen']) && $_FILES['imagen']['error']==0){

        $imagen = $_FILES['imagen']['name'];
        $tmp = $_FILES['imagen']['tmp_name'];

        $carpeta = __DIR__."/../uploads/";

        if(!file_exists($carpeta)){
            mkdir($carpeta,0777,true);
        }

        move_uploaded_file($tmp,$carpeta.$imagen);
    }

    $sql="INSERT INTO prendas
    (id_prenda,nombre,modelo,precio,talla,color,imagen)
    VALUES
    ('$id_prenda','$nombre','$modelo','$precio','$talla','$color','$imagen')";

    if(mysqli_query($conexion,$sql)){
        $mensaje="Se guardó con éxito";
        $exito=true;
    }else{
        $mensaje="Error al guardar";
    }

}else{
    $mensaje="Faltan datos";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Guardar</title>
<link rel="stylesheet" href="/EstilosLuna/css/guardar.css">
</head>

<body>

<div class="contenedor">

<h1><?php echo $mensaje; ?></h1>

<a href="index2.php" class="boton">
Regresar al inicio
</a>

</div>

</body>
</html>