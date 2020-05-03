<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tourdetails extends CI_Controller {


	public function index()
	{
		$data = frontend_data();
		$this->load->view('tourdetails',$data);
	}
}
