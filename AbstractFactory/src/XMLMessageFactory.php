<?php
    class XMLMessageFactory implements MessageFactory {
        public function createReceiver($name, $surname, $machine) {
            return new XMLPerson($name, $surname, $machine);
        }
        
        public function createSender($name, $surname, $machine) {
            return new XMLPerson($name, $surname, $machine);
        }
        
        public function createMessage($content) {
            return new XMLMessage($content);
        }    
    }
?>