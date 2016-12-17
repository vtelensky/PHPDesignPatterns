<?php
namespace Singleton;

class DatabaseConnection
implements Connection
{
    private static $instances = array(
        'DB1' => null,
        'DB2' => null,
        'DB3' => null
    );

    private $dbName;

    private function __construct($dbName)
    {
        $this->dbName = $dbName;
    }

    public static function getInstance($dbName)
    {
        if (!array_key_exists($dbName, self::$instances)) {
            throw new \Exception('Unknown database name');
        }

        if (self::$instances[$dbName] === null) {
            self::$instances[$dbName] = new self($dbName);
        }

        return self::$instances[$dbName];
    }

    public function connect()
    {
        echo "Connecting to the Database: {$this->dbName} \n";
    }

    public function disconnect()
    {
        echo "Disconnection to the Database: {$this->dbName} \n";
    }
}