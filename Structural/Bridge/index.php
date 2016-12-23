<?php
include __DIR__ . "/../../vendor/autoload.php";

$communicator = new \Structural\Bridge\Communicator(new \Structural\Bridge\CaesarCipher());
$cryptedMessage = $communicator->cryptMessage('ABC', 3);

echo "Crypted message: " . $cryptedMessage . "\n";
echo "Decrypted message: " . $communicator->decryptMessage($cryptedMessage, 3) . "\n";

$communicator->sendMessage($cryptedMessage);