<?php
    $nombre = 'Jose';
    $correo = 'correo@gmail.com';
    $edad = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 14</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 14</h1>
    <?php
        $validacion = match (true) {
            empty($nombre) => 'El campo "nombre" es obligatorio',
            !filter_var($correo,FILTER_VALIDATE_EMAIL) => 'El campo "correo" no es valido',
            empty($edad) => 'El campo "edad" es obligatorio ',
            default => 'Los datos son validados'
        };

        echo $validacion;
    ?>
</body>