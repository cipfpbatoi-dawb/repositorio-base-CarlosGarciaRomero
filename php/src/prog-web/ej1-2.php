<?php
    session_start();
    $usuario = $_SESSION['nombre'];
    $rol = $_SESSION['rol'];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validacion de formularios</title>
</head>
<body>
    <?php
        echo "<p>Usuario: $usuario</p>";
        echo "<p>Rol: $rol</p>";
    ?>
</body>
</html>