<?php
namespace Prolist\Controllers;

use Darya\Routing\Controller;
use Prolist\Models\Session;

class IndexController extends Controller
{
    public function index()
    {
        $this->template->select('index');
        
        return $this->template;
    }
}