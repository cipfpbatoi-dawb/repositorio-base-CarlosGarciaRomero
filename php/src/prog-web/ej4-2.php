<?php
    //recoge la cookie pasada en el ej4.php en una variable

    $usuario = $_COOKIE['nombre-usuario'];
    

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validacion de formularios</title> 
</head>
<body>
    <?php
        echo "Hola $usuario, la cookie funciona";
    ?>
</body>
</html>