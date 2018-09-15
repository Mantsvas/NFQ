<?php
require_once 'libs/Dbh.php';

class Model
{
    /*
     * Fetch data from DB
     *
     * @param $sql contains string with SQL query
     * @return array with data from DB
     */
    public function select($sql)
    {
        $dbh = new Dbh;
        $this->pdo = $dbh->connect();
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
     * Inserts data into DB
     *
     * @param string $sql contains SQL INSERT query with data from array $array
     */
    public function save($array,$sql)
    {
        $dbh = new Dbh;
        $this->pdo = $dbh->connect();
        $query = $this->pdo->prepare($sql);
        $query->execute($array);
        return;
    }
}
