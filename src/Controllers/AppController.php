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
        $arguments['projects'] = $session->projects;
        
        $this->template->select('projects', $arguments);
        
        return $this->template;
    }
}
