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

        /**
         * Get the value of Nome
         */ 
        public function getNome()
        {
                return $this->Nome;
        }

        /**
         * Set the value of Nome
         *
         * @return  self
         */ 
        public function setNome($Nome)
        {
                $this->Nome = $Nome;

                return $this;
        }

        /**
         * Get the value of Altura
         */ 
        public function getAltura()
        {
                return $this->Altura;
        }

        /**
         * Set the value of Altura
         *
         * @return  self
         */ 
        public function setAltura($Altura)
        {
                $this->Altura = $Altura;

                return $this;
        }

        /**
         * Get the value of Peso
         */ 
        public function getPeso()
        {
                return $this->Peso;
        }

        /**
         * Set the value of Peso
         *
         * @return  self
         */ 
        public function setPeso($Peso)
        {
                $this->Peso = $Peso;

                return $this;
        }

        /**
         * Get the value of CordosOlhos
         */ 
        public function getCordosOlhos()
        {
                return $this->CordosOlhos;
        }

        /**
         * Set the value of CordosOlhos
         *
         * @return  self
         */ 
        public function setCordosOlhos($CordosOlhos)
        {
                $this->CordosOlhos = $CordosOlhos;

                return $this;
        }

        /**
         * Get the value of Profissão
         */ 
        public function getProfissão()
        {
                return $this->Profissão;
        }

        /**
         * Set the value of Profissão
         *
         * @return  self
         */ 
        public function setProfissão($Profissão)
        {
                $this->Profissão = $Profissão;

                return $this;
        }
    }
?>