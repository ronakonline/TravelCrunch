<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['admin'])){
            redirect('admin/Dashboard');
        }
        
        $data=[];
        if(isset($_SESSION['error'])){
            $data['error'] = $_SESSION['error'];
            unset($_SESSION['error']);
        }
        else{
            $data['error'] = "NO_ERROR";
        }

        $data['title'] = "Admin Login";
        $data['page'] = "login";
    $this->load->view('admin/login',$data);
	}

  public function checklogin(){
        if(isset($_POST)){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $query = $this->db->query("SELECT * FROM `admin` WHERE `username`='$username' AND `password` ='$password'");
            
            
            
            if($query->num_rows()){
                //Correct
                $result = $query->result_array();
                //echo "<pre>";
                //print_r($result);die();
                //$this->session->set_userdata('admin',$result[0]['aid']);
                $_SESSION['admin'] = $result[0];
                redirect('admin/Dashboard');
            }
            else{
				$_SESSION['error']="Incorrect Entries";
                redirect('admin');
            }
        }
        else{
            die("Invalid Input");
        }
    }
    
    public function logout(){
        session_destroy();
        redirect('Institute');
    }



}
