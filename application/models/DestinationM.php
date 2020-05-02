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
				$qu .= $data['item4'][$i] . "]".'")' ;
			} else {
				$qu .= $data['item4'][$i] . ",";
			}
		}

		$q = $this->db->query($qu);
		
		return $q;
	}
}
