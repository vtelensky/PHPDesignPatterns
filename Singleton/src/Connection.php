<?php
namespace Singleton;

interface Connection
{
    public function connect();
    public function disconnect();
}