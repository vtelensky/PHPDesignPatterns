<?php
include __DIR__ . "/../../vendor/autoload.php";

$connection = \Creational\Singleton\DatabaseConnection::getInstance('DB1');

$connection->connect();
$connection->disconnect();

$anotherConnection = \Creational\Singleton\DatabaseConnection::getInstance('DB1');

if ($connection === $anotherConnection) {
    echo "The same instances of connection \n";
} else {
    echo "Different instances \n";
}

$connectionDB2 = \Creational\Singleton\DatabaseConnection::getInstance('DB2');

$connectionDB2->connect();
$connectionDB2->disconnect();

if ($connectionDB2 === $anotherConnection) {
    echo "The same instances of connection \n";
} else {
    echo "Different instances \n";
}