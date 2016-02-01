<?php
    abstract class Person {
        protected $name = "";
        protected $surname = "";
        protected $machine = "";
        
        public function __construct($name, $surname, $machine) {
            $this->name = $name;
            $this->surname = $surname;
            $this->machine = $machine;
        }
        
        public function getName() {
            return $this->name;
        }
        
        public function setName($name) {
            $this->name = $name;
        }
        
        public function getSurname() {
            return $this->surname;
        }
        
        public function setSurname($surname) {
            $this->surname = $surname;
        }
        
        public function getMachine() {
            return $this->machine;
        }
        
        public function setMachine($machine) {
            $this->machine = $machine;
        }
        
        public abstract function __toString();
    }
?>