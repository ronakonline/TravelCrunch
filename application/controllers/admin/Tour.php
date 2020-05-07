<?php

class Tour extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('TourM');
	}

	public function index(){
        if($_SESSION['admin']){
                $data['title']="Add Tour";
                $data['parents'] = $this->TourM->listparent();
			    $data['destinations'] = $this->TourM->listdestinations();
                $this->load->view('admin/add-tour',$data);
        }else{
            redirect('admin');
        }
    }

    public function  list_tours(){
        if($_SESSION['admin']){
            $data['title']="All Tours";
            $data['tours'] = $this->TourM->list_tours();
            $this->load->view('admin/list-tours',$data);
        }else{
            redirect('admin');
        }
    }

    public function update_tour(){
    	if($_SESSION['admin']){
            $data['title']="Update Tour";
            $this->load->view('admin/edit-tour',$data);
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

    public function getdestinationsgeneral(){
    	$data = $this->input->post();
		$data['destinations'] = $this->TourM->getdestinationgeneral($data['pid']);
		$q="";
		foreach ($data['destinations'] as $row){
			$q .= '<option value="'.$row->id.'">'.$row->name.'</option>';
		}
		echo $q;

	}

	public function getdestinations(){
		$data = $this->input->post();
		$data['destinations'] = $this->TourM->getdestination($data['pid']);
		$q="";
		foreach ($data['destinations'] as $row){
			$q .= '<option value="'.$row->id.'">'.$row->name.'</option>';
		}
		echo $q;

	}

	public function gettours(){
		$data = $this->input->post();
		$data['tours'] = $this->TourM->gettours($data['pid']);
		$q="";
		foreach ($data['tours'] as $row){
			$q .= '<option value="'.$row->id.'">'.$row->title.'</option>';
		}
		echo $q;

	}

	public function  insert_general(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			$picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","parent");
			if($picture=="error"){
				$_SESSION['error']=$picture;
			}else{
				$op = $this->TourM->insert_general($data,$picture);
				if($op==1){
					$_SESSION['success']="Successfully Inserted";
				}else{
					$_SESSION['error']="Error Inserting Record";
				}
			}
			redirect('admin/Tour');
		}else{
			redirect('admin');
		}


	}
	public function  insert_overview()
	{
		if ($_SESSION['admin']) {
			$data = $this->input->post();
			//print_r($data);
			$op = $this->TourM->insert_overview($data);
			if ($op == 1) {
				$_SESSION['success'] = "Successfully Inserted";
			} else {
				$_SESSION['error'] = "Error Inserting Record";
			}

			redirect('admin/Tour');
		} else {
			redirect('admin');
		}
	}

	public function  insert_itinerary()
	{
		if ($_SESSION['admin']) {
			$data = $this->input->post();
			$op = $this->TourM->insert_itinerary($data);
			if ($op == 1) {
				$_SESSION['success'] = "Successfully Inserted";
			} else {
				$_SESSION['error'] = "Error Inserting Record";
			}

			redirect('admin/Tour');
		} else {
			redirect('admin');
		}
	}

	public function  insert_details()
	{
		if ($_SESSION['admin']) {
			$data = $this->input->post();
			//print_r($data);
			$op = $this->TourM->insert_details($data);
			if ($op == 1) {
				$_SESSION['success'] = "Successfully Inserted";
			} else {
				$_SESSION['error'] = "Error Inserting Record";
			}

			redirect('admin/Tour');
		} else {
			redirect('admin');
		}
	}
	public function  insert_faq()
	{
		if ($_SESSION['admin']) {
			$data = $this->input->post();
			//print_r($data);
			$op = $this->TourM->insert_faq($data);
			if ($op == 1) {
				$_SESSION['success'] = "Successfully Inserted";
			} else {
				$_SESSION['error'] = "Error Inserting Record";
			}

			redirect('admin/Tour');
		} else {
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


			$qu = $this->TourM->insert_gallery($data);
			echo $qu;
			if ($qu==1) {
				$_SESSION['success']="Inserted Successfully";
			}
			else{
				$_SESSION['error']="Error Inserting Record";
			}
			redirect('admin/Tour');
		}
		else{
			redirect('admin');
		}
	}

	public function delete_tour($id){
		if($_SESSION['admin']){
			$op = $this->TourM->delete_tour($id);
			//unlink("uploads/images/parent/".$img);
			if($op==1){
				$_SESSION['success']="Successfully Deleted";
			}else{
				$_SESSION['error']="Error Deleting";
			}
			redirect('admin/Tour/list_tours');
		}else{
			redirect('admin');
		}
	}
}
