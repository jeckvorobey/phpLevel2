<?php

session_start();
class UserController extends Controller
{
    public $view = 'user';
    public $title;

    public function index()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
            header('Location: ../public/index.php?path=user');
        //добавить массив дата
        } else {
            if (isset($_POST['entry'])) {
                $userEmail = (!empty($_POST['userEmail'])) ? trim(strip_tags($_POST['login'])) : '';
                $pass = (!empty($_POST['pass'])) ? trim(strip_tags($_POST['pass'])) : '';
                $user = User::auth($userEmail, $pass);
                if (!$user) {
                    header('Location: ../public/index.php?path=index/authError');
                    exit;
                }
                $this->title .= ' | Личный кабинет';
            }
            if (isset($_POST['reg'])) {
                header('Location: ../public/index.php?path=user/newUser');
                exit;
            }
            if (isset($_POST['save'])) {
            }
            header('Location: ../public/index.php?path=index/nowUser');
        }
    }

    public function newUser()
    {
    }
}