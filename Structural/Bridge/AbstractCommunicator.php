<?php
namespace Structural\Bridge;

abstract class AbstractCommunicator
{
    /**
     * @var Cipher
     */
    protected $cipher;

    /**
     * @param Cipher $cipher
     */
    public function __construct(Cipher $cipher)
    {
        $this->cipher = $cipher;
    }

    /**
     * @param $message
     */
    public function sendMessage($message)
    {
        echo "Sending message: " . $message . "\n";
    }

    //ToDo: Think about and create some method which are common for all communicators

    public abstract function cryptMessage($message, $key);
    public abstract function decryptMessage($message, $key);
}