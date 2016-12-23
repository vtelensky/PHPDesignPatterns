<?php
namespace Creational\AbstractFactory;

class JSONMessageFactory
    implements MessageFactory
{
    /**
     * @param $name
     * @param $surname
     * @param $machine
     *
     * @return JSONPerson
     */
    public function createReceiver($name, $surname, $machine)
    {
        return new JSONPerson($name, $surname, $machine);
    }

    /**
     * @param $name
     * @param $surname
     * @param $machine
     *
     * @return JSONPerson
     */
    public function createSender($name, $surname, $machine)
    {
        return new JSONPerson($name, $surname, $machine);
    }

    /**
     * @param $content
     *
     * @return JSONMessage
     */
    public function createMessage($content)
    {
        return new JSONMessage($content);
    }
}