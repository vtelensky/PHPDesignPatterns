<?php
    namespace AbstractFactory;

    interface MessageFactory {
        public function createReceiver($name, $surname, $machine);
        public function createSender($name, $surname, $machine);
        public function createMessage($content);
    }
?>