<?php
    class Matriz2d{

        private $a1;
        private $a2;
        private $b1;
        private $b2;
        
        public function __construct($a1, $a2, $b1, $b2)
        {
            $this->a1 = $a1;
            $this->a2 = $a2;
            $this->b1 = $b1;
            $this->b2 = $b2;

        }

        public function CalcularMatriz2d()
        {
            return $this->a1 * $this->b2 - $this->a2 * $this-> b1;
        }

        /**
         * Get the value of a1
         */ 
        public function getA1()
        {
                return $this->a1;
        }

        /**
         * Set the value of a1
         *
         * @return  self
         */ 
        public function setA1($a1)
        {
                $this->a1 = $a1;

                return $this;
        }
        
        /**
         * Get the value of a2
         */ 
        public function getA2()
        {
                return $this->a2;
        }

        /**
         * Set the value of a2
         *
         * @return  self
         */ 
        public function setA2($a2)
        {
                $this->a2 = $a2;

                return $this;
        }
        
        /**
         * Get the value of b1
         */ 
        public function getB1()
        {
                return $this->b1;
        }

        /**
         * Set the value of b1
         *
         * @return  self
         */ 
        public function setB1($b1)
        {
                $this->b1 = $b1;

                return $this;
        }

        /**
         * Get the value of b2
         */ 
        public function getB2()
        {
                return $this->b2;
        }

        /**
         * Set the value of b2
         *
         * @return  self
         */ 
        public function setB2($b2)
        {
                $this->b2 = $b2;

                return $this;
        }
    }
?>
