<?php

// Create Router instance


use Admin\DuanKm\Controllers\Client\HomController;
use Bramus\Router\Router;

$router = new Router();
$router->get('/', HomController::class . '@index');

$router->run();
