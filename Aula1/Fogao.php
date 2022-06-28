<?php

    class Fogao{
        private $numdeBocas;
        private $marca;
        private $forno;
        
        public function __construct(int $numdeBocas, string $marca, string $forno){
            
            $this->numdeBocas = $numdeBocas;
            $this->marca = $marca;
            $this->forno = $forno;

        }
        
        public function setnumdeBocas($numdeBocas){
            
            $this->numdeBocas = $numdeBocas;
        }

        public function getnumdeBocas(){

            return $this->num;
        }

        public function setMarca($marca){
            
            $this->marca = $marca;
        }

        public function getMarca(){

            return $this->marca;
        } 

        public function setforno($forno){
            
            $this->forno = $forno;
        }

        public function getforno(){

            return $this->forno;
        }
    }
?>