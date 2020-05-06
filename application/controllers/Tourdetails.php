<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tourdetails extends CI_Controller {


	public function index($id)
	{
		$data = frontend_data();
		$data['tourid'] = $id;
		$data['tourdetails'] = tour_data($id);
		$this->load->view('tourdetails',$data);
	}
}
