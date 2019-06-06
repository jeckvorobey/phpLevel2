<?php

include_once '../model/Db.class.php';

class User
{
    private $db;
    private $session;

    public function __construct()
    {
        $this->init();
    }

    public function getSession()
    {
        return $this->session;
    }

    public function setSession($arrSession)
    {
        $this->session = $arrSession;
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
        unset($this->db);

        return $user;
    }

    public function exit()
    {
    }
}