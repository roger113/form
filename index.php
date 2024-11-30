<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Básico</title>
</head>
<body>
    <h1>Formulario de Ejemplo</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']); // Sanitiza la entrada del usuario
        $correo = htmlspecialchars($_POST['correo']);

        echo "<p style='color: green;'>¡Formulario enviado correctamente!</p>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Correo:</strong> $correo</p>";
    }
    ?>
    <form method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo Electrónico:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
