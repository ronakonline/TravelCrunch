<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traveldeals extends CI_Controller {


	public function index()
	{
		$data = frontend_data();
		$data['title'] = "Travel Deals || Travelu";
		$this->load->view('traveldeals',$data);
	}
}
