<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listings extends CI_Controller {


	public function index($id = 0,$name)
	{
		$data = frontend_data();
		$data['destinfo'] = destination_data($id);
		//print_r($data);
		//$data['destwidget'] = $this->DestinationM->getdestwidget($id);
		$this->load->view('listings',$data);
	}
}
