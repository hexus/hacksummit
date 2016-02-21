<?php
namespace Prolist\Controllers;

use Darya\Routing\Controller;
use Prolist\Models\Session;

class AppController extends Controller
{
    public function index($sessionKey = null) {
        $arguments = array();
        
        \Chrome::log(Session::find(array('key' => $sessionKey)));
        
        $session = Session::find(array('key' => $sessionKey));
        
        
        
        $this->template->select('app', $arguments);
        
        return $this->template;
    }
}
