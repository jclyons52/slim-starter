<?php
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 5/07/17
 * Time: 9:32 PM
 */

namespace Starter;


use Slim\App;

class Kernel
{
    /**
     * @var App
     */
    private $app;

    public function boot()
    {
        $this->app = $app = new App(require 'settings.php');

        $c = $app->getContainer();

        require 'routes.php';

        require 'services.php';
    }

    public function run()
    {
        $this->app->run();
    }
}