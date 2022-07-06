<?php

namespace App\Controllers;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ProjectModel;

class Project extends BaseController
{
    // protected $request;
    public function __construct()
    {
    // $this->request = $request;
    $this->ProjectModel = new ProjectModel();
    $this->session = \Config\Services::session($config);
    $this->session->start();

    }

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

    public function project_add_post(){

        $table_name = 'tbl_projects';  
        $project_name = $_POST['project_name'];
        $project_status = $_POST['project_status'];
        $client_company = $_POST['client_company'];
        $project_leader = $_POST['project_leader'];
        $estimated_budget = $_POST['estimated_budget'];
        $total_amount = $_POST['total_amount'];
        $estimated_project_duration = $_POST['estimated_project_duration'];

        $where = array('project_name' => $project_name, 'project_status' =>  $project_status, 'client_company' => $client_company, 'project_leader' => $project_leader, 'estimated_budget' => $estimated_budget, 'total_amount' => $total_amount, 'estimated_project_duration' => $estimated_project_duration);

        // Getting data

        $get_data = $this->ProjectModel->get_data($table_name, $where);
    
        if($get_data){
            $user_id = $get_data[0]->id;

        if($this->input->method() === 'post'){
            
            }else{
            $this->load->view('project_add');
             }
            return true;
            return view('project_add');
        }
       
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