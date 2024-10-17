<?php

    require $_SERVER["DOCUMENT_ROOT"].'/../vendor/autoload.php';

    use CGR\Models\Coche;
    use CGR\Models\Persona;
    use CGR\Models\Empleado;

    $coche = new Coche("Seat", "Ibiza");
    echo $coche->mostrarInformacion();
?>