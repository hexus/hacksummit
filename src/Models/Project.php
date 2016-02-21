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
    
    protected $relations = array(
        'session' => array('belongs_to', 'Prolist\Models\Session')
    );
}
