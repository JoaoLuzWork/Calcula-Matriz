<?php
    class Carro{
        private $marca;
        private $ano;
        private $potencia;
        private $kmRodados;

        public function __construct($marca, $ano, $potencia)
        {
            $this->marca = $marca;
            $this->ano = $ano;
            $this->potencia = $potencia;
            $this->kmrodados = 0;
        }

        
    }
?>