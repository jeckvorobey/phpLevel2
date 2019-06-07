<?php

class Index
{
    private $twig;

    public function __construct()
    {
        include '../lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('../view');
        $this->twig = new Twig_Environment($loader);
    }

    public function formAuth()
    {
        $template = $this->twig->loadTemplate('formAuth.tmpl');
        $content = $template->render([]);
        $result = $this->twig->loadTemplate('index.tmpl');
        echo $result->render(['title' => 'Вход на сайт', 'content' => $content]);
    }

    public function successful()
    {
        $template = $this->twig->loadTemplate('personalArea.tmpl');
        $content = $template->render(['login' => $_SESSION['login'], 'role' => $_SESSION['role']]);
        $result = $this->twig->loadTemplate('index.tmpl');
        echo $result->render(['title' => 'Личный кабинет', 'content' => $content]);
    }

    public function error()
    {
        $template = $this->twig->loadTemplate('formAuth.tmpl');
        $content = $template->render(['error' => 1]);
        $result = $this->twig->loadTemplate('index.tmpl');
        echo $result->render(['title' => 'Вход на сайт', 'content' => $content]);
    }
}