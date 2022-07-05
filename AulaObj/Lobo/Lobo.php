<?php
    class Lobo{

        private $NomeCientifico;
        private $idade;
        private $Natureza;

        public function __construct($NomeCientifico, $idade, $Natureza){
            
            $this->Nome = $NomeCientifico;
            $this->Altura = $idade;
            $this->Natureza = $Natureza;

        }
    }
?>