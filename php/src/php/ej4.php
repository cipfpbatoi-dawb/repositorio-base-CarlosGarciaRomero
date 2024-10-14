<?php
    $texto = "Esto es un texto largo de prueba";
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        $contador = match(true){
            strtolower($texto[$i]) == "a" => $contador + 1,
            strtolower($texto[$i]) == "e" => $contador + 1,
            strtolower($texto[$i]) == "i" => $contador + 1,
            strtolower($texto[$i]) == "o" => $contador + 1,
            strtolower($texto[$i]) == "u" => $contador + 1,
            default => $contador
        };
    }

    

    echo "El texto '$texto' tiene $contador vocales";
?>