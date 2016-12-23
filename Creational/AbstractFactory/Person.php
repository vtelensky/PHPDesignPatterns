<?php
namespace Creational\AbstractFactory;

abstract class Person
{
    protected $name = "";
    protected $surname = "";
    protected $machine = "";

    public function __construct($name, $surname, $machine)
    {
        $this->name    = $name;
        $this->surname = $surname;
        $this->machine = $machine;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getMachine()
    {
        return $this->machine;
    }

    /**
     * @param $machine
     */
    public function setMachine($machine)
    {
        $this->machine = $machine;
    }

    public abstract function __toString();
}