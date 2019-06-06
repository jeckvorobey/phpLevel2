<?php

session_start();
try {
    spl_autoload_register(function ($className) {
        include '../controllers/'.$className.'.class.php';
    });

    $page = new Index();
    $action = (isset($_GET['act'])) ? $_GET['act'] : 'formAuth';
    $page->$action();
} catch (Exception $e) {
    echo 'Ошибка: ',  $e->getMessage(), "\n";
}