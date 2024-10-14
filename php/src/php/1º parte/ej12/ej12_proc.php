<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale =1">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ejercicio 12</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = htmlspecialchars($_POST["name"]);
            $edad = htmlspecialchars($_POST["edad"]);
            echo "<h2>Bienvenido/a, $nombre</h2>";
            echo "<p>Tienes $edad años</p>";
        }else{
            echo "<p>Si te parece, completa el formulario</p>";
        }
    ?>
</body> 