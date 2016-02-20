<?php
require __DIR__ . '/vendor/autoload.php';

use Darya\Common\Autoloader;
use Darya\Service\Application;
use Prolist\Models\Config;

$autoloader = new Autoloader(__DIR__, array(
	'Prolist' => 'src'
));

$autoloader->register();

$application = new Application(array(
    'Prolist\Models\Config' => function ($application) {
        $config = include __DIR__ . '/config/config.default.php';
        
        if (is_file(__DIR__ . '/config/config.php'))
            $config = array_merge($config, include __DIR__ . '/config/config.php');
        
        foreach ($config['aliases'] as $alias => $target) {
            $application->alias($alias, $target);
        }
        
        return new Config($config);
    },
    
    'config' => 'Prolist\Models\Config',
    'event'  => 'Darya\Events\Dispatcher'
));

foreach ($application->config->services as $service) {
    if (class_exists($service) && is_subclass_of($service, 'Darya\Service\Contracts\Provider')) {
        $application->provide($application->create($service));
    }
}

$application->boot();

return $application;
