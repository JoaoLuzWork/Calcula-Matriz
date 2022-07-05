<?php
    class Casa{

        private $Enderço;
        private $TamanhoEmM2;
        private $CEP;
        private $Dono;

        public function __construct($Enderço, $TamanhoEmM2, $CEP, $Dono){
            
            $this->Enderço = $Enderço;
            $this->TamanhoEmM2 = $TamanhoEmM2;
            $this->CEP = $CEP;
            $this->Dono = $Dono;

        }
    }
?>