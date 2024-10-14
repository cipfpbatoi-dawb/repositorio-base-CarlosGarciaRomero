<?php
$nombre = "Carlos";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 1</h1>
    <p><?= "Hola Mundo!" ?></p>
    <p><?= "Mi nombre es $nombre"?></p>
    <p><?= "Mi nombre es ".$nombre ?></p>
    <p><?= 'Mi nombre es '.$nombre ?></p>
</body>