<?php

class User extends Model
{
    public function hashPass($pass)
    {
        $salt = 'jhfdkjdhfTyhdh3365@jdh69kkshhQAAAiyeg'; //соль для паролей
        $pass .= $salt;
        $result = hash('sha256', $pass); //шифруем в кодировке sha256
        return $result;
    }
}