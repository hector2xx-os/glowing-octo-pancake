<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios(nombre,usuario,correo,password)
VALUES('$nombre','$usuario','$correo','$password')";

?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Registro</title>

<style>

body{
    margin:0;
    padding:0;
    background:#f4f4f4;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:Arial;
}

.contenedor{
    background:white;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0px 0px 15px rgba(0,0,0,.2);
}

h1{
    color:#28a745;
}

.boton{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#ff4d6d;
    color:white;
    padding:12px 25px;
    border-radius:10px;
}

.boton:hover{
    opacity:.8;
}

</style>

</head>

<body>

<div class="contenedor">

<?php

if(mysqli_query($conexion,$sql)){
    echo "<h1>Usuario registrado correctamente</h1>";
}else{
    echo "<h1>Error al registrar usuario</h1>";
}

?>

<a href="../index1.html" class="boton">
Regresar al inicio
</a>

</div>

</body>
</html>