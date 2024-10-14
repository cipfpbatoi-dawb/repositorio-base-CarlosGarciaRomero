<?php
    $frutas = array("manzana", "platano", "fresa")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 6</h1>
    <?php
        echo $frutas[0]."<br>";
        $frutas[] = "naranja";
        foreach ($frutas as $fruta){
            echo $fruta."<br>";
        }
    ?>
</body>