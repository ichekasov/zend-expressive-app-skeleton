<?php

declare(strict_types=1);

use App\Http\Handler;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Application;
use Zend\Expressive\MiddlewareFactory;

return function (Application $app, MiddlewareFactory $factory, ContainerInterface $container) : void {
    $app->get('/', Handler\HomePageHandler::class, 'home');
    $app->get('/api/ping', Handler\PingHandler::class, 'api.ping');
};
