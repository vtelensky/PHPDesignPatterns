<?php
namespace Structural\Bridge;

interface Cipher
{
    /**
     * @param $message
     * @param $key
     *
     * @return mixed
     */
    public function crypt($message, $key);

    /**
     * @param $message
     * @param $key
     *
     * @return mixed
     */
    public function decrypt($message, $key);
}