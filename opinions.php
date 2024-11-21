<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("clases/sql.php");
    $objetoSQL = new sql();

    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];
    $calificacion = $_POST['calificacion'];

    // Manejo de la imagen
    $imagen = $_FILES['imagen']['name'];
    $destino = "img/usuarios/" . basename($imagen);
    move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);

    // Insertar el comentario en la base de datos
    $sql = "INSERT INTO comentarios (nombre, imagen, comentario, calificacion) VALUES ('$nombre', '$imagen', '$comentario', '$calificacion')";
    $objetoSQL->sentencia($sql);

    // Redirigir a la página de opiniones
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesopinions.css">
    <title>Document</title>
</head>
<body>
    <div class="login-header">
        <a href="index.php" class="login-header">
            <img src="img/fragmento_header.png" alt="Logotipo de FRAGMENTO" title="Logotipo de FRAGMENTO" class="login-logo">
        </a>
    </div>
    <form action="" method="POST" enctype="multipart/form-data" class="opinions-form">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <input type="file" name="imagen" required>
        <textarea name="comentario" placeholder="Escribe tu comentario" required></textarea>
        <input type="number" name="calificacion" placeholder="Calificación (1-5)" required min="1" max="5">
        <button type="submit">Enviar comentario</button>
    </form>
</body>
</html>