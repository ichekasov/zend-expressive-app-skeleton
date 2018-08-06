<?php

declare(strict_types=1);

return [
    'dependencies' => [
        'aliases' => [],
        'invokables' => [
            App\Handler\PingHandler::class => App\Handler\PingHandler::class,
        ],
        'factories'  => [
            App\Handler\HomePageHandler::class => App\Handler\HomePageHandlerFactory::class,
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
