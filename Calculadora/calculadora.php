<?php
    class Calculadora{

        private $operador;
        private $operando1;
        private $operando2;

        public function __construct($operador, $operando1,$operando2){
            
            $this->operador = $operador;
            $this->operando1 = $operando1;
            $this->operando2 = $operando2;
        }

        public function calcular()
        {
           if ($this->operador == "+") {
                return $this->operando1 + $this->operador2;;
           }
           if ($this->operador == "-") {
                return $this->operando1 - $this->operador2;;
           }
           if ($this->operador == "/") {
                return $this->operando1 / $this->operador2;;
           }
           if ($this->operador == "*") {
                return $this->operando1 * $this->operador2;;
           }
        }
    }
?>