<?php
namespace Prolist\Models;

use Darya\Http\Request;
use Darya\ORM\Record;

class Session extends Record
{
    protected $attributes = array(
        'created'  => 'datetime',
        'modified' => 'datetime'
    );
    
    protected $relations = array(
        'projects' => array('has_many', 'Prolist\Models\Project')
    );
    
    public static function findExisting(Request $request)
    {
        $sessionKey = $request->session('key');
        $cookiesKey = $request->cookie('key');
        
        $sessionSession = static::find(array(
            'key' => $sessionKey
        ));
        
        if ($sessionSession) {
            return $sessionSession;
        }
        
        $cookiesSession = static::find(array(
            'key' => $cookiesKey
        ));
        
        return $cookiesSession;
    }
}
