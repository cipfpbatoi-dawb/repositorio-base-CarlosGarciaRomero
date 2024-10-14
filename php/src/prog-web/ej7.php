<?php
//===LEER EL COLOR PREFERIDO DE UNA COOKIE===
$colorPreferido = isset($_COOKIE['color_preferido']) ? $_COOKIE['color_preferido'] : 'azul';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $colorPreferido = $_POST['color_preferido'];

    //===ALMACENAR EL COLOR PREFERIDO EN UNA COOKIE===
    setcookie('color_preferido', $colorPreferido, time()+3600, '/');

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Preferencias de Color</title>
</head>
<body style="background-color: <?php 
    switch ($colorPreferido){
        case 'azul':
            echo 'blue';
            break;
        case 'verde':
            echo 'green';
            break;
        case 'rojo':
            echo 'red';
            break;
        default:
            echo 'white';
            break;
}?>">
    
    <h2>Preferencias de Color</h2>
    <form method="post">
        <label for="color_preferido">Color Preferido:</label>
        <select name="color_preferido" id="color_preferido">
            <option value="azul"<?php if ( $colorPreferido === 'azul') echo 'selected'; ?>>Azul</option>
            <option value="rojo"<?php if ( $colorPreferido === 'rojo') echo 'selected'; ?>>Rojo</option>
            <option value="verde"<?php if ( $colorPreferido === 'verde') echo 'selected'; ?>>Verde</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
    
</body>