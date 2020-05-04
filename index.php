<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();

//run $f3
$f3->route('GET / ', function () {
    $view = new Template();
    echo $view->render('views/info.html');
});

$f3-> run();