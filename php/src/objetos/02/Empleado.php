<?php
    include_once 'Persona.php';

    class Empleado extends Persona {

        public function __construct(
            private float $sueldo,
            private array $telefonos = []
        ){
            parent::__construct($nombre, $apellidos, $edad);
        }
        

        public function añadirTelefono(int $telefono): void{
            $this->telefonos[] = $telefono;
        }

        public function listarTelefonos(): string{
            this->$telefonos.explode(', ', $telefonos);
        }

        public function vaciarTelefonos(): void{
            $this->telefonos = [];
        }

        public function debePagarImpuestos(): bool{
            return $this->sueldo > 3333;
        }

    }
?>