<?php

session_start();
spl_autoload_register(function ($className) {
    include '../model/'.$className.'.class.php';
});

try {
    include '../lib/Twig/Autoloader.php';
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('../view');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('formAuth.tmpl');
    $content = $template->render([]);
    $result = $twig->loadTemplate('index.tmpl');
    echo $result->render(['title' => 'Вход на сайт', 'content' => $content]);

} catch (Exception $e) {
    echo 'Ошибка: ',  $e->getMessage(), "\n";
}