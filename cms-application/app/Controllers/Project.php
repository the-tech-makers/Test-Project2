<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function index()
    { 
        return view('welcome_message');
    }
    public function project_add(){
        // if($this->input->method() === 'post'){
            
        // }else{
        //     $this->load->view('project_add');
        // }
        return view('project_add');
        // return true;
        // return view('project_add');
    }

    public function all_project(){
        return view('all_project');
    }

    public function project_edit(){
        return view('project_edit');
    }

    public function project_detail(){
        return view('project_detail');
    }
    

    public function dashboard(){
        return view('dashboard');
    }
    
}