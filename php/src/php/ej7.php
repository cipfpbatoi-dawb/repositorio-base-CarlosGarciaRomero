<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Validacion de formularios</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = htmlspecialchars($_POST['nombre']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $confirm_password = htmlspecialchars($_POST['confirm_password']);

            //INICIALIZAR MENSAJE DE ERROR
            $errores = [];

            //VALIDAR QUE EL NOMBRE NO ESTE VACIO
            if(empty($nombre)){
                $errores[] = "El nombre es obligaroria";
            }

            //VALIDAR QUE EL CORREO ELECTRONICO SEA VALIDO
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores[] = "El correo electronico no es valido";
            }

            //VALIDAR QUE LA CONTRASEÑA TENGA UNA COMPLEGIDAD MINIMA
            //REQUISITOS: ALMENOS 8 CARACTERES, UNA LETRA MAYUSCULA, UNA MINUSCULA Y UN NUMERO
            if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[0-9]/', $password)){
                $errores[] = "La contraseña no cumple con los requisitos minimos";
            }

            //VALIDAR QUE LA CONTRASEÑA Y LA CONFIRMACION DE LA CONTRASEÑA SEAN IGUALES
            if($password !== $confirm_password){
                $errores[] = "Las contraseñas no coinciden";
            }

            //MUESTRA MENSAGES DE ERROR O SALIDA
            if (!empty($errores)){
                echo "<h2>Errores en el formulario:</h2>";
                echo "<ul>";
                foreach($errores as $error){
                    echo "<li>$error</li>";
                };
                echo "</ul>";
                echo "<a href='javascript:history.back()'>Volver</a>";
            }else{
                echo "<h2>Formulario enviado correctamente</h2>";
                echo "<p>Bienvenido $nombre</p>";
            }
        }else{
            
        }

    ?>
</body>
</html>