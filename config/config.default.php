<?php
return array(
    'aliases' => array(
        'view' => 'Darya\View\Resolver'
    ),
    'database.type' => 'mysql',
    'database.host' => 'localhost',
    'database.user' => '',
    'database.pass' => '',
    'database.name' => '',
    'services' => json_decode(file_get_contents(__DIR__ . '/services.json'), true)
);