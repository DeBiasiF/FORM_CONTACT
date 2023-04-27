<?php

class Connect extends PDO{
    
    private String $host;
    private int $port;
    private String $user;
    private String $password;
    private String $dbName;
    private String $error;
    private ?PDO $con;
    private static ?Connect $instance = null;

    /**
     * Constructeur
     *
     * @param String $host
     * @param integer $port
     * @param String $user
     * @param String $password
     * @param String $dbName
     */
    private function __construct(String $host, int $port , String $user, String $password, String $dbName) {

        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
        $this->dbName = $dbName;

        
        $dns = "pgsql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT  => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->con = new PDO($dns, $this->user, $this->password, $options);
        } catch (Error $e) {
            $this->error = $e->getMessage();
        }
    }

    /**
     * getInstance, return a connection
     *
     * @return Connect
     */
    public static function getInstance() : Connect {
        if(self::$instance == null){
            self::$instance = new Connect('10.113.28.39', '5432' , 'fdebiasi', 'Lenouveaumotdepasse', 'php_florian');
        }
        return self::$instance;
    }

    public function getConnection() : PDO {
        return $this->con;
    }

}
?>