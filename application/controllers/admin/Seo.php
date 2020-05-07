<?php

class Seo extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Add SEO";
                 $this->load->view('admin/add-seo',$data);
        }else{
            redirect('admin');
        }
    }

    public function  list_seo(){
        if($_SESSION['admin']){
            $data['title']="All SEO";
            $this->load->view('admin/list-seo',$data);
        }else{
            redirect('admin');
        }
    }

    public function update_seo(){
        if($_SESSION['admin']){
            $data['title']="Update SEO";
            $this->load->view('admin/edit-seo',$data);
        }else{
            redirect('admin');
        }
    }
}
