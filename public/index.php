<?php

require_once __DIR__ ."/../vendor/autoload.php";

use app\core\Application;

use app\controllers\HomeController;
use app\controllers\LoginController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function() {
    return "Hello World";
});

$app->router->get('/home', [HomeController::class, 'home']);

$app->router->get('/login', 'login');
$app->router->post('/login', [LoginController::class, 'handleLogin']);

$app->router->get('/register', 'register');

$app->router->get('/dashboard', 'dashboard');

$app->router->get('/userupload', 'user_upload');

$app->router->get('/guestupload', 'guest_upload');

$app->run();
