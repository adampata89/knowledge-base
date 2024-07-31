<?php
return [
    'backend' => [
        'frontName' => 'epanel746'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => '37qPIkTyjhhb3l1uMG0sm9Ssy146KkeH'
        ],
        'frontend' => [
            'default' => [
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'port' => '6379',
                    'persistent' => '', // Specify a unique string like "cache-db0" to enable persistent connections.
                    'database' => '1',
                    'password' => ''
                ],
                'id_prefix' => '7bf_'
            ],
            'page_cache' => [
                'id_prefix' => '7bf_',
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'port' => '6379',
                    'persistent' => '', // Specify a unique string like "cache-db0" to enable persistent connections.
                    'database' => '0', // Separate database 1 to keep FPC separately
                    'password' => '',
//                    'force_standalone' => '0', // 0 for phpredis, 1 for standalone PHP
//                    'connect_retries' => '1', // Reduces errors due to random connection failures
                    'lifetimelimit' => '57600', // 16 hours of lifetime for cache record
                    'compress_data' => '0' // DISABLE compression for EE FPC since it already uses compression
                ]
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'e8da5314a3a0b8db22da3d729fb3f42a'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db',
                'dbname' => 'magento246',
                'username' => 'root',
                'password' => 'password',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'redis',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '0'
        ]
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'magento.localhost',
        'youtube.com'
    ],
    'install' => [
        'date' => 'Mon, 25 Mar 2024 08:55:32 +0000'
    ]
];
