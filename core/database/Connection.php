<?php



class Connection
{


    /**
     * Database config
     * @var array
     */
    protected static array $config = array(
        'name' => 'rabitproject_db',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );

    /**
     * Create a new PDO connection.
     */
    public static function make()
    {

        try {
            return new PDO(
                static::$config['connection'].';dbname='.static::$config['name'],
                static::$config['username'],
                static::$config['password'],
                static::$config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}