<?php

class DB
{
    public $port;
    public $socket;
    public $host;
    public $dbname;
    public $username;
    function __construct($port, $socket, $host, $username, $dbname)
    {
        $this->port = $port;
        $this->socket = $socket;
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
    }

    public static function validateConnection($con)
    {

    }

    /**
     * establish connection to databse using configuration reported by constructor
     * @return PDO object with connection established
     * @throws PDOException stating connection failure
     */
    public function establishconnection($pwd)
    {
        $dbh = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8', $this->username, $pwd);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $dbh;
    }
}
