<?php
include __DIR__ . "/../../vendor/autoload.php";

$message = "ABC";
echo "Using NonLoggingCommunicator with CeasarCipher crypt algorithm\n\n";
echo "Message to send: " . $message . "\n";

$communicator = new \Structural\Bridge\NonLoggingCommunicator(new \Structural\Bridge\CaesarCipher());
$cryptedMessage = $communicator->cryptMessage($message, 3);

echo "Crypted message: " . $cryptedMessage . "\n";
echo "Decrypted message: " . $communicator->decryptMessage($cryptedMessage, 3) . "\n";

$communicator->sendMessage($cryptedMessage);

echo "\n\nUsing LoggingCommunicator with AsciiSubstitutionCipher crypt algorithm\n\n";
echo "Message to send: " . $message . "\n";

$communicator = new \Structural\Bridge\LoggingCommunicator(new \Structural\Bridge\AsciiSubstitutionCipher());
$cryptedMessage = $communicator->cryptMessage($message);

echo "Crypted message: " . $cryptedMessage . "\n";
echo "Decrypted message: " . $communicator->decryptMessage($cryptedMessage) . "\n";

$communicator->sendMessage($cryptedMessage);