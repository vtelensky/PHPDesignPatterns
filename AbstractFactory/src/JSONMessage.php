<?php
namespace AbstractFactory;

class JSONMessage
    extends Message
{

    public function __construct($content)
    {
        parent::__construct($content);
    }

    public function __toString()
    {
        $string = '{ ';
        $string .= 'sender : {' . $this->getSender() . "},";

        $string .= '"receivers" : [';
        foreach ($this->getReceivers() as $receiver) {
            $string .= '{' . $receiver . '},';
        }
        $string = rtrim($string, ',');
        $string .= "],";

        $string .= ' "content" : "' . $this->getContent() . '" }';

        return $string;
    }
}


?>