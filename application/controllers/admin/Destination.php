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

    //Insert Parent(Query)
    public function insertparent(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            $picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","parent");
            if($picture=="error"){
                $_SESSION['error']="Error Inserting Record";
            }else{
                    $this->load->model('DestinationM');
                    $op = $this->DestinationM->insert_parent($data,$picture);
                    $_SESSION['success']="Successfully Inserted";
            }
            redirect('admin/Destination/Add_Parent');

        }else{
            redirect('admin');
        }
    }

    //List Parent(Page)
    public function  List_Parent(){
        if($_SESSION['admin']){
            $data['title']="All Parent";
            $this->load->model("DestinationM");
            $data['parents'] = $this->DestinationM->listparents();
           $this->load->view('admin/list-parent',$data);
        }else{
            redirect('admin');
        }
    }

    //Delete Parent(Query)
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

    //Update Parent(Page)
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

    //Edit Parent(Query)
    public function updateparent(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            if ($_FILES['bannerimg']['error'] != 4){
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
                    }
                    else{
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
    


    //Add Destination(Page) Controller
    public function  Add_Destination(){
		if($_SESSION['admin']){
			$data['title']="Add Destination";
            $this->load->model("DestinationM");
            $data["parentname"] = $this->DestinationM->show_parent();
			$this->load->view('admin/add-destination',$data);
		}else{
			redirect('admin');
		}
	}

    //Insert Destination(Query)
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

    //List Destination(Page)
    public function  List_Destination(){
        if($_SESSION['admin']){
            $data['title']="All Destination";
            $this->load->model("DestinationM");
            $data['destination'] = $this->DestinationM->alldestinations();
            $this->load->view('admin/list-destination',$data);
        }else{
            redirect('admin');
        }
    }

    //Delete Destination(Query)
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

    //Update-Destination(Page)
    public function update_destination($id){
        if($_SESSION['admin']){
            $data['title']="Update Destination";
			  $data['dest'] = destination_data($id);
              $this->load->model('DestinationM');
              $data['banner'] = $this->DestinationM->getBanner($id);
//            $data['edit_destination'] = $this->DestinationM->editlist_destination($id);
//            $data['get_destination'] = $this->DestinationM->gettoursbydestination($id);
//            $data['get_overview'] = $this->DestinationM->getoverview($id);
//            $data['get_faq'] = $this->DestinationM->getfaq($id);
            $this->load->view('admin/edit-destination',$data); 
        }
        else{
            redirect('admin');
        }
    }



    //Add Travel Style(Page)
    public function add_travelstyle(){
        if($_SESSION['admin']){
            $data['title']="Add Travel Style";
            $this->load->model('DestinationM');
            $data['destinations'] = $this->DestinationM->show_destination();
            $this->load->view('admin/add-travelstyle',$data);
        }else{
            redirect('admin');
        }
    }

    //Insert Travel Style(Query)
    public function inserttravelstyle(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			$data['bannerimg'] = $this->uploadimage($_FILES['bannerimg'],"bannerimg","destination");
			if($data['bannerimg']=="error"){
				$_SESSION['error']="Error Inserting Record";
			}else{
				$this->load->model('DestinationM');
				$op = $this->DestinationM->insert_travelstyle($data);
				$_SESSION['success']="Successfully Inserted";
			}
			redirect('admin/Destination/list_travelstyle');
		}else{
			redirect('admin');
		}
	}

    //List Travel Style(Page)
    public function  list_travelstyle(){
        if($_SESSION['admin']){
            $data['title']="All Travel Style";
            $this->load->model('DestinationM');
            $data['travelstyles'] = $this->DestinationM->listtravelstyle();
            $this->load->view('admin/list-travelstyle',$data);
        }else{
            redirect('admin');
        }
    }

    //Delete Travel Style(Query)
    public function delete_travelstyle($id){
        if($_SESSION['admin']){
            $this->load->model('DestinationM');
            $op = $this->DestinationM->delete_travelstyle($id);
            //unlink("uploads/images/parent/".$img);
            if($op==1){
                $_SESSION['success']="Successfully Deleted";
            }else{
                $_SESSION['error']="Error Deleting";
            }
            redirect('admin/Destination/List_travelstyle');
        }else{
            redirect('admin');
        }
    }

    //Update Travel Style(Page)
    public function update_travelstyle(){
        if($_SESSION['admin']){
            $data['title']="Update Travel Style";
            $this->load->view('admin/edit-travelstyle',$data); 
        }
        else{
            redirect('admin');
        }
    }



    //Add Travel Deal(Page)
    public function add_traveldeal(){
        if($_SESSION['admin']){
            $data['title']="Add Travel Deal";
            $this->load->model('DestinationM');
            $data['parents'] = $this->DestinationM->listparents();
            $data['destinations'] = $this->DestinationM->listdestinations();
            $this->load->view('admin/add-traveldeal',$data);
        }else{
            redirect('admin');
        }
    }

    //Insert Travel Deal(Query)
    public function insert_traveldeal(){
        if($_SESSION['admin']){
            $data = $this->input->post();
            //print_r($data);
            $this->load->model('DestinationM');
            $op = $this->DestinationM->insert_traveldeal($data);
            if($op==1){
                $_SESSION['success']="Successfully Inserted";
            }else{
                $_SESSION['error']="Error Inserting";
            }
            redirect('admin/destination/add_traveldeal');
        }
        else{
            redirect('admin');
        }
    }

    //List Travel Deals(Page)
    public function  list_traveldeals(){
        if($_SESSION['admin']){
            $data['title']="All Travel Deals";
            $this->load->model('DestinationM');
            $data['traveldeal'] = $this->DestinationM->listtraveldeal();
            $this->load->view('admin/list-traveldeals',$data);
        }else{
            redirect('admin');
        }
    }

    //Update Travel Deal(Page)
    public function update_traveldeal($id){
        if($_SESSION['admin']){
            $data['title']="Update Travel Deal";
            $this->load->model('DestinationM');
            $data['edit_deal'] = $this->DestinationM->editlist_traveldeal($id);
            $this->load->view('admin/edit-traveldeal',$data); 
        }
        else{
            redirect('admin');
        }
    }



    //Common Image Uploader
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


    //Add Widget(Page)
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

    //Insert OverView(Query)
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

    //Insert FAQ(Query)
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

    //Insert Packing(Query)
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

    //Insert Sea Tags(Query)
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

    //Insert Gallery
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

}
