<?php
namespace Structural\Bridge;

class LoggingCommunicator
extends AbstractCommunicator
{
    /**
     * @param Cipher $cipher
     */
    public function __construct(Cipher $cipher)
    {
        parent::__construct($cipher);
    }

    /**
     * @param $message
     * @param $key
     *
     * @return mixed
     */
    public function cryptMessage($message, $key = null)
    {
        $this->logMessage("Crypt ---> message: " . $message . " , key: " . $key);
        return $this->cipher->crypt($message, $key);
    }

    /**
     * @param $message
     * @param $key
     *
     * @return mixed
     */
    public function decryptMessage($message, $key = null)
    {
        $this->logMessage("Decrypt ---> message: " . $message . " , key: " . $key);
        return $this->cipher->decrypt($message, $key);
    }

    private function logMessage($message)
    {
        echo $message;
    }
}