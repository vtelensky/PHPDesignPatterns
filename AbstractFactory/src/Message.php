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

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param Person $receiver
     */
    public function addReceiver(Person $receiver)
    {
        $this->receivers[] = $receiver;
    }

    /**
     * @return array
     */
    public function getReceivers()
    {
        return $this->receivers;
    }

    /**
     * @param Person $sender
     */
    public function setSender(Person $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    public abstract function __toString();
}