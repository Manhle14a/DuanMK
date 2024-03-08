<?php

// Create Router instance

use Admin\DuanKm\Controller\Client\HomController;
use Bramus\Router\Router;

$router = new Router();
$router->get('/', HomController::class . '@index');
// $router->mount('/movies', function() use ($router) {

//     // will result in '/movies/'
//     $router->get('/', 'mmkk@s');
//     $router->get('/', 'mmkk@s');

// });
$router->run();
