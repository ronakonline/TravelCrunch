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
	public function  insert_itinerary($data){
		$tit = count($data['daytitle']);
		$qu = 'insert into itinerary values(null,'.$data['tour'].',"'.$data['daytitle'][0].'","'.$data['daydetail'][0].'",0)';
		for ($i=1; $i<$tit; $i++){
			$qu .= ',(null,'.$data['tour'].',"'.$data['daytitle'][$i].'","'.$data['daydetail'][$i].'",0)';
		}
		$op = $this->db->query($qu);
		return $op;
	}

	public function  insert_details($data){
		$q = $this->db->query('update tours set details="'.$data['details'].'" where id='.$data['tour']);
		return $q;
	}

	public function insert_faq($data){
		$total = count($data['question']);
		$qu = "insert into tourfaq values";
		for ($i=0; $i<$total ; $i++) {

			if($i==$total-1){
				$qu .= '(null,'.$data['tour'].',"'.$data['question'][$i].'","'.$data['answer'][$i].'",0)';
			}
			else{
				$qu .= '(null,'.$data['tour'].',"'.$data['question'][$i].'","'.$data['answer'][$i].'",0),';
			}
		}

		$q = $this->db->query($qu);
		return $q;
	}

	public function insert_gallery($data){
		$qu = 'insert into tourgallery values';
		$total = count($data['filenames']);
		for($i=0; $i<$total; $i++){
			if($i==$total-1){
				$qu .= '(null,'.$data['tour'].',"'.$data['filenames'][$i].'",0)';
			}else{
				$qu .= '(null,'.$data['tour'].',"'.$data['filenames'][$i].'",0),';
			}
		}
		$q = $this->db->query($qu);
		return $q;
	}

	public function listtours(){
		$q = $this->db->query('select * from tours where isdeleted=0');
		return $q->result();
	}

	public function touritinerary($id){
		$q = $this->db->query('select * from itinerary where isdeleted=0 and tid='.$id);
		return $q->result();
	}

	public function tourfaq($id){
		$q = $this->db->query('select * from tourfaq where isdeleted=0 and tid='.$id);
		return $q->result();
	}
	public function tourimg($id){
		$q = $this->db->query('select * from tourgallery where isdeleted=0 and tid='.$id);
		return $q->result();
	}

	public function list_tours(){
		$q = $this->db->query('SELECT tours.id,destination.name,tours.title from tours,destination WHERE tours.isdeleted=0 and destination.isdeleted=0 and tours.did=destination.id');
		return $q->result();
	}
	public function delete_tour($id){
		$q = $this->db->query('update tours set isdeleted=1 where id='.$id);
		return $q;
	}
}
