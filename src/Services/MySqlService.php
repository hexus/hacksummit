<?php
namespace Prolist\Services;

use Darya\Database\Connection\MySql;
use Darya\Database\Factory;
use Darya\Service\Contracts\Container;
use Darya\Service\Contracts\Provider;

class MySqlService implements Provider
{
    public function register(Container $container)
    {
        $container->register(array(
            'Darya\Database\Connection' => function ($container) {
                $config = $container->config;
                
                $connection = new MySql(
                    $config['database.host'],
                    $config['database.user'],
                    $config['database.pass'],
                    $config['database.name']
                );
                
                return $connection;
            }
        ));
    }
}