<?php

spl_autoload_register(function ($className) {
    include 'model/'.$className.'.class.php';
});