<?php

include("conexion.php");

$usuario=$_POST['usuario'];
$password=$_POST['password'];

$sql="SELECT * FROM usuarios WHERE usuario='$usuario'";

$resultado=mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado)>0){

    $fila=mysqli_fetch_assoc($resultado);

    if(password_verify($password,$fila['password'])){

        header("Location:index2.php");

    }else{

        echo "Contraseña incorrecta";

    }

}else{

    echo "Usuario no encontrado";

}

?>