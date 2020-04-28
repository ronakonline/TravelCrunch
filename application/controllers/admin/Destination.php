<?php

class Destination extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Dashboard";
                 $this->load->view('admin/dashboard',$data);
        }else{
            redirect('admin');
        }
    }

    public function  Add_Destination(){
		if($_SESSION['admin']){
			$data['title']="Dashboard";
			$this->load->view('admin/add-destination',$data);
		}else{
			redirect('admin');
		}
	}
}
