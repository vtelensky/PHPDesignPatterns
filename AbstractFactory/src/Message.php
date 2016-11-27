<?php
namespace AbstractFactory;

abstract class Message
{
    protected $content = "";
    protected $receivers = array();
    protected $sender = "";

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function addReceiver(Person $receiver)
    {
        $this->receivers[] = $receiver;
    }

    public function getReceivers()
    {
        return $this->receivers;
    }

    public function setSender(Person $sender)
    {
        $this->sender = $sender;
    }

    public function getSender()
    {
        return $this->sender;
    }

    public abstract function __toString();
}


?>