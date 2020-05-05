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
			print_r($data);
//			$op = $this->TourM->insert_overview($data);
//			if ($op == 1) {
//				$_SESSION['success'] = "Successfully Inserted";
//			} else {
//				$_SESSION['error'] = "Error Inserting Record";
//			}

			//redirect('admin/Tour');
		} else {
			redirect('admin');
		}
	}

}
