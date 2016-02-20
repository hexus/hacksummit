<?php
return array(
    'aliases' => array(
        'request'  => 'Darya\Http\Request',
        'response' => 'Darya\Http\Response',
        'session'  => 'Darya\Http\Session',
        'view'     => 'Darya\View\Resolver'
    ),
    'database.type' => 'mysql',
    'database.host' => 'localhost',
    'database.user' => '',
    'database.pass' => '',
    'database.name' => '',
    'services' => json_decode(file_get_contents(__DIR__ . '/services.json'), true)
);
