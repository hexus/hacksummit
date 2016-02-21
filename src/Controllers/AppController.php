<?php
namespace Prolist\Controllers;

use Darya\Routing\Controller;
use Prolist\Models\Session;

class AppController extends Controller
{
    public function index($sessionKey = null) {
        $arguments = array();
        
        $session = Session::find(array('key' => $sessionKey));
        
        if (!$session) {
            $this->request->flash('error', "We couldn't find that session.");
            $this->response->redirect('/');
            
            return $this->response;
        }
        
        $arguments['session'] = $session;
        
        $this->template->select('app', $arguments);
        
        return $this->template;
    }
}
