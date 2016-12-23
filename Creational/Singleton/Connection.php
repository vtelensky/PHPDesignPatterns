<?php
namespace Creational\Singleton;

interface Connection
{
    public function connect();
    public function disconnect();
}