<?php
/**
 * @var $app \Slim\App
 */

use Starter\Controller\HomeController;

$app->get('/', HomeController::class);

$app->get('/greet/{name}', HomeController::class . ':greeting');