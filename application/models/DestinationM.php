<?php

class DestinationM extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function insert_parent($data,$pic){
		$this->load->database();
		$q = $this->db->query('insert into Destinations_Parents values(null,"'.$data['name'].'","'.$pic.'",'.$data['featured'].',0)');
		return $q;
	}

	public function delete_parent($id){
		$this->load->database();
		$q = $this->db->query('update Destinations_Parents set isdeleted=1 where id='.$id);
		$q = $this->db->query('update destination set isdeleted=1 where parent='.$id);
		return $q;
	}

	public function delete_destination($id){
		$this->load->database();
		$q = $this->db->query('update destination set isdeleted=1 where id='.$id);
		$q = $this->db->query('update tours set isdeleted=1 where did='.$id);
		return $q;
	}

	public function show_parent(){
		$this->load->database();
		$q = $this->db->query("SELECT id,name from Destinations_Parents where isdeleted = 0");
		return $q->result();
	}

	public function listparents(){
		$this->load->database();
		$q = $this->db->query("SELECT * from Destinations_Parents where isdeleted = 0");
		return $q->result();
	}

	public function show_destination(){
		$this->load->database();
		$q = $this->db->query("SELECT id,name from destination where isdeleted = 0");
		return $q->result();
	}

	public function insert_destination($data,$pic){
		$this->load->database();
		if (isset($pic['picture3'])) {
			$q = $this->db->query('insert into destination values(null,"'.$data['parentname'].'","'.$data['Destination_name'].'","'.$data['tagline'].'","'.$data['featured'].'","'.$pic['picture1'].'","'.$data['about1'].'","'.$pic['picture2'].'","'.$data['about2'].'","'.$pic['picture3'].'",0)');
			return $q;
		}
		else{
			$q = $this->db->query('insert into destination values(null,"'.$data['parentname'].'","'.$data['Destination_name'].'","'.$data['tagline'].'","'.$data['featured'].'","'.$pic['picture1'].'","'.$data['about1'].'","'.$pic['picture2'].'",null,null,0)');
			return $q;
		}
	}

	public function listdestinations(){
		$this->load->database();
		$q = $this->db->query("SELECT * from destination where isdeleted = 0");
		return $q->result();
	}

	public function alldestinations(){
		$this->load->database();
		$q = $this->db->query("SELECT destination.id, destination.name ,destinations_parents.name as pname  from destination,destinations_parents where destination.parent = destinations_parents.id  AND destinations_parents.isdeleted = 0 AND destination.isdeleted = 0");
		return $q->result();
	}

	public function insert_overview($data){
		$this->load->database();
		$q = $this->db->query('insert into overview values(null,"'.$data['destinationname'].'","'.$data['oleft'].'","'.$data['oright'].'",0)');
	}

	public function insert_faq($data){
		$this->load->database();
		$total = count($data['question']);
		$qu = "insert into faq values";
		for ($i=1; $i<=$total ; $i++) {

			if($i==$total){
				$qu .= '(null,'.$data['destinationname'].',"'.$data['question'][$i].'","'.$data['answer'][$i].'",0)';
			}
			else{
				$qu .= '(null,'.$data['destinationname'].',"'.$data['question'][$i].'","'.$data['answer'][$i].'",0),';
			}
		}

		$q = $this->db->query($qu);
		return $q;
	}

	public function insert_packing($data){
		$this->load->database();
		$item1count = count($data['item1']);
		$item2count = count($data['item2']);
		$item3count = count($data['item3']);
		$item4count = count($data['item4']);
		$qu = 'insert into packing values(null,'.$data['destinationname'].',"'.$data['title1'].'","'.$data['desc1'].'","'.$data['title2'].'","'.$data['desc2'].'","'.$data['list1'].'","[';
		for($i=0; $i<$item1count; $i++){

			if($i==$item1count-1){
				$qu .= $data['item1'][$i]."]".'","'.$data['list2'].'","[';
			}else{
				$qu .= $data['item1'][$i].",";
			}
		}
		for($i=0; $i<$item2count; $i++){

			if($i==$item2count-1){
				$qu .= $data['item2'][$i]."]".'","'.$data['list3'].'","[';
			}else{
				$qu .= $data['item2'][$i].",";
			}
		}
		for($i=0; $i<$item3count; $i++) {

			if ($i == $item3count-1) {
				$qu .= $data['item3'][$i] . "]" . '","' . $data['list4'] . '","[';
			} else {
				$qu .= $data['item3'][$i] . ",";
			}
		}
		for($i=0; $i<$item4count; $i++) {

			if ($i == $item4count-1) {
				$qu .= $data['item4'][$i] . "]".'",0)' ;
			} else {
				$qu .= $data['item4'][$i] . ",";
			}
		}

		$q = $this->db->query($qu);

		return $q;
	}

	public function insert_seotags($data){
		$this->load->database();
		$q = $this->db->query('insert into seotag values(null,"'.$data['destinationname'].'","'.$data['tags'].'",0)');
		return $q;
	}

	public function insert_gallery($data){
		$this->load->database();
		$qu = 'insert into gallery values';
		$total = count($data['filenames']);
		for($i=0; $i<$total; $i++){
			if($i==$total-1){
				$qu .= '(null,'.$data['destination'].',"'.$data['filenames'][$i].'",0)';
			}else{
				$qu .= '(null,'.$data['destination'].',"'.$data['filenames'][$i].'",0),';
			}
		}
		$q = $this->db->query($qu);
		return $q;
	}


	public function getdest($id){
		$q = $this->db->query("select * from destination where id = $id AND isdeleted = 0");
		return $q->result();
	}
	public function getgallery($id){
		$q = $this->db->query("select * from gallery where destid =$id AND isdeleted = 0");
		return $q->result();
	}
	public function getoverview($id){
		$q = $this->db->query("select * from overview where destid =$id AND isdeleted = 0");
		return $q->result();
	}
	public function getfaq($id){
		$q = $this->db->query("select * from faq where destid =$id AND isdeleted = 0");
		return $q->result();
	}
	public function getpacking($id){
		$q = $this->db->query("select * from packing where destid =$id AND isdeleted = 0");
		return $q->result();
	}
	public function editlist_parent($id){
		$q = $this->db->query("select * from destinations_parents where id = $id AND isdeleted = 0");
		return $q->result();
	}

	public function update_parent($data,$img=null){
		if ($img==null) {
			$q = $this->db->query('update destinations_parents set name= "'.$data['name'].'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
		else{
			$q = $this->db->query('update destinations_parents set name= "'.$data['name'].'", bannerimg = "'.$img.'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
	}

	public function insert_travelstyle($data){
		$qu = 'insert into travelstyle values(null,"[';
		$total = count($data['destinations']);
		for($i=0; $i<$total; $i++){
			if($i==$total-1){
				$qu .= $data['destinations'][$i].']","'.$data['name'].'","'.$data['bannerimg'].'",'.$data['featured'].',0)';
			}else{
				$qu .= $data['destinations'][$i].',';
			}
		}
		$q = $this->db->query($qu);
		return $q;
	}

	public function listtravelstyle(){
		$q = $this->db->query("select * from travelstyle where isdeleted = 0");
		return $q->result();
	}

	public function gettoursbydestination($id){
		$q = $this->db->query("select * from destination where isdeleted = 0");
		return $q->result();
	}

	public function delete_travelstyle($id){
		$this->load->database();
		$q = $this->db->query('update travelstyle set isdeleted=1 where id='.$id);
		return $q;
	}
	public function tdestbyparent(){
		$this->load->database();
		$q = $this->db->query('SELECT parent,COUNT(parent) as tdest from destination GROUP by parent');
		return $q->result();
	}
}
