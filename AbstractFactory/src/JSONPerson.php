<?php
    class JSONPerson extends Person {
        
        public function __construct($name, $surname, $machine) {
            parent::__construct($name, $surname, $machine);
        }
        
        public function __toString() {
            $string = ' "name" : "' . $this->getName() . '",' .
                      ' "surname" : "' . $this->getSurname() . '",' .
                      ' "machine" : "' . $this->getMachine() . '"';
            return $string;
        }
    }
?>