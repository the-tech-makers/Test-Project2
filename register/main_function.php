<?php
require_once 'db.php';
date_default_timezone_set('Asia/Kolkata');
// session_start();

if(isset($_POST['register_user'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $conf_password = md5($_POST['conf_password']);
    $add_time = date('Y-m-d H:i:s');

    if( $password != $conf_password ){
        echo "Password and confirmm password are not same.";
    }else{
    
    // Checking email and phone no duplicacy

    // $check_email = $mysqli->query("SELECT * FROM tbl_users WHERE email = '$email'");
    // $toatal_email = $check_email->num_rows;
    // if($toatal_email > 0){
    //     echo "User is already registered with this email id, please try another email."; die;
    // }else{

    //     $check_phone = $mysqli->query("SELECT * FROM tbl_users WHERE phone = '$phone'");
    //     $toatal_phone = $check_phone->num_rows;
    //     if($toatal_phone > 0){
    //         echo "User is already registered with this phone no , please try another number."; die;
    //     }else{

            $register_query = "INSERT INTO tbl_users (id, name, email, password, status, added_on, modified_on) VALUES ('', '$name', '$email' , '$password', '1', '$add_time', '$add_time')";

            if ($mysqli->query($register_query)) {
                $_SESSION['message']="Record inserted successfully.";
            }

            if ($mysqli->errno) {
                $_SESSION['message'] = "Could not insert record into table: ". $mysqli->error;
            }
            header("Location: register.php");
        }
    }


     if( isset($_POST['user_login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if( !empty($email) && !empty($password) ){
            $password = md5($password);
            $register_query = "SELECT * FROM tbl_users WHERE email='$email' AND password = '$password'" ;
            $get_row = $mysqli->query( $register_query);

            $total_records = $get_row->num_rows;

            if( $total_records == 0 ){
                echo "email and password are not correct.";
            }else{
                while ( $user_data = $get_row->fetch_assoc() ) {

                    $user_id = $user_data['id'];
                    $user_name = $user_data['name'];
                    $user_email = $user_data['email'];

                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['name'] = $user_name;
                    $_SESSION['email'] = $user_email;
                }
            
                header("Location: dashboard.php");

            }
        }else{
            echo "Email and password cannot be blank.";
        }

    }

    if(isset($_POST['create_user'])){
        $project_name = $_POST['project_name'];
        $project_desc = $_POST['project_desc'];
        $client_company = $_POST['client_company'];
        $project_leader = $_POST['project_leader'];
        $estimated_budget = $_POST['estimated_budget'];
        $total_amount = $_POST['total_amount'];
        $estimated_project_duration = $_POST['estimated_project_duration'];
        $add_time = date('Y-m-d H:i:s');
        
        $project_query = "INSERT INTO tbl_projects (id, project_name, project_desc, client_company, project_leader, estimated_budget, total_amount, estimated_project_duration, status, added_on, modified_on) VALUES ('', '$project_name', '$project_desc' , '$client_company', '$project_leader', '$estimated_budget', '$total_amount', '$estimated_project_duration', '', '$add_time', '$add_time')";

            if ($mysqli->query($project_query)) {
                $_SESSION['message'] = "Record inserted successfully.";
            }

            if ($mysqli->errno) {
                $_SESSION['message'] = "Could not insert record into table: ". $mysqli->error;
            }
    
            header("Location: project_add.php"); 
    
    }
    


    if(isset($_POST['edit_project'])){
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>"; die;

        $id = $_POST['id'];
        $project_name = $_POST['project_name'];
        $project_desc = $_POST['project_desc'];
        $client_company = $_POST['client_company'];
        $project_leader = $_POST['project_leader'];
        $estimated_budget = $_POST['estimated_budget'];
        $total_amount = $_POST['total_amount'];
        $estimated_project_duration = $_POST['estimated_project_duration'];
        $add_time = date('Y-m-d h:i:s');
        
        $register_query = "UPDATE tbl_projects SET 
        project_name = '$project_name',
        project_desc = '$project_desc',
        client_company = '$client_company',
        project_leader = '$project_leader',
        estimated_budget = '$estimated_budget',
        total_amount = '$total_amount',
        estimated_project_duration = '$estimated_project_duration'
         WHERE id = '$id'";
    
        if ($mysqli->query($register_query)) {
            $_SESSION['message'] = "Record inserted successfully.";
        }
    
        if ($mysqli->errno) {
            $_SESSION['message'] = "Could not insert record into table: ". $mysqli->error;
        }
    
        header("Location: project_edit.php");
    }
    
    
   
//delete record



if(isset($_POST['delete_project'])){
    $id = $_POST['project_id'];
    if($id != 'user_data'){
    echo "Delete the record";
    }else{
        echo "Show an errror that project_id cannot be blank";
    }

    $register_query  = " DELETE FROM `tbl_projects` WHERE id = '$id' ";

    $res = $mysqli->query( $register_query );

    if( $res ){
        $_SESSION["message"] = "Record deleted Successfully!";
    }

    header('location: project.php');
}


