<?php

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\AuthModel;

class Auth extends BaseController

{
    // protected $request;

    public function __construct()
    {
        // $this->request = $request;
        $this->AuthModel = new AuthModel();

        $this->session = \Config\Services::session($config);
        $this->session->start();

    }

    public function index()
    {
        return view('welcome_message');
    }

    public function login() 
    {
        return view('login');
    }

    public function login_post(){

        $table_name = 'tbl_users';

        
        $user_name = $_POST['email'];
        $password = md5($_POST['password']);

        $where = array('email' => $user_name, 'password' => $password);

        // Getting data

        $get_data = $this->AuthModel->get_data($table_name, $where);
    
        if($get_data){
            $user_id = $get_data[0]->id;

            if($user_id != ''){
                
                $this->session->set('user_id', $user_id);
                return redirect()->route('dashboard');
                // redirect to dashboard;
            }else{
                return redirect()->route('/login');
            }
        }else{
            return redirect()->route('login');
        }

       
    }

    public function register() 
    {
        return view('register');
    }
    
}
