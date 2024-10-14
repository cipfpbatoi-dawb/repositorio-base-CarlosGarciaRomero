<?php
    session_start();

    //===CERRAR Y DESTRUIR LA SESION===
    session_unset();
    session_destroy();

    //===REDIRECCIONA A LA PAGINA DE INICIO===
    header('Location: ej6-inicio.php');
    exit();
?>