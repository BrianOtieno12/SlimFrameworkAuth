<?php

use DI\Container;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__.'/../vendor/autoload.php';

$container = new Container;

$settings = require __DIR__.'/../app/index.php';
$settings($container);

AppFactory::setContainer($container);
$app = AppFactory::create();

$middleware = require __DIR__.'/../app/middleware.php';
$middleware($app);

$app->get('/', function(Request $request, Response $respone, $parameters){

    $respone->getBody()->write('Hello World');

    return $respone;

});

$app->run();