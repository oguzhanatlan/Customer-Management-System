<?php

namespace App\Controllers;

use Core\BaseController;
use Core\Session;

class Auth extends BaseController
{
    public function Index()
    {
        $data['navbar'] = $this->view->load('static/navbar');
        $data['sidebar'] = $this->view->load('static/sidebar');

        echo $this->view->load('auth/index', compact('data'));
    }
    public function Login()
    {
        echo 'login post';
    }
    public function Logout()
    {
        Session::removeSession();
        redirect('giris');
    }
}