<?php
    require_once "Matriz2d.php";
    class Cramer2x2{

        private $a1;
        private $a2;
        private $b1;
        private $b2;
        private $d1;
        private $d2;
        private $x;
        private $y;
        private $determinado;

       
       
        public function __construct($a1, $a2, $b1, $b2, $d1, $d2)
        {
            $this->a1 = $a1;
            $this->a2 = $a2;
            $this->b1 = $b1;
            $this->b2 = $b2;
            $this->d1 = $d1;
            $this->d2 = $d2;
        }


        public function Calcula()
        {
            
            $m1 = new Matriz2d($this->a1, $this->a2, $this->b1, $this->b2);
            $delt = $m1->CalcularMatriz2d();
            
            if ($delt == 0) 
            {
                $this-> determinado = false;
            } 
            else
            {
                $this-> determinado = true;
                $m2 = new Matriz2d($this->d1, $this->d2, $this->b1, $this->b2);
                $deltX = $m2->CalcularMatriz2d();
                $this->x = $deltX/$delt;

                $m3 = new Matriz2d($this->a1, $this->a2, $this->d1, $this->d2);
                $deltY = $m3->CalcularMatriz2d();
                $this->y = $deltY/$delt;
            }
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

        /**
         * Get the value of d1
         */ 
        public function getD1()
        {
                return $this->d1;
        }

        /**
         * Set the value of d1
         *
         * @return  self
         */ 
        public function setD1($d1)
        {
                $this->d1 = $d1;

                return $this;
        }

        /**
         * Get the value of d2
         */ 
        public function getD2()
        {
                return $this->d2;
        }

        /**
         * Set the value of d2
         *
         * @return  self
         */ 
        public function setD2($d2)
        {
                $this->d2 = $d2;

                return $this;
        }

        /**
         * Get the value of x
         */ 
        public function getX()
        {
                return $this->x;
        }

        /**
         * Get the value of y
         */ 
        public function getY()
        {
                return $this->y;
        }

        /**
         * Get the value of determinado
         */ 
        public function getDeterminado()
        {
                return $this->determinado;
        }
    }
?>