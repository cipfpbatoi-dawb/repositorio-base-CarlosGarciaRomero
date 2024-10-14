<?php
    $nota = 8;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 9</h1>
    <?php
        $resultado = match($nota){
            5, 6, 7 => "Bien",
            8, 9 => "Muy bien",
            10 => "Excelente",
            default => "Insuficiente"
        };
        echo "Nota: $nota <br>";
        echo "Resultado: $resultado";
    ?>
</body>