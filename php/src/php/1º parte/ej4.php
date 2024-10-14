<?php
    $edad1 = 18;
    echo "Edad: $edad1 <br>";
    if ($edad1 < 0){
        echo "Edad invalida";
    }
    elseif ($edad1 >= 18){
        echo "Es mayor de edad";
    }
    else {
        echo "Es menor de edad";
    }
?>