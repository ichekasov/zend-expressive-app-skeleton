<?php

declare(strict_types=1);

use App\Http\Handler;

return [
    'dependencies' => [
        'aliases' => [],
        'invokables' => [
            Handler\PingHandler::class => Handler\PingHandler::class,
        ],
        'factories'  => [
            Handler\HomePageHandler::class => Handler\HomePageHandlerFactory::class,
        ],
    ],
    'templates' => [
        'paths' => [
            'app'    => ['templates/app'],
            'error'  => ['templates/error'],
            'layout' => ['templates/layout'],
        ],
    ],
];
