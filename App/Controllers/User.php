<?php

namespace App\Controllers;

use Core\BaseController;
use Core\Session;
use PDO;

class User extends BaseController
{
    public function showProfile($id)
    {
        $users = $this->db->query("SELECT * FROM users WHERE users.id = '$id'");
        print_r($users);
    }

    public function Test()
    {
        $this->view->load('test', ['isim' => 'Oğuz']);
    }

    public function getTest()
    {
        $get = $this->request->post();
        print_r($get);
    }
}
