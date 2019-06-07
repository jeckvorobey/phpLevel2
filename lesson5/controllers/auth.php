<?php
session_start();
include '../model/User.class.php';
try {
    $data = new User();
    if (isset($_POST['entry'])) {
        $login = (!empty($_POST['login'])) ? $_POST['login'] : '';
        $pass = (!empty($_POST['pass'])) ? $_POST['pass'] : '';
       
        $user = $data->auth($login, $pass);
        if (!$user) {
            header('Location: ../public/index.php?act=error');
            exit;
        }
        header('Location: ../public/index.php?act=successful');
    }
    if (isset($_GET['exit'])) {
        $data->exit();
        header('Location: ../public/index.php');
    }
} catch (Exception $e) {
    echo 'Ошибка: ',  $e->getMessage(), "\n";
}
