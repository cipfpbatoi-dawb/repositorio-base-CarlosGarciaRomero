<?php
    session_start();
    if (!isset($_SESSION['nombre_usuario'])) {
        header('Location: ej6-inicio.php');
        exit();
        
    }
    $nomUsuari = $_SESSION['nombre_usuario'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenidos</title>
</head>
<body>
    <h2>Bienvenidos, <?php echo htmlspecialchars($nomUsuari); ?>!</h2>
    <p>Esta es tu pagina de bienvenida.</p>
    <a href="ej6-logout.php">Cerrar Sesion</a>
</body>
</html>