<?php
    class Persona {
        
        private const EDAD_MAXIMA = 66;

        public function __construct(
            private $nombre,
            private $apellidos,
            private $edad = 25
        ){}
        
        public function getNombre() {
            return $this->nombre;
        }
        
        public function getApellidos() {
            return $this->apellidos;
        }
        
        public function getEdad() {
            return $this->edad;
        }

        public function getNomCompleto(){
            return $this->nombre.' '.$this->apellidos;
        }

        public function estaJubilado(){
            return $this->edad >= self::EDAD_MAXIMA;
        }
    }
?>