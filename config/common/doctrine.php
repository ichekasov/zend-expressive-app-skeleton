<?php

return [
    'dependencies' => [
        'factories'  => [
            Doctrine\ORM\EntityManagerInterface::class => ContainerInteropDoctrine\EntityManagerFactory::class,
        ],
    ],

    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'url' => getenv('APP_DATABASE_URL'),
                ],
                'proxy_dir' => 'var/cache/doctrine',
            ],
        ],
        'configuration' => [
            'orm_default' => [
                'result_cache' => 'filesystem',
                'metadata_cache' => 'filesystem',
                'query_cache' => 'filesystem',
                'hydration_cache' => 'filesystem',
            ],
        ],
        'driver' => [
            'orm_default' => [
                'class' => Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain::class,
                'drivers' => [
                    'App\Model\Entity' => 'entities',
                ],
            ],
            'entities' => [
                'class' => Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'filesystem',
                'paths' => ['src/Model/Entity'],
            ],
        ],
        'cache' => [
            'filesystem' => [
                'class' => Doctrine\Common\Cache\FilesystemCache::class,
                'directory' => 'data/cache/doctrine',
            ],
        ],
    ],
];
