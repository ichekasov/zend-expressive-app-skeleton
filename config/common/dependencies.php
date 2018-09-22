<?php

declare(strict_types=1);

use App\Http\Handler;

return [
    'dependencies' => [
        'aliases' => [],
        'invokables' => [

        ],
        'factories'  => [
            Handler\HomeHandler::class => Handler\HomeHandlerFactory::class,
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
