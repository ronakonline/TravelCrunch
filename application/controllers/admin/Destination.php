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

    public function insertparent(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			//Check whether user upload picture
			if(!empty($_FILES['bannerimg']['name'])){
				$config['upload_path'] = 'uploads/images/parent';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = $_FILES['bannerimg']['name'];

				//Load upload library and initialize configuration
				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('bannerimg')){
					$uploadData = $this->upload->data();
					$picture = $uploadData['file_name'];
				}else{
					$_SESSION['errorimg']="No banner Image";
				}
			}else{
				$_SESSION['errorimg']="No banner Image";
			}
			$this->load->model('DestinationM');
			$op = $this->DestinationM->insert_parent($data['name'],$picture);
			print_r($op);
			echo $op;

			//redirect('admin/Destination/Add_Parent');

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
