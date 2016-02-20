<?php
namespace Prolist\Services;

use Darya\Service\Contracts\Container;
use Darya\Service\Contracts\Provider;
use Darya\Smarty\ViewResolver;

class ViewService implements Provider
{
    public function register(Container $container)
    {
		$container->register(array(
            'Darya\Smarty\ViewResolver' => function ($container) {
                $viewResolver = new ViewResolver('Darya\Smarty\View', realpath(__DIR__ . '/../../views'));
                
                $viewResolver->shareConfig(array(
                    'base'    => realpath(__DIR__ . '/../../views'),
                    'cache'   => '../storage/cache',
                    'compile' => '../storage/views'
                ));
                
                $viewResolver->share(array(
                    'config' => $container->config
                ));
                
                return $viewResolver;
            },
            'Darya\View\Resolver' => 'Darya\Smarty\ViewResolver'
        ));
    }
}