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
        header('Location: ../public/index.php?act=successful');
    }
    if (isset($_GET['exit'])) {
        $data = new User();
        $data->exit();
        header('Location: ../public/index.php');
    }
} catch (Exception $e) {
    echo 'Ошибка: ',  $e->getMessage(), "\n";
}