<?php
namespace Structural\Bridge;

class AsciiSubstitutionCipher
implements Cipher
{

    /**
     * @param $message
     * @param $key
     *
     * @return mixed
     */
    public function crypt($message, $key = null)
    {
        $result = "";
        for ($i = 0; $i < strlen($message); $i++) {
            $result .= ord($message[$i]) . " ";
        }
        return trim($result);
    }

    /**
     * @param $message
     * @param $key
     *
     * @return mixed
     */
    public function decrypt($message, $key = null)
    {
        $result = "";
        foreach (preg_split("/ /", $message) as $character) {
            $result .= chr($character);
        }
        return $result;
    }
}