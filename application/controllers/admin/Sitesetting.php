<?php

class Sitesetting extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Contact";
                 $this->load->view('admin/Contact',$data);
        }else{
            redirect('admin');
        }
    }

    public function add_logo(){
    	if($_SESSION['admin']){
                $data['title']="Insert Logo";
                 $this->load->view('admin/add-logo',$data);
        }else{
            redirect('admin');
        }
    }
}
