<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

// Definir la ruta correcta para el directorio de carga
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verificar si el archivo ya existe
if (file_exists($target_file)) {
    echo "Lo siento, el archivo ya existe.";
    $uploadOk = 0;
}

// Permitir solo archivos PHP
if ($imageFileType != "php") {
    echo "Lo siento, solo archivos PHP están permitidos.";
    $uploadOk = 0;
}

// Intentar subir el archivo si todo está bien
if ($uploadOk == 0) {
    echo "Lo siento, tu archivo no fue subido.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "El archivo ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " ha sido subido.";
    } else {
        echo "Lo siento, hubo un error subiendo tu archivo.";
    }
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
    <form action="admin.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Selecciona un archivo PHP para subir:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <br>
        <button type="submit" name="submit">Subir Archivo</button>
    </form>
</body>
</html>
