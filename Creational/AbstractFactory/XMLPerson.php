<?php
namespace Creational\AbstractFactory;

class XMLPerson
    extends Person
{
    public function __construct($name, $surname, $machine)
    {
        parent::__construct($name, $surname, $machine);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $string = '<name>' . $this->getName() . '</name>' . '<surname>' . $this->getSurname() . '</surname>'
            . '<machine>' . $this->getMachine() . '</machine>';

        return $string;
    }
}