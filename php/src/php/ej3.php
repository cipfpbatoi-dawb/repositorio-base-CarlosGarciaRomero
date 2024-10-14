<?php
    $numeros = array(1,5,7,9,11);

    $suma = array_sum($numeros);
    $total_num = count($numeros);

    $media = $suma / $total_num;
    echo "La media es $media de los números: ";
    foreach ($numeros as $numero){
        echo "$numero ";
    }
?>