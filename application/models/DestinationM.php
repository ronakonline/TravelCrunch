<?php

class DestinationM extends CI_Model{
	public function insert_parent($name,$pic){
		$this->load->database();
		$q = $this->db->query('insert into Destinations_Parents values(null,"'.$name.'","'.$pic.'")');
		return $q;
	}

	public function delete_parent($id){
		$this->load->database();
		$q = $this->db->query('delete from Destinations_Parents where id='.$id);
		return $q;
	}

	public function show_parent(){
		$this->load->database();
		$q = $this->db->query("SELECT id,name from Destinations_Parents");
		return $q->result();
	}

	public function listparents(){
		$this->load->database();
		$q = $this->db->query("SELECT * from Destinations_Parents");
		return $q->result();
	}

	public function show_destination(){
		$this->load->database();
		$q = $this->db->query("SELECT id,name from destination");
		return $q->result();
	}

	public function insert_destination($data,$pic){
		$this->load->database();
		if (isset($pic['picture3'])) {
			$q = $this->db->query('insert into destination values(null,"'.$data['parentname'].'","'.$data['Destination_name'].'","'.$data['tagline'].'","'.$data['featured'].'","'.$pic['picture1'].'","'.$data['about1'].'","'.$pic['picture2'].'","'.$data['about2'].'","'.$pic['picture3'].'")');
			return $q;
		}
		else{
			$q = $this->db->query('insert into destination values(null,"'.$data['parentname'].'","'.$data['Destination_name'].'","'.$data['tagline'].'","'.$data['featured'].'","'.$pic['picture1'].'","'.$data['about1'].'","'.$pic['picture2'].'",null,null)');
			return $q;
		}	
	}

	public function insert_overview($data){
		$this->load->database();
		$q = $this->db->query('insert into overview values(null,"'.$data['destinationname'].'","'.$data['oleft'].'","'.$data['oright'].'")');
	}

	public function insert_faq($data){
		$this->load->database();
		$total = count($data['question']);
		$qu = "insert into faq values";
		for ($i=1; $i<=$total ; $i++) { 
			
			if($i==$total){
				$qu .= '(null,'.$data['destinationname'].',"'.$data['question'][$i].'","'.$data['answer'][$i].'")';
			}
			else{
				$qu .= '(null,'.$data['destinationname'].',"'.$data['question'][$i].'","'.$data['answer'][$i].'"),';
			} 
		}
		
		$q = $this->db->query($qu);
		return $q;
	}
}
