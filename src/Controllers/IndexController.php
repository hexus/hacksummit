<?php
namespace Prolist\Controllers;

use Darya\Http\Response;
use Darya\Routing\Controller;
use Prolist\Models\Project;
use Prolist\Models\Session;

class IndexController extends Controller
{
    protected function getExistingSession()
    {
        return Session::findExisting($this->request);
    }
    
    public function index()
    {
        $arguments = array();
        
        $arguments['flashes'] = $this->request->flashes();
        
        // Session::listing('id') only retrieves one, for some reason
        $ids = Session::distinct('id', array(
            'modified >=' => date('Y-m-d H:i:s', strtotime('-1 hour'))
        ));
        
        $arguments['active_sessions'] = count($ids);
        
        // Existing session
        $session = $this->getExistingSession();
        
        if ($session) {
            $arguments['session'] = $session;
        }
        
        $this->template->select('index', $arguments);
        
        return $this->template;
    }
    
    public function newAction() {
        $session = $this->getExistingSession();
        
        if (!$session) {
            $key = uniqid();
            
            $session = new Session(array(
                'key' => uniqid(),
                'created' => time()
            ));
            
            $projects = array();
            
            for ($i = 1; $i < 6; $i++) {
                $projects[] = new Project(array(
                    'name' => "Default project $i"
                ));
            }
            
            $session->projects()->set($projects);
        }
        
        $session->modified = time();
        
        if ($session->save() && $session->projects()->save()) {
            $this->request->session->set('key', $session->key);
            $this->response->redirect('/app/' . $session->key);
            $this->response->cookies->set('key', $session->key, '+1 week');
            
            return $response;
        }
        
        $this->request->flash('error', "We couldn't create a new Prolist session for you.");
        $this->response->redirect('/');
        
        return $this->response;
    }
    
    public function bethany() {
        $this->template->select('bethany');
        
        return $this->template;
    }
}