<?php
    $a = 6;
    $b = 12;
    $operacion = "*";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 11</h1>
    <?php
        $resultado = match($operacion){
            "+" => $a + $b,
            "-" => $a - $b,
            "*" => $a * $b,
            "/" => $a / $b,
            default => "Operación no válida"
        };

        echo "$a $operacion $b = $resultado";
    ?>
</body>