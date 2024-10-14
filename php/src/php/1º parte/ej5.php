<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 5</h1>
    <p>
    <?php
        for ($i = 0; $i < 10; $i++){
            echo "$i ";
        };
        echo " | ";
        $i = 0;
        while ($i < 10){
            echo "$i ";
            $i++;
        };
    ?></p>
</body>