<?php

class User extends Model
{
    public function auth($login, $pass)
    {
        $pass = self::hashPass($pass);

        return db::getInstance()->Select('SELECT user.*, user_role.id_role FROM `user` INNER JOIN `user_role` ON user.id_user = user_role.id_user WHERE user.user_login = :login AND user.user_password = :pass', ['login' => $login, 'pass' => $pass]);
    }

    private function hashPass($pass)
    {
        $salt = 'jhfdkjdhfTyhdh3365@jdh69kkshhQAAAiyeg'; //соль для паролей
        $pass .= $salt;
        $result = hash('sha256', $pass); //шифруем в кодировке sha256
        return $result;
    }
}