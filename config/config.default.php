<?php
return array(
    'aliases' => array(
        'database' => 'Darya\Database\Connection',
        'request'  => 'Darya\Http\Request',
        'response' => 'Darya\Http\Response',
        'router'   => 'Darya\Routing\Router',
        'session'  => 'Darya\Http\Session',
        'storage'  => 'Darya\Storage\Readable',
        'view'     => 'Darya\View\Resolver'
    ),
    'base_url' => '',
    'database.type' => 'mysql',
    'database.host' => 'localhost',
    'database.user' => '',
    'database.pass' => '',
    'database.name' => '',
    'debug'    => false,
    'services' => json_decode(file_get_contents(__DIR__ . '/services.json'), true)
);
