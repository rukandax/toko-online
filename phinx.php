<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

return [
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],

    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'production',

        'production' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DATABASE_HOST'],
            'name' => $_ENV['DATABASE_NAME'],
            'user' => $_ENV['DATABASE_USER'],
            'pass' => $_ENV['DATABASE_PASS'],
            'port' => 3306,
            'charset' => 'utf8'
        ]
    ]
];
