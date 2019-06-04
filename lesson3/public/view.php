<?php

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    require '../controllers/picture.php';
    require_once '../Twig/Autoloader.php';
    Twig_Autoloader::register();
    try {
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('picture.tmpl');
        $content = $template->render($data);
        $result = $twig->loadTemplate('base.tmpl');
        echo $result->render(['content' => $content]);
    } catch (Exception $e) {
        die('ERROR: '.$e->get_message());
    }
}