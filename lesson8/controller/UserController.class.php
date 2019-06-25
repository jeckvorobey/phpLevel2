<?php

//session_start();
class UserController extends Controller
{
    public $view = 'user';
    public $title;

    public function index()
    {
        if (isset($_POST['entry'])) {
            $login = (!empty($_POST['login'])) ? trim(strip_tags($_POST['login'])) : '';
            $pass = (!empty($_POST['pass'])) ? trim(strip_tags($_POST['pass'])) : '';
            $user = User::auth($login, $pass);
            if (!$user) {
                header('Location: ../public/index.php?path=index/authError');
                exit;
            }
            $this->title .= ' | Личный кабинет';
        }
        if (isset($_POST['reg'])) {
        }
    }

    public function newUser()
    {
    }
}