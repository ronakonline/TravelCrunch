<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listings extends CI_Controller {


	public function index()
	{
		$this->load->view('listings');
	}
}
