<?php
namespace Prolist\Controllers;

use Darya\Routing\Controller;
use Prolist\Models\Session;

class IndexController extends Controller
{
    public function index()
    {
        $arguments = array();
        
        $ids = Session::listing('id', array(
            'modified >' => date('Y-m-d H:i:s', strtotime('-1 hour'))
        ));
        
        $arguments['sessions'] = count($ids);
        
        $this->template->select('index', $arguments);
        
        return $this->template;
    }
}