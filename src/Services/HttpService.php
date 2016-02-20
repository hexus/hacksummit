<?php
namespace Prolist\Services;

use Darya\Http\Request;
use Darya\Http\Session\Php as PhpSession;
use Darya\Service\Contracts\Container;
use Darya\Service\Contracts\Provider;

class HttpService implements Provider
{
    public function register(Container $container)
    {
		$container->register(array(
            'Darya\Http\Request' => function ($container) {
                return Request::createFromGlobals($container->session);
            },
            'Darya\Http\Session' => new PhpSession
        ));
    }
}