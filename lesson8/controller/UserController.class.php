<?php

session_start();
class UserController extends Controller
{
    public $view = 'user';
    public $title;
    public $errors = [];
    private $data = [];

    public function index()
    {
        if (isset($_SESSION['user'])) {
            return ['data' => $_SESSION['user']];
        } else {
            $this->data = $_POST;
            if (isset($this->data['entry'])) {
                $user = User::auth($this->data['userEmail'], $this->data['pass']);
                // print_r($user);
                if (!$user) {
                    header('Location: ../public/index.php?path=index/authError');
                    exit;
                }
                $this->title .= ' | Личный кабинет';
                self::userSession($user);
                header('Location: ../public/index.php?path=user');
                exit;
            }
            if (isset($this->data['reg'])) {
                header('Location: ../public/index.php?path=user/newUser');
                exit;
            }
        }

        header('Location: ../public/index.php?path=index/nowUser');
    }

    public function newUser()
    {
        try {
            $this->title .= ' | Авторизация';
            $this->data = $_POST;
            if (isset($this->data['save'])) {
                if (empty($this->data['userName'])) {
                    $this->errors[] = 'Введите Ф.И.О!';
                }
                if (empty($this->data['userPhone'])) {
                    $this->errors[] = 'Введите телефон!';
                }
                if (empty($this->data['userEmail'])) {
                    $this->errors[] = 'Введите Email!';
                }
                if (empty($this->data['pass'])) {
                    $this->errors[] = 'Введите пароль!';
                }
                if (empty($this->errors)) {
                     print_r($this->data['userEmail']);
                    // User::setEmail($userEmail);
                    // User::setPass($this->data['pass']);
                    // User::setName($this->data['userName']);
                    // User::setPhone($this->data['userPhone']);
                    // $newUser = User::save();
                    // if ($newUser == false) {
                    //     $this->errors[] = 'Пользователь с данным email уже существует!';
//
                    //     return ['data' => $this->data, 'err' => $this->errors];
                    //     exit;
                    // }
                    // $user = User::auth($this->data['userEmail'], $this->data['userPass']);
                    // self::userSession($user);
                    // header('Location: ../public/index.php?path=user');
                    return  ['data' => true];
                    exit;
                }

                return ['data' => $this->data, 'err' => $this->errors];
                exit;
            }
        } catch (Exception $e) {
            echo 'Ошибка: ', $e->getMessage(), '\n';
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: ../public/index.php');
    }

    private function userSession($user)
    {
        $_SESSION['user'] = $user;
    }
}