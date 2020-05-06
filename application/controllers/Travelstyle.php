<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travelstyle extends CI_Controller {


	public function index($did,$tid)
	{
		$data = frontend_data();
		$data['tid']=$tid;
		$data['did']=$did;
		$this->load->view('travelstyle',$data);
	}
}
