<?php

declare(strict_types=1);

return [
    'templates' => [
        'paths' => [
            'app'    => ['templates/app'],
            'error'  => ['templates/error'],
            'layout' => ['templates/layout'],
        ],
    ],
    'twig' => [
        'cache_dir' => 'var/cache/twig',
    ],
];