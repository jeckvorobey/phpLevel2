<?php

class User extends Model
{
    private $userEmail = 'test';
    private $userPass;
    private $userName;
    private $userPhone;

    public function setEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    public function getEmail()
    {
        return $this->userEmail;
    }

    public function setPass($userPass)
    {
        $this->userPass = self::hashPass($userPass);
    }

    public function setName($userName)
    {
        $this->userName = $userName;
    }

    public function getName()
    {
        return $this->userName;
    }

    public function setPhone($userPhone)
    {
        $this->userPhone = $userPhone;
    }

    public function getPhone()
    {
        return $this->userPhone;
    }

    /**
     * Получаем ID пользователя.
     */
    public function getUserId($userEmail)
    {
        return db::getInstance()->SelectOne('SELECT id_user FROM `user` WHERE user_email = :email', ['email' => $userEmail]);
    }

    /*
    * Авторизация пользователя
    */
    public function auth($userEmail, $userPass)
    {
        $userPass = self::hashPass($userPass);

        return db::getInstance()->Select('SELECT user.*, user_role.id_role FROM `user` INNER JOIN `user_role` ON user.id_user = user_role.id_user WHERE user.user_email = :userEmail AND user.user_password = :pass', ['userEmail' => $userEmail, 'pass' => $userPass]);
    }

    /**
     * присваиваем полномочия пользователя(по умолчанию обычный пользователь).
     */
    public function insertUserRole($userId)
    {
        return db::getInstance()->Request('INSERT INTO `user_role`(`id_user`) VALUES (:userId)', ['userId' => $userId]);
    }

    /*
    * Шифрование пароля
    */
    private function hashPass($userPass)
    {
        $salt = 'jhfdkjdhfTyhdh3365@jdh69kkshhQAAAiyeg'; //соль для паролей
        $userPass .= $salt;
        $result = hash('sha256', $userPass); //шифруем в кодировке sha256
        return $result;
    }

    /**
     * добавляем нового пользователя в БД.
     */
    public function newUser($user_name, $user_email, $user_password = null, $phone, $user_adress = null)
    {
        if (!is_null($user_password)) {
            $user_password = self::hashPass($user_password);
        }

        return db::getInstance()->Request('INSERT INTO `user`(`user_name`, `user_email`, `user_password`, `phone`, `user_adress`) VALUES (:user_name, :user_email, :user_password, :phone, :user_adress)', ['user_name' => $user_name, 'user_email' => $user_email, 'user_password' => $user_password, 'phone' => $phone, 'user_adress' => $user_adress]);
    }
}
