<?php

class User extends Model
{
    private $userEmail;
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
        $this->userPass = $userPass;
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

    public function auth($userEmail, $userPass)
    {
        $userPass = self::hashPass($userPass);

        return db::getInstance()->Select('SELECT user.*, user_role.id_role FROM `user` INNER JOIN `user_role` ON user.id_user = user_role.id_user WHERE user.user_email = :userEmail AND user.user_password = :pass', ['userEmail' => $userEmail, 'pass' => $pass]);
    }

    public function newUser($userEmail, $userPass, $userName, $userPhone)
    {
        $userPass = self::hashPass($userPass);
    }

    private function hashPass($userPass)
    {
        $salt = 'jhfdkjdhfTyhdh3365@jdh69kkshhQAAAiyeg'; //соль для паролей
        $userPass .= $salt;
        $result = hash('sha256', $userPass); //шифруем в кодировке sha256
        return $result;
    }
}
