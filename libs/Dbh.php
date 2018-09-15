<?php

class Dbh
{
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $charset;
    public $pdo;

    /*
     * Connect to DB
     *
     * @return PDO object
     */
    public function connect()
    {
        $this->host = '127.0.0.1';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'nfq';
        $this->charset = 'utf8mb4';

        // set DSN
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname.';charset='.$this->charset;

        // Create a PDO
        try {
            $this->pdo = new PDO($dsn,$this->user,$this->password);
        } catch (\Exception $e) {
            echo $e;
        }
        return $this->pdo;
    }
}
