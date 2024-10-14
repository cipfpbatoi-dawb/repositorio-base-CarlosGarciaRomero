<?php
    session_start();
    $_SESSION['nombre'] = 'Carlos';
    $_SESSION['rol'] = 'Administrador';

    //ELIMINA LAS VARIABLES DE SESION
    session_unset();

    //DESTRUYE LA SESION(EN TEORIA)
    session_destroy();
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validacion de formularios</title>
</head>
<body>
    
</body>
</html>