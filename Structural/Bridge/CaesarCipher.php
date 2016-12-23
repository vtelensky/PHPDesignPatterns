<?php
namespace Structural\Bridge;

class CaesarCipher
implements Cipher
{

    public function crypt($message, $key = null)
    {
        if (empty($key) or !is_numeric($key)) {
            throw new \Exception('Key for cipher not provided in ' . __METHOD__);
        }
        $result = "";

        foreach (str_split($message) as $character) {
            $result .= $this->shiftCharacter($character, $key);
        }

        return $result;
    }

    private function shiftCharacter($char, $key)
    {
        if (!ctype_alpha($char)) {
            return $char;
        }

        $offset = ord(ctype_upper($char) ? 'A' : 'a');
        return chr((((ord($char) + $key) - $offset) % 26) + $offset);
    }

    public function decrypt($message, $key = null)
    {
        if (empty($key) or !is_numeric($key)) {
            throw new \Exception('Key for cipher not provided in ' . __METHOD__);
        }

        $result = "";

        foreach (str_split($message) as $character) {
            $result .= $this->shiftCharacter($character, 26 - $key);
        }

        return $result;
    }
}