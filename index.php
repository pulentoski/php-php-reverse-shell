<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Valores de login hardcodeados para el ejemplo
    $valid_username = "admin";
    $valid_password = "password";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .banner {
            border: 1px solid black;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
        }
        .footer {
            border: 1px solid black;
            padding: 10px;
            margin-top: 20px;
            background-color: #f0f0f0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="banner">
        <h3>¿Qué es el protocolo ARP?</h3>
        <p>El Protocolo de Resolución de Direcciones (ARP) se utiliza para mapear una dirección IP a una dirección MAC reconocida en la red local.</p>
        
        <h3>¿Qué es ARP Spoofing?</h3>
        <p>ARP Spoofing es una técnica donde un atacante envía mensajes ARP falsos en una red local. Esto resulta en la vinculación de la dirección MAC del atacante con la dirección IP de una computadora o servidor legítimo en la red.</p>
        
        <h3>¿Qué es un ataque Man in the Middle?</h3>
        <p>Un ataque Man in the Middle (MITM) ocurre cuando un atacante intercepta y posiblemente altera la comunicación entre dos partes que creen estar comunicándose directamente entre sí.</p>

        <h3>Relación entre ARP Spoofing y MITM</h3>
        <p><strong>Intercepción del Tráfico:</strong> Utilizando ARP spoofing, el atacante puede engañar a los dispositivos en la red para que envíen su tráfico a la dirección MAC del atacante en lugar de la dirección MAC legítima. Esto le permite al atacante interceptar el tráfico de red entre dos dispositivos.</p>
        <p><strong>Posicionamiento en el Medio:</strong> Una vez que el atacante ha logrado interceptar el tráfico utilizando ARP spoofing, puede posicionarse "en el medio" de la comunicación entre dos dispositivos. Esto es esencialmente lo que define un ataque MITM.</p>
        <p><strong>Modificación y Reenvío del Tráfico:</strong> Después de interceptar el tráfico, el atacante puede modificarlo o simplemente monitorizarlo antes de reenviarlo a su destino original. Las víctimas continúan creyendo que están comunicándose directamente entre ellas, mientras que el atacante tiene control sobre la comunicación.</p>

        <h3>Pista</h3>
        <p>pista, para obtener las credenciales, ponte al medio.</p>
    </div>

    <h2>Login</h2>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="post" action="index.php">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>

    <div class="footer">
        <p>CTF creado por Daniel Ruz Moreno, Docente académico INACAP</p>
    </div>
</body>
</html>
