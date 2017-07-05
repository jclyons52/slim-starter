<?php
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 5/07/17
 * Time: 9:37 PM
 */

namespace Starter\Controller;


use PDO;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeController
{
    public function __construct(ContainerInterface $c)
    {
//        $this->pdo = $c->get(PDO::class);
    }

    public function __invoke(Request $req, Response $res, $args)
    {
        $res->getBody()->write("Hello World");

        return $res;
    }

    public function greeting(Request $req, Response $res, $args)
    {
        $name = $args['name'];

        $res->getBody()->write("Hello $name");

        return $res->withStatus(200);
    }
}