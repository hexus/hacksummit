<?php
namespace Prolist\Services;

use Darya\Database\Storage;
use Darya\Service\Contracts\Container;
use Darya\Service\Contracts\Provider;
use Darya\ORM\Record;

class DatabaseStorageService implements Provider
{
    public function register(Container $container)
    {
        $container->register(array(
            'Darya\Database\Storage' => function ($container) {
                return new Storage($container->database);
            },
            'Darya\Storage\Readable'   => 'Darya\Database\Storage',
            'Darya\Storage\Modifiable' => 'Darya\Database\Storage',
            'Darya\Storage\Searchable' => 'Darya\Database\Storage',
            'Darya\Storage\Queryable'  => 'Darya\Database\Storage',
            'Darya\Storage\Aggregational' => 'Darya\Database\Storage'
        ));
    }
    
    public function boot(Storage $storage)
    {
        Record::setSharedStorage($storage);
    }
}