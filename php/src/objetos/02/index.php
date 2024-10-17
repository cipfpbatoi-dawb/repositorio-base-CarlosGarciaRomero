<?php
    include_once 'Persona.php';

    $persona = new Persona('Juan', 'Perez', 66);
    echo $persona->getNomCompleto().'<br>';
    echo 'Esta '.($persona->estaJubilado() ? 'jubilado' : 'trabajando').'<br>';

    $persona2 = new Persona('Ana', 'Lopez');
    echo $persona2->getNomCompleto().'<br>';
    echo 'Esta '.($persona2->estaJubilado() ? 'jubilado' : 'trabajando').'<br>';
?>