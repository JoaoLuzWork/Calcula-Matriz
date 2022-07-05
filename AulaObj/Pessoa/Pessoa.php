<?php
    class Pessoa{

        private $Nome;
        private $Altura;
        private $Peso;
        private $CordosOlhos;
        private $Profissão;


        public function __construct($Nome, $Altura, $Peso, $CordosOlhos, $Profissão){
            
            $this->Nome = $Nome;
            $this->Altura = $Altura;
            $this->Peso = $Peso;
            $this->CordosOlhos = $CordosOlhos;
            $this->Profissão = $Profissão;

        }
    }
?>