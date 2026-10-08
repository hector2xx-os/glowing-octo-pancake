<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar Prenda</title>
    <link rel="stylesheet" href="../css/style5.css">
</head>

<body>

<header>
    <h1>Registrar Prenda</h1>
</header>

<main>

<form action="guardar_prenda.php" method="POST" enctype="multipart/form-data">

    <label>Imagen</label>
    <input type="file" name="imagen" required>

    <br><br>

    <label>Nombre</label>
    <input type="text" name="nombre" required>

    <br><br>

    <label>Modelo</label>
    <input type="text" name="modelo" required>

    <br><br>

    <label>ID</label>
    <input type="text" name="id_prenda" required>

    <br><br>

    <label>Precio</label>
    <input type="number" name="precio" step="0.01" required>

    <br><br>

    <label>Talla</label>
    <input type="text" name="talla" required>

    <br><br>

    <label>Color</label>
    <input type="text" name="color" required>

    <br><br>

    <div class="botones">
        <button type="submit">Guardar</button>

        <button type="button" onclick="location.href='index2.php'">
            Volver
        </button>
    </div>

</form>

</main>

</body>

</html>