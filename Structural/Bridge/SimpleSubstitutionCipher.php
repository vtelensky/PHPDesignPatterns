<?php
namespace Structural\Bridge;

class SimpleSubstitutionCipher
implements Cipher
{

    //ToDo: Implement SimpleSubstitution algorithm
    private $dictionary = array();

    /**
     * @param $message
     * @param $key
     *
     * @return mixed
     */
    public function crypt($message, $key = null)
    {
        // TODO: Implement crypt() method.
    }

    /**
     * @param $message
     * @param $key
     *
     * @return mixed
     */
    public function decrypt($message, $key = null)
    {
        // TODO: Implement decrypt() method.
    }
}