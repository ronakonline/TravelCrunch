<?php

class Tour extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Add Tour";
                 $this->load->view('admin/add-tour',$data);
        }else{
            redirect('admin');
        }
    }

}