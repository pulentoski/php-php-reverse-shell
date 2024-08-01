<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
</head>
<body>
    <h2>Panel de Administración</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Selecciona un archivo para subir:</label>
        <input type="file" name="file" id="file">
        <br>
        <button type="submit" name="upload">Subir Archivo</button>
    </form>
</body>
</html>
