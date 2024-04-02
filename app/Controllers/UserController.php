<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\Config\Config;

class UserController extends BaseController
{
    

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function lupapassword(){
       
        echo view("v_lupapassword");
    }

    function resetpassword(){    
       
        echo view("v_resetpassword");
    }

    
    public function logout(){
        
        echo view("welcome_message");
    }
   
}
