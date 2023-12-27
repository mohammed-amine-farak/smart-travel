<?php
class bus{
    
        private $immat;
        private $num_bus;
        private $capacité;
        private $entreprise;

        public function __construct($name,$email,$password){
          $this->immat = $immat;
          $this->num_bus = $num_bus;
          $this->capacite = $capacité;
          $this->entreprise = $entreprise; 
        }

        /**
         * Get the value of immat
         */ 
        public function getImmat()
        {
                return $this->immat;
        }

        /**
         * Get the value of num_bus
         */ 
        public function getNum_bus()
        {
                return $this->num_bus;
        }

        /**
         * Get the value of capacité
         */ 
        public function getCapacité()
        {
                return $this->capacité;
        }

        /**
         * Get the value of entreprise
         */ 
        public function getEntreprise()
        {
                return $this->entreprise;
        }
}

?>