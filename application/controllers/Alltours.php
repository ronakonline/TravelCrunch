<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alltours extends CI_Controller {


	public function index($id)
	{
		$data = frontend_data();
		$data['did'] = $id;
		$this->load->view('alltours',$data);
	}
}
