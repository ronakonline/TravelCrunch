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

    //Add Parent(PAGE) Controller
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
            $picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","parent");
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

    public function deleteparent($id,$img){
		if($_SESSION['admin']){
			$this->load->model('DestinationM');
			$op = $this->DestinationM->delete_parent($id);
			unlink("uploads/images/parent/".$img);
			if($op==1){
				$_SESSION['success']="Successfully Deleted";
			}else{
				$_SESSION['error']="Error Deleting";
			}
			redirect('admin/Destination/List_Parent');
		}else{
			redirect('admin');
		}
	}


    public function  List_Parent(){
        if($_SESSION['admin']){
            $data['title']="List Parent";
            $this->load->model("DestinationM");
            $data['parents'] = $this->DestinationM->listparents();
           $this->load->view('admin/list-parent',$data);
        }else{
            redirect('admin');
        }
    }


    //Add Destination(Page) Controller
    public function  Add_Destination(){
		if($_SESSION['admin']){
			$data['title']="Dashboard";
            $this->load->model("DestinationM");
            $data["parentname"] = $this->DestinationM->show_parent();
			$this->load->view('admin/add-destination',$data);
		}else{
			redirect('admin');
		}
	}

    public function insert_destination(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $pic = array('picture1','picture2','picture3');

            $pic['picture1'] = $this->uploadimage($_FILES['file1'],"file1","destination");
            $pic['picture2'] = $this->uploadimage($_FILES['file2'],"file2","destination");

            if ($_FILES['file3']['error']==0) {
                $pic['picture3'] = $this->uploadimage($_FILES['file3'],"file3","destination");    
            }

            if($pic['picture1']=="error" || $pic['picture2']=="error" ){
                $_SESSION['error']="Error Inserting Record";
            }else{
                    $this->load->model('DestinationM');
                    $op = $this->DestinationM->insert_destination($data,$pic);
                    $_SESSION['success']="Successfully Inserted";
            }
            redirect('admin/Destination/Add_Destination');


        }else{
            redirect('admin');
        }
    }


    public function add_travelstyle(){
        if($_SESSION['admin']){
            $data['title']="Add Travel Style";
            $this->load->view('admin/add-travelstyle',$data);
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


    public function  List_Destination(){
        if($_SESSION['admin']){
            $data['title']="List Destination";
            $this->load->model("DestinationM");
            $data['destination'] = $this->DestinationM->alldestinations();
            $this->load->view('admin/list-destination',$data);
        }else{
            redirect('admin');
        }
    }

    public function delete_destination($id){
        if($_SESSION['admin']){
            $this->load->model('DestinationM');
            $op = $this->DestinationM->delete_destination($id);
            //unlink("uploads/images/parent/".$img);
            if($op==1){
                $_SESSION['success']="Successfully Deleted";
            }else{
                $_SESSION['error']="Error Deleting";
            }
            redirect('admin/Destination/List_Destination');
        }else{
            redirect('admin');
        }
    }

    public function  Add_Widget(){
        if($_SESSION['admin']){
            $data['title']="Add Widget";
            $this->load->model("DestinationM");
            $data["destinationname"] = $this->DestinationM->show_destination();
            $this->load->view('admin/add-widget',$data);
        }else{
            redirect('admin');
        }
    }

    public function insert_overview(){
        if($_SESSION['admin']){
            $data['title']="Add Widget";
            $data = $this->input->post();
            $this->load->model("DestinationM");
            $this->DestinationM->insert_overview($data);
            redirect('admin/Destination/Add_Widget');
        }
        else{
            redirect('admin');
        }
    }

    public function insert_faq(){
        if($_SESSION['admin']){
            $data['title']="Add Widget";
            $data = $this->input->post();
            
            $this->load->model("DestinationM");
            $qu = $this->DestinationM->insert_faq($data);
            if ($qu==1) {
                 $_SESSION['success']="Inserted Successfully";
            }
            else{
                 $_SESSION['error']="Error Inserting Record";
            }
            redirect('admin/Destination/Add_Widget');
        }
        else{
            redirect('admin');
        }   
    }

    public function insert_packing(){
        if($_SESSION['admin']){
            $data['title']="Add Widget";
            $data = $this->input->post();

            $this->load->model("DestinationM");
            $qu = $this->DestinationM->insert_packing($data);
            if ($qu==1) {
                 $_SESSION['success']="Inserted Successfully";
            }
            else{
                 $_SESSION['error']="Error Inserting Record";
            }
            redirect('admin/Destination/Add_Widget');
        }
        else{
            redirect('admin');
        }
    }

    public function insert_seotags(){
        if($_SESSION['admin']){
            $data['title']="Add Widget";
            $data = $this->input->post();

            $this->load->model("DestinationM");
            $qu = $this->DestinationM->insert_seotags($data);
            echo $qu;
            if ($qu==1) {
                 $_SESSION['success']="Inserted Successfully";
            }
            else{
                 $_SESSION['error']="Error Inserting Record";
            }
            redirect('admin/Destination/Add_Widget');
        }
        else{
            redirect('admin');
        }
    }

    public function insert_gallery(){
        if($_SESSION['admin']){
            $data['title']="Add Widget";
            $data = $this->input->post();

			// Count total files
			$countfiles = count($_FILES['files']['name']);

			// Looping all files
			for($i=0;$i<$countfiles;$i++){

				if(!empty($_FILES['files']['name'][$i])){

					// Define new $_FILES array - $_FILES['file']
					$_FILES['file']['name'] = $_FILES['files']['name'][$i];
					$_FILES['file']['type'] = $_FILES['files']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['files']['error'][$i];
					$_FILES['file']['size'] = $_FILES['files']['size'][$i];

					// Set preference
					$config['upload_path'] = 'uploads/images/gallery';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['max_size'] = '5000'; // max_size in kb
					$config['file_name'] = $_FILES['files']['name'][$i];

					//Load upload library
					$this->load->library('upload',$config);

					// File upload
					if($this->upload->do_upload('file')){
						// Get data about the file
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];

						// Initialize array
						$data['filenames'][] = $filename;
					}
				}

			}


            
            // $pic['picture1'] = $this->uploadimage($_FILES[''],"file1","destination");
             $this->load->model("DestinationM");


             $qu = $this->DestinationM->insert_gallery($data);
             echo $qu;
             if ($qu==1) {
                  $_SESSION['success']="Inserted Successfully";
             }
             else{
                  $_SESSION['error']="Error Inserting Record";
             }
             redirect('admin/Destination/Add_Widget');
        }
        else{
            redirect('admin');
        }        
    }

    public function editlist_parent($id){
        if($_SESSION['admin']){
            $data['title'] ="Update Parent";
            $this->load->model('DestinationM');
            $data['edit_parent'] = $this->DestinationM->editlist_parent($id);
            $this->load->view('admin/edit-parent',$data);
        }
        else{
            redirect('admin');   
        }    
    }

    public function updateparent(){
         if($_SESSION['admin']){
            
            $data = $this->input->post();
            if ($_FILES['bannerimg']['error'] != 4) {
                $picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","parent");
                if($picture=="error"){
                    $_SESSION['error']="Error Inserting Record";
                    redirect('admin/Destination/editlist_parent/'.$data['id']);
                }
                else{
                    $this->load->model('DestinationM');
                    $op = $this->DestinationM->update_parent($data,$picture);        
                    if($op==1){
                    $_SESSION['success']="Successfully Update";
                    }else{
                        $_SESSION['error']="Error Updating";
                    }
                    redirect('admin/Destination/editlist_parent/'.$data['id']);
                }
                

            }    

            else{
                 $this->load->model('DestinationM');
                $op = $this->DestinationM->update_parent($data);
                echo $op;
                if($op==1){
                $_SESSION['success']="Successfully Updated";
                }else{
                    $_SESSION['error']="Error updating";
                }
                redirect('admin/Destination/editlist_parent/'.$data['id']);
            }

        }
        else{
            redirect('admin');   
        }   
    }
}
