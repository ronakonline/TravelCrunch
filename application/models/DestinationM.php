<?php

class DestinationM extends CI_Model{
	public function insert_parent($name,$pic){
		$this->load->database();
		$q = $this->db->query('insert into Destinations_Parents values(null,"'.$name.'","'.$pic.'")');
		return $q;
	}
}
