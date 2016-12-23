<?php
include __DIR__ . "/../../vendor/autoload.php";

$data = array(
    'sender'    => array('name' => 'Jan', 'surname' => 'Novak', 'machine' => 'pc1'),
    'receivers' => array(
        array('name' => 'George', 'surname' => 'Lucas', 'machine' => 'pc2'),
        array('name' => 'John', 'surname' => 'Receiver', 'machine' => 'pc3'),
    ),
    'message'   => 'Hi There!',
);

header("Content-Type: text/plain");

$messageFactory = new \Creational\AbstractFactory\JSONMessageFactory();
$messagePrinter = new \Creational\AbstractFactory\MessagePrinter($messageFactory);
$messagePrinter->printMessage($data);

echo "\n\n";

$messageFactory = new \Creational\AbstractFactory\XMLMessageFactory();
$messagePrinter->setMessageFactory($messageFactory);
$messagePrinter->printMessage($data);