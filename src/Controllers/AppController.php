<?php
namespace Prolist\Controllers;

use Darya\Routing\Controller;
use Prolist\Models\Session;
use Prolist\Models\Project;

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
        
        $session->modified = time();
        $session->save();
        
        $arguments['session'] = $session;
        $arguments['projects'] = $session->projects;
        
        $this->template->select('projects', $arguments);
        
        return $this->template;
    }
}
