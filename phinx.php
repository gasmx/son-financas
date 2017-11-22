<?php
require __DIR__ . '/vendor/autoload.php';

$db = include __DIR__ . '/config/db.php';
$config = $db['dev'];

return [
    'paths' => [
        'migrations' => [ __DIR__ . '/database/migrations' ],
        'seeds' => [ __DIR__ . '/database/seeds' ]
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'development',
        'development' => [
            'adapter' => $config['driver'],
            'host' => $config['host'],
            'name' => $config['database'],
            'user' => $config['username'],
            'pass' => $config['password'],
            'charset' => $config['charset'],
            'collation' => $config['collation']
        ]
    ] 
];