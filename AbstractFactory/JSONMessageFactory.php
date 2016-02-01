<?php
    class JSONMessageFactory implements MessageFactory {
        
        public function createReceiver($name, $surname, $machine) {
            return new JSONPerson($name, $surname, $machine);
        }
        
        public function createSender($name, $surname, $machine) {
            return new JSONPerson($name, $surname, $machine);
        }
        
        public function createMessage($content) {
            return new JSONMessage($content);
        }
    }
?>