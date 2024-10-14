<?php
    $nota = 4;

    $criterio = match ($nota) {
        10 => "Excelente",
        8, 9 => "Muy bien",
        5, 6, 7 => "Bien",
        default => "Insuficiente"
    };

    echo "La nota ($nota) entra en la categoria de: $criterio";
?>