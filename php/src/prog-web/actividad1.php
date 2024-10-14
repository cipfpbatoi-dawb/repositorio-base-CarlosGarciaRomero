<?php
    session_start();

    //====INICIALIZAR EL CARRITO SI ES QUE NO EXISTE AUN====
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = [];
    }

    //====ENCARGADO DE AGREGAR LOS PRODUCTOS AL CARRITO====
    if (isset($_POST['producto'])) {
        $producto = $_POST['producto'];

        //====VERIFICACION DE SI EL PRODUCTO YA SE ENCUENTRA EN EL CARRITO====
        if (isset($_SESSION['carrito'][$producto])){
            $_SESSION['carrito'][$producto]++;
        } else {
            $_SESSION['carrito'][$producto] = 1;
        }

        $mensaje = "Producto añadido al carrito: $producto";
    }

    //====CONTADOR DE PRODUCTOS EN EL CARRITO====
    $totalProductos = 0;
    foreach ($_SESSION['carrito'] as $cantidad){
        $totalProductos += $cantidad;
    }
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Seleccion de productos</title>
</head>
<body>
    <h1>Añadir productos al carrito</h1>
    <p>Total productos en el carrito: <?php echo $totalProductos; ?></p>

    <?php if (isset($mensaje)): ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="producto">Elige un producto:</label>
        <select name="producto" id="producto">
            <option value="Manzana">Manzana</option>
            <option value="Platano">Platano</option>
            <option value="Naranja">Naranja</option>
        </select>
        <input type="submit" value="Añadir al carrito">
    </form>

    <a href="carrito.php">Ver carrito</a>
</body>
</html>