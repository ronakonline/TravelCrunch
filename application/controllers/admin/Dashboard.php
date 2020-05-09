<?php

class Dashboard extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Dashboard";
                 $this->load->view('admin/dashboard',$data);
        }else{
            redirect('admin');
        }
    }
    public function logout(){
		if($_SESSION['admin']){
			unset($_SESSION['admin']);
			redirect('admin');
		}else{
			redirect('admin');
		}
	}
}
