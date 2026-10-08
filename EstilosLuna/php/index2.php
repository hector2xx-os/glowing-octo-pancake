<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include("conexion.php");

$consulta = "SELECT * FROM prendas";
$resultado = mysqli_query($conexion,$consulta);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Prendas</title>
    <link rel="stylesheet" href="../css/style4.css">
</head>

<body>
<header>

    <h1>ESTILOS LUNA</h1>
    <div class="boton">

<button onclick="location.href='index3.php'">

Registrar Prenda

</button>
<a href="cerrar.php">
    <button class="cerrar">Cerrar sesión</button>
</a>

</div>

   
</header>

<main>

<table border="1">

<tr>

    <th>Imagen</th>
    <th>Nombre</th>
    <th>Modelo</th>
    <th>ID</th>
    <th>Precio</th>
    <th>Talla</th>
    <th>Color</th>

</tr>

<?php

while($fila = mysqli_fetch_assoc($resultado)){

?>

<tr>

<td>

<img src="../uploads/<?php echo $fila['imagen']; ?>" width="120">

</td>

<td><?php echo $fila['nombre']; ?></td>

<td><?php echo $fila['modelo']; ?></td>

<td><?php echo $fila['id_prenda']; ?></td>

<td>$<?php echo $fila['precio']; ?></td>

<td><?php echo $fila['talla']; ?></td>

<td><?php echo $fila['color']; ?></td>

</tr>

<?php

}

?>

</table>

</main>

</body>

</html>