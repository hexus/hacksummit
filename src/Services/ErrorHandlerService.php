<?php
namespace Prolist\Services;

use Darya\Http\Request;
use Darya\Http\Response;
use Darya\Routing\Router;
use Darya\Service\Contracts\Container;
use Darya\Service\Contracts\Provider;
use Darya\Smarty\ViewResolver;

/**
 * A service provider that provides itself as an error handler. Cool!
 */
class ErrorHandlerService implements Provider
{
    /**
     * @var ViewResolver
     */
    protected $view;
    
    public function __construct(ViewResolver $view)
    {
        $this->view = $view;
    }
    
    public function handle(Request $request, Response $response)
    {
			$status = $response->status();
			
			$response->content($this->view->create("error/$status", array(
				'http_host' => $request->host(),
				'request_uri' => $request->path(),
				'signature' => $request->server('server_signature')
			)));
			
			return $response;
    }
    
    public function register(Container $container)
    {
    }
    
    public function boot(Router $router)
    {
        $router->setErrorHandler(array($this, 'handle'));
    }
}