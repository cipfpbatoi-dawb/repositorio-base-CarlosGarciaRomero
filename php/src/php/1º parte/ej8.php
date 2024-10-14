<?php
    function añadir_elemento($array, $elemento){
        $array[] = $elemento;
        return $array;
    }
    $animales = ["perro", "gato"];
    $animales = añadir_elemento($animales, "pez");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 8</h1>
    <?php
        foreach($animales as $animal){
            echo "$animal <br>";
        }
    ?>
</body>