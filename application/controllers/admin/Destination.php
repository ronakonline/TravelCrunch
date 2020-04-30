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

    public  function  uploadimage($img,$name,$dest){
		$config['upload_path'] = 'uploads/images/'.$dest;
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

    public function insertparent(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			$picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","parent");
			/*$j=0;
			 * for(5){
			 * 		count($_FILES['file'])
			 * $picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","parent");
			 * if($picture=="error"){
				$j++;
			}else{
					$this->load->model('DestinationM');
					$op = $this->DestinationM->insert_parent($data['name'],$picture);
					$_SESSION['success']="Successfully Inserted";
			}
			 * }
			 *
			 */
			if($picture=="error"){
				$_SESSION['error']="Error Inserting Record";
			}else{
					$this->load->model('DestinationM');
					$op = $this->DestinationM->insert_parent($data['name'],$picture);
					$_SESSION['success']="Successfully Inserted";
			}
			redirect('admin/Destination/Add_Parent');

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
