<?php
require 'core/router.php';
require 'Controller/UserController.php';

session_start();

$controllers = new controller();
$router = new router();

$router->get('/', 'index');
$router->post('/createDB', 'createDB');
$router->post('/createTable','createTable');
$router->post('/createColumn','createColumn');




$router->routers();