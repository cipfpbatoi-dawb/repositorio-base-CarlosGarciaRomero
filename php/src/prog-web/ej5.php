<?php
        if (isset($_COOKIE ['nombre-usuario'])) {
            $nomUsuario = $_COOKIE['nombre-usuario'];
            
    
            // Modificar el valor de la cookie
            $salutacio = 'Hola, ' . $nomUsuario;
            setcookie('nombre-usuario', $salutacio, time() + 3600, '/');
        } else {
            echo 'Cookie not found';
        }
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validacion de formularios</title> 
</head>
<body>
        <?php
            echo "$salutacio";
        ?>
</body>
</html>