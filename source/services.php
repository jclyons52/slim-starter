<?php
/**
 * @var $c \Slim\Container
 */

use Psr\Container\ContainerInterface;

$c[PDO::class] = function(ContainerInterface $c) {
    $settings = $c->get('settings')['db'];
    $host = $settings['host'];
    $database = $settings['database'];
    $username = $settings['username'];
    $password = $settings['password'];

    return new PDO("$this->_driver:host=$host;dbname=$database", $username, $password);
};