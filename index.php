<?php

//FRONT CONTROLLER

// включить отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

//подключение файлов
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

//вызываем Router
$router = new Router();
$router->run();


