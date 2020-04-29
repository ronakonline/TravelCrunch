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

    public function  Add_Parent(){
        if($_SESSION['admin']){
            $data['title']="Add Parent";
            $this->load->view('admin/add-parent',$data);
        }else{
            redirect('admin');
        }
    }

    public function  List_Parent(){
        if($_SESSION['admin']){
            $data['title']="List Parent";
            $this->load->view('admin/list-parent',$data);
        }else{
            redirect('admin');
        }
    }

    public function  List_Destination(){
        if($_SESSION['admin']){
            $data['title']="List Parent";
            $this->load->view('admin/list-destination',$data);
        }else{
            redirect('admin');
        }
    }

    public function  Add_Widget(){
        if($_SESSION['admin']){
            $data['title']="Add Widget";
            $this->load->view('admin/add-widget',$data);
        }else{
            redirect('admin');
        }
    }
}
