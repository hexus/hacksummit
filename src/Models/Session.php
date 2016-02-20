<?php
namespace Prolist\Models;

use Darya\ORM\Record;

class Session extends Record
{
    protected $attributes = array(
        'created'  => 'date',
        'modified' => 'date'
    );
}
