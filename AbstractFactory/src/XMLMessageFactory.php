<?php
namespace AbstractFactory;

class XMLMessageFactory
    implements MessageFactory
{
    /**
     * @param $name
     * @param $surname
     * @param $machine
     *
     * @return XMLPerson
     */
    public function createReceiver($name, $surname, $machine)
    {
        return new XMLPerson($name, $surname, $machine);
    }

    /**
     * @param $name
     * @param $surname
     * @param $machine
     *
     * @return XMLPerson
     */
    public function createSender($name, $surname, $machine)
    {
        return new XMLPerson($name, $surname, $machine);
    }

    /**
     * @param $content
     *
     * @return XMLMessage
     */
    public function createMessage($content)
    {
        return new XMLMessage($content);
    }
}