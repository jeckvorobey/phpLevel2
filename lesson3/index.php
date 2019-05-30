<?php

include 'controllers/gallery.php';

include 'Twig/Autoloader.php';
Twig_Autoloader::register();
try {
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('gallery.tmpl');
    $content = $template->render($data);
    $result = $twig->loadTemplate('base.tmpl');
    echo $result->render($content);
} catch (Exception $e) {
    die('ERROR: '.$e->get_message());
}