<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $nomUsuario = $_POST['name'];

        //===ALMACENAR EL NOMBRE DEL USUARIO DENTRO DE LA SESION===
        $_SESSION['nombre_usuario'] = $nomUsuario;

        session_regenerate_id(true);

        //===REDIRECCIONA A LA  PAGINA DE BIENVENIDA TRAS EL LOGIN===
        header('Location: ej6-bienvenido.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sessió</title>
</head>
<body>
    <h2>Iniciar Sessió</h2>
    <form method="post" action="ej6-inicio.php">

        <label for="name">Nom d'usuari:</label>

        <input type="text" id="name" name="name" required>
        
        <button type="submit">Iniciar Sessió</button>
    </form>
</body>
</html>