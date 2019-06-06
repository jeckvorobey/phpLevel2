<?php

include '../model/User.class.php';
try {
    if (isset($_POST['entry'])) {
        $login = (!empty($_POST['login'])) ? $_POST['login'] : '';
        $pass = (!empty($_POST['pass'])) ? $_POST['pass'] : '';
        $data = new User();
        $user = $data->auth($login, $pass);
        if (!$user) {
            header('Location: ../public/index.php?act=error');
            exit;
        }
        $_SESSION['userId'] = $user[0]['id_user'];
        $_SESSION['login'] = $user[0]['login'];
        $_SESSION['pass'] = $user[0]['pass'];
        $_SESSION['role'] = $user[0]['role'];
        header('Location: ../public/index.php?act=successful');
    }
} catch (Exception $e) {
    echo 'Ошибка: ',  $e->getMessage(), "\n";
}
//header('Location: ../public/index.php?errorAuth');
