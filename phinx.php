<?php
require __DIR__ . '/vendor/autoload.php';

$db = include __DIR__ . '/config/db.php';
$config = $db['dev'];

/*list(
    'driver' => $adapter,
    'host' => $host,
    'database' => $name,
    'username' => $user,
    'password' => $pass,
    'charset' => $charset,
    'collation' => $collation
) = $db['dev'];*/

return [
    'paths' => [
        'migrations' => [ __DIR__ . '/db/migrations' ],
        'seeds' => [ __DIR__ . '/db/seeds' ]
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