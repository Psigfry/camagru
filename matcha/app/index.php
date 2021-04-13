<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use DI\Container;
require __DIR__ . '/../vendor/autoload.php';

$container = new Container();

AppFactory::setContainer($container);

$container->set('view', function() {
    return Twig::create(__DIR__ . '/../templates',
        ['cache' => __DIR__ . '/../cache']);
});

$app = AppFactory::create();

$app->add(TwigMiddleware::createFromContainer($app));

require __DIR__ . '/routes.php';

$app->run();