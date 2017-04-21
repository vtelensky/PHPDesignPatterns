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

    public abstract function cryptMessage($message, $key = null);
    public abstract function decryptMessage($message, $key = null);
}