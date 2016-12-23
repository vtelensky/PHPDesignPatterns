<?php
namespace Creational\AbstractFactory;

interface MessageFactory
{
    /**
     * @param $name
     * @param $surname
     * @param $machine
     *
     * @return mixed
     */
    public function createReceiver($name, $surname, $machine);

    /**
     * @param $name
     * @param $surname
     * @param $machine
     *
     * @return mixed
     */
    public function createSender($name, $surname, $machine);

    /**
     * @param $content
     *
     * @return mixed
     */
    public function createMessage($content);
}