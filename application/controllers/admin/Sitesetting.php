<?php

class Sitesetting extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Contact";
				$this->load->model('SitesettingM');
				$data['contact']= $this->SitesettingM->list_contact();
                 $this->load->view('admin/Contact',$data);
        }else{
            redirect('admin');
        }
    }

    public function add_logo(){
    	if($_SESSION['admin']){
                $data['title']="Logo";
                 $this->load->view('admin/add-logo',$data);
        }else{
            redirect('admin');
        }
    }
    public function update_contact(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			$this->load->model('SitesettingM');
			$op= $this->SitesettingM->update_contact($data);
			if($op==1){
				$_SESSION['success'] = "Updated Successfully";
			}else{
				$_SESSION['error'] = "Error Updating";
			}
			redirect('admin/Sitesetting');
		}else{
			redirect('admin');
		}
	}
}
