<?php

    namespace CGR\Models;

    class coche {

        public function __construct(
            private string $marca,
            private string $modelo
        ){}

        public function __destruct(){
            echo "El coche se ha destruido";
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function mostrarInformacion(){
            echo "Marca: ".$this->marca." Modelo: ".$this->modelo;
        }

    }

?>