<?php
    class Floresta{

        private $TipodeFloresta;
        private $AreaM2;
        private $Protegida;

        public function __construct($TipodeFloresta, $AreaM2, float $Protegida){
            
            $this->Nome = $TipodeFloresta;
            $this->Altura = $AreaM2;
            $this->Peso = $Protegida;

        }
    }
?>