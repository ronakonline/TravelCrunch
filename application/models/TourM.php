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
		$q = $this->db->query('insert into tours values(null,'.$data['destination'].',"'.addslashes($data['name']).'","'.addslashes($data['from']).'","'.addslashes($data['to']).'","'.$img.'","'.addslashes($data['days']).'","'.addslashes($data['price']).'",null,null,0)');
		return $q;
	}
	public function  insert_overview($data){
		$daydetail = str_replace('"', '', $data['overview']);
		$daydetail = str_replace("'", '', $daydetail);
		$q = $this->db->query('update tours set overview="'.$daydetail.'" where id='.$data['tour']);
		return $q;
	}
	public function  insert_itinerary($data){
		$tit = count($data['daytitle']);
		$daydetail = str_replace('"', '', $data['daydetail'][0]);
		$daydetail = str_replace("'", '', $daydetail);
		$qu = 'insert into itinerary values(null,'.$data['tour'].',"'.$data['daytitle'][0].'","'.$daydetail.'",0)';
		for ($i=1; $i<$tit; $i++){
			$daydetail = str_replace('"', '', $data['daydetail'][$i]);
			$daydetail = str_replace("'", '', $daydetail);
			$qu .= ',(null,'.$data['tour'].',"'.$data['daytitle'][$i].'","'.$daydetail.'",0)';
		}
		$op = $this->db->query($qu);
		return $op;
	}

	public function  insert_details($data){
		$daydetail = str_replace('"', '', $data['details']);
		$daydetail = str_replace("'", '', $daydetail);
		$q = $this->db->query('update tours set details="'.$daydetail.'" where id='.$data['tour']);
		return $q;
	}

	public function insert_faq($data){
		$total = count($data['question']);
		$qu = "insert into tourfaq values";
		for ($i=0; $i<$total ; $i++) {

			if($i==$total-1){
				$qu .= '(null,'.$data['tour'].',"'.addslashes($data['question'][$i]).'","'.addslashes($data['answer'][$i]).'",0)';
			}
			else{
				$qu .= '(null,'.$data['tour'].',"'.addslashes($data['question'][$i]).'","'.addslashes($data['answer'][$i]).'",0),';
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
		$q = $this->db->query('SELECT destination.parent as pid, tours.id,tours.did,tours.title,tours.tfrom,tours.tto,tours.bannerimg,tours.days,tours.price,tours.overview,tours.details from destination,tours where tours.isdeleted=0 and destination.id=tours.did');
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
	public function tourdata($id){
		$q = $this->db->query('select * from tours where id='.$id);
		return $q->result();
	}
	public function update_tgeneral($data,$pic=null){
		$this->load->database();
		if($pic!=null) {
			$q = $this->db->query('update tours set title="'.addslashes($data['name']).'",tfrom="'.addslashes($data['from']).'",tto="'.addslashes($data['to']).'",bannerimg="'.addslashes($pic).'",days="'.addslashes($data['days']).'",price="'.addslashes($data['days']).'" where id='.$data['id']);
		}else{
			$q = $this->db->query('update tours set title="'.addslashes($data['name']).'",tfrom="'.addslashes($data['from']).'",tto="'.addslashes($data['to']).'",days="'.addslashes($data['days']).'",price="'.addslashes($data['days']).'" where id='.$data['id']);
		}
		return $q;
	}
	public function update_toverview($data){
		$this->load->database();
		$q = $this->db->query('update tours set overview="'.addslashes($data['overview']).'" where id='.$data['id']);
		return $q;
	}
	public function  update_titinerary($data){
		$this->db->query('delete from itinerary where tid='.$data['tour']);
		$tit = count($data['daytitle']);
		$daydetail = str_replace('"', '', $data['daydetail'][0]);
		$daydetail = str_replace("'", '', $daydetail);
		$qu = 'insert into itinerary values(null,'.$data['tour'].',"'.$data['daytitle'][0].'","'.$daydetail.'",0)';
		for ($i=1; $i<$tit; $i++){
			$daydetail = str_replace('"', '', $data['daydetail'][$i]);
			$daydetail = str_replace("'", '', $daydetail);
			$qu .= ',(null,'.$data['tour'].',"'.$data['daytitle'][$i].'","'.$daydetail.'",0)';
		}
		$op = $this->db->query($qu);
		return $op;
	}

	public function update_tdetails($data){
		$this->load->database();
		$q = $this->db->query('update tours set details="'.addslashes($data['details']).'" where id='.$data['id']);
		return $q;
	}
	public function update_tfaq($data){
		$q = $this->db->query('delete from tourfaq where tid='.$data['tour']);
		$total = count($data['question']);
		$qu = "insert into tourfaq values";
		for ($i=0; $i<$total ; $i++) {

			if($i==$total-1){
				$qu .= '(null,'.$data['tour'].',"'.addslashes($data['question'][$i]).'","'.addslashes($data['answer'][$i]).'",0)';
			}
			else{
				$qu .= '(null,'.$data['tour'].',"'.addslashes($data['question'][$i]).'","'.addslashes($data['answer'][$i]).'",0),';
			}
		}

		$q = $this->db->query($qu);
		return $q;
	}
	public function update_tgallery($data){
		$this->load->database();
		$q = $this->db->query('update tourgallery set img="'.$data['img'].'" where id='.$data['id']);
		return $q;
	}
	public function delete_tgallery($id){
		$this->load->database();
		$q = $this->db->query('update tourgallery set isdeleted=1 where id='.$id);
		return $q;
	}
}
