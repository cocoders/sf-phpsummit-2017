<?php

$config = [
    'db_host' => 'db',
    'db_user' => 'symfony',
    'db_database_name' => 'symfony',
    'db_password' => 'symfony123!#',
    'db_port' => '5432'
];

$pages = [
    'dashboard' => [
        'icon' => 'fa-dashboard',
        'name' => 'Dashboard',
        'menu' => true
    ],
    'invoices' => [
        'icon' => 'fa-list',
        'name' => 'Invoices List',
        'menu' => true
    ],
    'invoice-add' => [
        'icon' => 'fa-file-text',
        'name' => 'Create new invoice',
        'menu' => true
    ],
    'invoice-edit' => [
        'icon' => 'fa-file-text',
        'name' => 'Edit invoice',
        'menu' => false
    ],
    'invoice-delete' => [
        'icon' => 'fa-file-text',
        'name' => 'Remove invoice',
        'menu' => false
    ],
    'user-profile' => [
        'icon' => 'fa-file-text',
        'name' => 'User profile',
        'menu' => false
    ]
];

try {
    $connection = new \PDO(
        'pgsql:host='. $config['db_host'] .';port='. $config['db_port'] .';dbname='. $config['db_database_name'],
        $config['db_user'],
        $config['db_password']
    );
} catch (\PDOException $exception) {
    die ('Cannot connect to database: ' . $exception->getMessage());
}

