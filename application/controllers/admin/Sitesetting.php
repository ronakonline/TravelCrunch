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
                $this->load->model('SitesettingM');
                $data['sitesetting']=$this->SitesettingM->listsitesetting();
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


	public function homepage(){
		if($_SESSION['admin']){
                $data['title']="Home page Setting";
                //$this->load->model('SitesettingM');
                //$data['sitesetting']=$this->SitesettingM->listsitesetting();
                 $this->load->view('admin/homepage',$data);
        }else{
            redirect('admin');
        }	
	}

	public  function  uploadimage($img,$name){
		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = $img['name'];

		//Load upload library and initialize configuration
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if($this->upload->do_upload($name)){
			$uploadData = $this->upload->data();
			$picture = $uploadData['file_name'];
			return $picture;
		}else{
			return "error";
		}
	}

	public function update_logo(){
		if($_SESSION['admin']){
			$picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg");
			if($picture=="error"){
				$_SESSION['error']="Error Updating Record";
			}else{
				$this->load->model('SitesettingM');
				$op= $this->SitesettingM->update_logo($picture);
				if($op==1){
					$_SESSION['success'] = "Updated Successfully";
				}else{
					$_SESSION['error'] = "Error Updating";
				}
			}

			redirect('admin/Sitesetting/add_logo');
		}else{
			redirect('admin');
		}
	}
}
