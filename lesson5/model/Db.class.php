<?php

class Db
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = require_once '../configuration/dbConfig.php';
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this->link;
    }

    public function exec($sql, $arrData)
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute($arrData);
    }

    public function query($sql, $arrData)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute($arrData);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if (!$result) {
            return [];
        }

        return $result;
    }
}
