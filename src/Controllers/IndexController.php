<?php
namespace Prolist\Controllers;

use Darya\Routing\Controller;
use Prolist\Models\Session;

class IndexController extends Controller
{
    public function index()
    {
        $arguments = array();
        
        $ids = Session::listing('id');
        $arguments['sessions'] = count($ids);
        
        $this->template->select('index', $arguments);
        
        return $this->template;
    }
}