<?php

include_once '../model/Db.class.php';

class User
{
    private $db;

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
        $_SESSION['userId'] = $user[0]['id_user'];
        $_SESSION['login'] = $user[0]['login'];
        $_SESSION['pass'] = $user[0]['pass'];
        $_SESSION['role'] = $user[0]['role'];
        unset($this->db);

        return $user;
    }

    public function exit()
    {
        unset($_SESSION['userId']);
        unset($_SESSION['login']);
        unset($_SESSION['pass']);
        unset($_SESSION['role']);
        session_destroy();
    }
}
