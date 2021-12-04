<?php
<<<<<<< HEAD
session_start();
require '../../includes/flight/Flight.php';
=======
require '../../includes/flight/flight/Flight.php';
>>>>>>> 3ac9aea9a3dd7aa864a89623f251722ac5bf8a8e
require '../../includes/smarty/libs/Smarty.class.php';
require('pdo.php');  

Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';    
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
});

Flight::set('db', $db);

require "routes/routes.php";
Flight::start();