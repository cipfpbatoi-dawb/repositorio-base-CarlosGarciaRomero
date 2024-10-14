<?php
    session_start();

    //====ENCARGADO DE QUE SE ELIMINEN LOS PRODUCTOS DEL CARRITO====
    if (isset($_POST['eliminar_producto'])){
        $productoAEliminar = $_POST['eliminar_producto'];

        if (isset($_POST['cantidad'])){
            $cantidadAEliminar = intval($_POST['cantidad']);

            if (isset($_SESSION['carrito'][$productoAEliminar])){
                $_SESSION['carrito'][$productoAEliminar] -= $cantidadAEliminar;

                if ($_SESSION['carrito'][$productoAEliminar] <= 0){
                    //Eliminara si la cantidad es menor o igual a 0
                    unset($_SESSION['carrito'][$productoAEliminar]);
                }
            }
        }elseif (isset($_POST['eliminar_todos'])){
            //Eliminara todos los productos
            unset($_SESSION['carrito'][$productoAEliminar]);
        }
    }
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <?php if (empty($_SESSION['carrito'])): ?>
        <p>El carrito esta vacio</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['carrito'] as $producto => $cantidad):?>
                <li>
                    <?php echo "$producto; (Cantidad: $cantidad)"; ?>
                    <form action="carrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="eliminar_producto" value=<?php echo $producto; ?>>
                        <label for="cantidad">Eliminar cantidad:</label>
                        <input type="number" name="cantidad" min="1" max="<?php echo $cantidad; ?>" value="1">
                        <input type="submit" value="Eliminar cantidad">
                    </form>

                    <form action="carrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="eliminar_producto" value="<?php echo $producto; ?>">
                        <input type="hidden" name="eliminar_todos" value="1">
                        <input type="submit" value="Eliminar todo">
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="actividad1.php">Volver a la seleccion </a>
</body>
</html>