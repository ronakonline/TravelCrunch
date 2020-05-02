<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->model('DestinationM');
		$data['parents'] = $this->DestinationM->listparents();
		$data['destinations'] = $this->DestinationM->listdestinations();
		$data['tdestination'] = count($data['destinations']);
		$this->load->view('home',$data);
	}
}
