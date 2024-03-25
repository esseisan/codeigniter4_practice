<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Sample extends Controller
{
    // public function _remap($method)
    // {
    //     if($method=="index")
    //     {
    //         return $this->$method();
    //     }
    //     else
    //     {

    //     }
    // }


        
   


    public function index()
    {
        echo "HELLO SHIT";
    }

    public function users()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM users');
        $result = $query->getResult();
        $data['users'] = $result;
        return view('users/list',$data);
    }
}
