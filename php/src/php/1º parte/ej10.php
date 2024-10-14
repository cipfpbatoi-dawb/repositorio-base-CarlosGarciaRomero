<?php
    $producto = "Pan";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 10</h1>
    <?php
        $precio = match($producto){
            "pan" => 1.00,
            "leche" => 0.80,
            "queso", "huevos" => 2.50,
            default => 0.00
        };
        echo "Producto: $producto <br>";
        echo "Precio: $precio";
    ?>
</body>