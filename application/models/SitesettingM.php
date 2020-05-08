<?php

class SitesettingM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function update_contact($data){
		$q = $this->db->query('update contact set email="'.$data['email'].'", add1="'.$data['add1'].'",add2="'.$data['add2'].'",telno="'.$data['telno'].'",phoneno="'.$data['phoneno'].'"');
		return $q;
	}

	public function list_contact(){
		$q = $this->db->query('select * from contact');
		return $q->result();
	}

	public function listsitesetting(){
		$q = $this->db->query('select * from sitesetting');
		return $q->result();
	}
	public function update_logo($pic){
		$q = $this->db->query('update sitesetting set logo="'.$pic.'"');
		return $q;
	}
}
