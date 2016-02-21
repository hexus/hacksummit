<?php
namespace Prolist\Services;

use Darya\Routing\Router;
use Darya\Service\Contracts\Container;
use Darya\Service\Contracts\Provider;

class RoutingService implements Provider
{
    public function register(Container $container)
    {
        $container->register(array(
            'Darya\Routing\Router' => function ($container) {
                $routes = $container->config->routes ?: array(
                    '/:controller/:action/:params' => null,
                    '/:controller/:params' => null,
                    '/:action/:params' => null,
                    '/' => null
                );
                
                $router = new Router($routes, array(
                    'namespace' => 'Prolist\Controllers'
                ));
                
                $router->base($container->config->base_url);
                
                $router->setServiceContainer($container);
                
                $router->setEventDispatcher($container->event);
                
                return $router;
            }
        ));
    }
}