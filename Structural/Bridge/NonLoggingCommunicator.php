<?php
namespace Structural\Bridge;

class NonLoggingCommunicator
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
        return $this->cipher->decrypt($message, $key);
    }
}