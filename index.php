<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();

$f3->route('GET / ', function ($f3) {

    //create variables in the F3 hive
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working With Templates');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);

    //Define array of fruits
    $f3->set('fruits', array('apple', 'bananas', 'grapes'));
    $f3->set('bookmarks', array('http://www.cnet.com', 'http://reddit.com/r/news', 'http://youtube.com'));

    //Define associative array
    $f3->set('desserts', array(
        'chocolate' => 'Chocolate Mousse',
        'vanilla' => 'Vanilla Custard',
        'strawberry' => 'Strawberry Shortcake')
    );

    $view = new Template();
    echo $view->render('views/info.html');
});

$f3-> run();