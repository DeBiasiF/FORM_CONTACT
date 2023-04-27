<?php

class Connect extends PDO{
 
    private static ?Connect $instance = null;

    /**
     * getInstance, return a connection
     *
     * @return Connect
     */
    public static function getInstance() : Connect {
        if(self::$instance == null){

            $dns = "pgsql:host=10.113.28.39;port=5432;dbname=php_florian";
            $options = array(
                PDO::ATTR_PERSISTENT  => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try {
                self::$instance = new self($dns, 'fdebiasi', 'Lenouveaumotdepasse', $options);
            } catch (Error $e) {
                echo($e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>