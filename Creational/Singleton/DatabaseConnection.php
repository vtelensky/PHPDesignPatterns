<?php
namespace Creational\Singleton;

class DatabaseConnection
implements Connection
{
    /** @var array  */
    private static $instances = array(
        'DB1' => null,
        'DB2' => null,
        'DB3' => null
    );

    /** @var String **/
    private $dbName;

    /** @param String $dbName */
    private function __construct($dbName)
    {
        $this->dbName = $dbName;
    }

    /**
     * @param String $dbName
     *
     * @return Connection
     * @throws \Exception
     */
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