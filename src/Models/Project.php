<?php
namespace Prolist\Models;

use Darya\Http\Request;
use Darya\ORM\Record;

class Project extends Record
{
    protected $attributes = array(
        'created'  => 'datetime',
        'modified' => 'datetime'
    );
}
