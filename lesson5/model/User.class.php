<?php

include_once '../model/Db.class.php';

class User
{
    private $db;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $this->db = new Db();
    }

    public function auth($login, $pass)
    {
        $sql = 'SELECT * FROM `users` WHERE login=? AND pass=?';
        $arrData = [$login, $pass];
        $user = $this->db->query($sql, $arrData);

        return $user;
    }

    public function exit()
    {
    }
}
