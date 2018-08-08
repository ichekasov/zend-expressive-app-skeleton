<?php

declare(strict_types=1);

return [
    'dependencies' => [
        'abstract_factories'  => [
            Zend\ServiceManager\AbstractFactory\ReflectionBasedAbstractFactory::class,
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
