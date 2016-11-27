<?php
include __DIR__ . "/../vendor/autoload.php";

$data = array(
    'sender'    => array('name' => 'Jan', 'surname' => 'Novak', 'machine' => 'pc1'),
    'receivers' => array(
        array('name' => 'George', 'surname' => 'Lucas', 'machine' => 'pc2'),
        array('name' => 'John', 'surname' => 'Receiver', 'machine' => 'pc3'),
    ),
    'message'   => 'Hi There!',
);

header("Content-Type: text/plain");

$messageFactory = new AbstractFactory\JSONMessageFactory();
$messagePrinter = new AbstractFactory\MessagePrinter($messageFactory);
$messagePrinter->printMessage($data);

echo "\n\n";

$messageFactory = new AbstractFactory\XMLMessageFactory();
$messagePrinter->setMessageFactory($messageFactory);
$messagePrinter->printMessage($data);
?>