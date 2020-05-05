<?php

class TourM extends CI_Model{

	private $table ;
	public function __construct()
	{
		$this->load->database();
		$this->table = "Tour";
	}

	public function listparent(){
		$q = $this->db->query('select * from destinations_parents where isdeleted=0');
		return $q->result();
	}

	public function listdestinations(){
		$q = $this->db->query('select * from destination where isdeleted=0');
		return $q->result();
	}

	public function getdestinationgeneral($id){
		$q = $this->db->query('select * from destination where parent= '.$id.' and isdeleted=0');
		return $q->result();
	}

	public function getdestination($id){
		$q = $this->db->query('SELECT * from destination,tours where parent='.$id.' and tours.did=destination.id and destination.isdeleted=0 and tours.isdeleted=0');
		return $q->result();
	}

	public function gettours($id){
		$q = $this->db->query('select * from tours where did= '.$id.' and isdeleted=0');
		return $q->result();
	}

	public function  insert_general($data,$img){
		$q = $this->db->query('insert into tours values(null,'.$data['destination'].',"'.$data['name'].'","'.$data['from'].'","'.$data['to'].'","'.$img.'","'.$data['days'].'","'.$data['price'].'",null,null,0)');
		return $q;
	}
	public function  insert_overview($data){
		$q = $this->db->query('update tours set overview="'.$data['overview'].'" where id='.$data['tour']);
		return $q;
	}
}
