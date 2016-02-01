<?php

namespace Model;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function execute(string $sql, array $mass = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($mass);
        return $res;
    }

    public function query(string $sql, $className, array $mass = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($mass);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
        }
        return [];
    }
}