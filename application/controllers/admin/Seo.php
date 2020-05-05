<?php

class Seo extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Insert SEO";
                 $this->load->view('admin/add-seo',$data);
        }else{
            redirect('admin');
        }
    }
}
