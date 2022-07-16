<?php
    class Matriz3d{

        private $a1;
        private $a2;
        private $a3;
        private $b1;
        private $b2;
        private $b3;
        private $c1;
        private $c2;
        private $c3;
        private $result;
        
        public function __construct($a1, $a2, $a3, $b1, $b2, $b3, $c1, $c2, $c3)
        {
            $this->a1 = $a1;
            $this->a2 = $a2;
            $this->a3 = $a3;
            $this->b1 = $b1;
            $this->b2 = $b2;
            $this->b3 = $b3;
            $this->c1 = $c1;
            $this->c2 = $c2;
            $this->c3 = $c3;
        }


        public function CalcularMatriz3d()
        {
            return ((($this->a1 * $this->b2 * $this->c3) + ($this->b1 * $this->c2 * $this->a3) + ($this->c1 * $this->a2 * $this->b3))) - ((($this->c1 * $this->b2 * $this->a3) + ($this->a1 * $this->c2 * $this->b3) + ($this->b1 * $this->a2 * $this->c3)));
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
         * Get the value of a3
         */ 
        public function getA3()
        {
                return $this->a3;
        }

        /**
         * Set the value of a3
         *
         * @return  self
         */ 
        public function setA3($a3)
        {
                $this->a3 = $a3;

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

        /**
         * Get the value of b3
         */ 
        public function getB3()
        {
                return $this->b3;
        }

        /**
         * Set the value of b3
         *
         * @return  self
         */ 
        public function setB3($b3)
        {
                $this->b3 = $b3;

                return $this;
        }

        /**
         * Get the value of c1
         */ 
        public function getC1()
        {
                return $this->c1;
        }

        /**
         * Set the value of c1
         *
         * @return  self
         */ 
        public function setC1($c1)
        {
                $this->c1 = $c1;

                return $this;
        }

        /**
         * Get the value of c2
         */ 
        public function getC2()
        {
                return $this->c2;
        }

        /**
         * Set the value of c2
         *
         * @return  self
         */ 
        public function setC2($c2)
        {
                $this->c2 = $c2;

                return $this;
        }

        /**
         * Get the value of c3
         */ 
        public function getC3()
        {
                return $this->c3;
        }

        /**
         * Set the value of c3
         *
         * @return  self
         */ 
        public function setC3($c3)
        {
                $this->c3 = $c3;

                return $this;
        }

        /**
         * Get the value of result
         */ 
        public function getResult()
        {
                return $this->result;
        }
    }
?>
