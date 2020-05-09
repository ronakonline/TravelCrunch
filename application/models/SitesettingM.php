<?php

class SitesettingM extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}

	public function update_contact($data){
		$q = $this->db->query('update contact set email="'.addslashes($data['email']).'", add1="'.addslashes($data['add1']).'",add2="'.addslashes($data['add2']).'",telno="'.addslashes($data['telno']).'",phoneno="'.addslashes($data['phoneno']).'"');
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

	public function editlist_footer(){
		$q = $this->db->query('select * from footer');
		return $q->result();
	}

	public function editlist_navbar(){
		$q = $this->db->query('select * from navbar');
		return $q->result();
	}

	public function update_logo($pic){
		$q = $this->db->query('update sitesetting set logo="'.addslashes($pic).'"');
		return $q;
	}

	public function update_footer($data){
		$q = $this->db->query('update footer set about="'.$data['about'].'",facebook="'.$data['facebook'].'",instagram="'.$data['instagram'].'",twitter="'.$data['twitter'].'" where id = 1');
		return $q;
	}

	public function update_navbar($data){
		$q = $this->db->query('update navbar set first="'.$data['first'].'",second="'.$data['second'].'",third="'.$data['third'].'",four="'.$data['four'].'",five="'.$data['five'].'" where id = 1');
		return $q;
	}

	public function update_slider($data){
		$this->load->database();
		if($data['p']==1) {
			$q = $this->db->query('update sitesetting set title1="'.addslashes($data['title']).'",tagline1="'.addslashes($data['tagline']).'",slide1="'.addslashes($data['picture']).'"');
			return $q;
		}else if($data['p']==2) {
			$q = $this->db->query('update sitesetting set title1="'.addslashes($data['title']).'",tagline1="'.addslashes($data['tagline']).'",slide2="'.addslashes($data['picture']).'"');$q = $this->db->query('update sitesetting set title1="'.$data['title'].'",tagline1="'.$data['tagline'].'",slide2="'.$data['picture'].'"');
			return $q;
		}else if($data['p']==3) {
			$q = $this->db->query('update sitesetting set title1="'.addslashes($data['title']).'",tagline1="'.addslashes($data['tagline']).'",slide3="'.addslashes($data['picture']).'"');
			return $q;
		}else{
			$q = $this->db->query('update sitesetting set title1="'.addslashes($data['title']).'",tagline1="'.addslashes($data['tagline']).'"');
			return $q;
		}
	}

	public function update_features($data){
		$q = $this->db->query('update sitesetting set ftitle1="'.addslashes($data['ftitle1']).'",ftitle2="'.addslashes($data['ftitle2']).'",ftitle3="'.addslashes($data['ftitle3']).'",feature1="'.addslashes($data['feature1']).'",feature2="'.addslashes($data['feature2']).'",feature3="'.addslashes($data['feature3']).'"');
		return $q;
	}
	public function update_homediv($data,$pic=null){
		if($pic!=null) {
			$q = $this->db->query('update sitesetting set homedivtext="' . addslashes($data['homedivtext']) . '",homedivimg="' . addslashes($pic) . '"');
		}else{
			$q = $this->db->query('update sitesetting set homedivtext="' . addslashes($data['homedivtext']) . '"');
		}
		return $q;
	}
}
