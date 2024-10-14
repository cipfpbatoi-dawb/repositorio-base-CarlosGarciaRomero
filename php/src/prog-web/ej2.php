<?php
    session_start();
    $_SESSION['nombre'] = 'Carlos';
    $_SESSION['rol'] = 'Administrador';
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validacion de formularios</title>
</head>
<body>
    <?php
        $usuario = $_SESSION['nombre'];
        $rol = $_SESSION['rol'];

        

        echo "<p>Usuario: $usuario</p>";
        echo "<p>Rol: $rol</p>";
    ?>
</body>
</html>