<?php
namespace Prolist\Controllers;

use Darya\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->template->select('index');
        
        return $this->template;
    }
}