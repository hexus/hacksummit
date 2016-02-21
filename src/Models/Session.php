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
    
    public static function findExisting(Request $request)
    {
        $sessionKey = $request->session('key');
        $cookiesKey = $request->cookie('key');
        
        \Chrome::log($sessionKey);
        \Chrome::log($cookiesKey);
        
        $sessionSession = static::find(array(
            'key' => $sessionKey
        ));
        
        $cookiesSession = static::find(array(
            'key' => $cookiesKey
        ));
        
        return $sessionSession ?: $cookiesSession;
    }
}
