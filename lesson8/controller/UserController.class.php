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
            $this->title .= ' | Личный кабинет';

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

    /**
     * создаем нового пользователя.
     */
    public function newUser($data)
    {
        try {
            $this->title .= ' | Регистрация';
            $this->data = $_POST;
            if (isset($this->data['save'])) {
                /*
                 * проверки на пустые поля формы
                 */
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
                /*
                 * если массив с ошибами пустой, то создаем нового пользователя
                 */
                if (empty($this->errors)) {
                    // print_r($this->data);
                    $newUser = User::newUser($this->data['userName'], $this->data['userEmail'], $this->data['pass'], $this->data['userPhone'], $user_adress = null);
                    if ($newUser == false) {
                        $this->errors[] = 'Пользователь с данным email уже существует!';

                        return ['data' => $this->data, 'err' => $this->errors];
                        exit;
                    }
                    //ID нового пользователя
                    $idNewUser = User::getUserId($this->data['userEmail']);
                    // присваиваем полномочия новому пользователю по уполчанию(Обычный пользователь)
                    User::insertUserRole($idNewUser['id_user']);
                    //сразуже авторизовываем пользователя
                    $user = User::auth($this->data['userEmail'], $this->data['userPass']);
                    self::userSession($user);
                    header('Location: ../public/index.php?path=user');
                }

                return ['data' => $this->data, 'err' => $this->errors];
                exit;
            }
        } catch (Exception $e) {
            echo 'Ошибка: '.$e->getMessage();
        }
    }

    /**
     * Деавторизация пользователя.
     */
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