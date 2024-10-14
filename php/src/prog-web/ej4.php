<?php
    setcookie(
        'nombre-usuario',
        'Carlos',
        [
            'expires' => time() + 3600,
            'path' => '/prog-web',
            'domain' => 'localhost',
            'secure' => true,
            'httponly' => true,
            'samesite' => 'Strict'
        ]
    );
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validacion de formularios</title>
</head>
<body>
    <a href='ej4-2.php'>Ir a ej4-2.php</a><br>
    <a href="ej5.php">Ir a ej5.php</a>
</body>
</html>