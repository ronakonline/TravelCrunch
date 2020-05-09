<?php

class DestinationM extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

		
	public function tdestbyparent(){
		$this->load->database();
		$q = $this->db->query('SELECT parent,COUNT(parent) as tdest from destination GROUP by parent');
		return $q->result();
	}

	//Insert Parent
	public function insert_parent($data,$pic){
		$this->load->database();
		$q = $this->db->query('insert into Destinations_Parents values(null,"'.addslashes($data['name']).'","'.$pic.'",'.$data['featured'].',0)');
		return $q;
	}

	//Show parent(DropDown)
	public function show_parent(){
		$this->load->database();
		$q = $this->db->query("SELECT id,name from Destinations_Parents where isdeleted = 0");
		return $q->result();
	}

	//List Parent
	public function listparents(){
		$this->load->database();
		$q = $this->db->query("SELECT * from Destinations_Parents where isdeleted = 0");
		return $q->result();
	}

	//Delete Parent
	public function delete_parent($id){
		$this->load->database();
		$q = $this->db->query('update Destinations_Parents set isdeleted=1 where id='.$id);
		$q = $this->db->query('update destination set isdeleted=1 where parent='.$id);
		return $q;
	}

	//Edit_List Parent
	public function editlist_parent($id){
		$q = $this->db->query("select * from destinations_parents where id = $id AND isdeleted = 0");
		return $q->result();
	}

	//Update Parent
	public function update_parent($data,$img=null){
		if ($img==null) {
			$q = $this->db->query('update destinations_parents set name= "'.addslashes($data['name']).'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
		else{
			$q = $this->db->query('update destinations_parents set name= "'.addslashes($data['name']).'", bannerimg = "'.addslashes($img).'" where id = "'.$data['id'].'" AND isdeleted = 0');
			return $q;
		}
	}

	

	//Insert Destionation
	public function insert_destination($data,$pic){
		$this->load->database();
		if (isset($pic['picture3'])) {
			$q = $this->db->query('insert into destination values(null,"'.addslashes($data['parentname']).'","'.addslashes($data['Destination_name']).'","'.addslashes($data['tagline']).'","'.$data['featured'].'","'.addslashes($pic['picture1']).'","'.addslashes($data['about1']).'","'.addslashes($pic['picture2']).'","'.addslashes($data['about2']).'","'.addslashes($pic['picture3']).'",0)');
			return $q;
		}
		else{
			$q = $this->db->query('insert into destination values(null,"'.addslashes($data['parentname']).'","'.addslashes($data['Destination_name']).'","'.addslashes($data['tagline']).'","'.$data['featured'].'","'.addslashes($pic['picture1']).'","'.addslashes($data['about1']).'","'.addslashes($pic['picture2']).'",0)');
			return $q;
		}
	}

	//Show Destination(DropDown)
	public function show_destination(){
		$this->load->database();
		$q = $this->db->query("SELECT id,name from destination where isdeleted = 0");
		return $q->result();
	}

	//List DEstination
	public function listdestinations(){
		$this->load->database();
		$q = $this->db->query("SELECT * from destination where isdeleted = 0");
		return $q->result();
	}

	//All Destination(Data Table)
	public function alldestinations(){
		$this->load->database();
		$q = $this->db->query("SELECT destination.id, destination.name ,destinations_parents.name as pname  from destination,destinations_parents where destination.parent = destinations_parents.id  AND destinations_parents.isdeleted = 0 AND destination.isdeleted = 0");
		return $q->result();
	}

	//Delete Destination
	public function delete_destination($id){
		$this->load->database();
		$q = $this->db->query('update destination set isdeleted=1 where id='.$id);
		$q = $this->db->query('update tours set isdeleted=1 where did='.$id);
		return $q;
	}

	public function editlist_destination($id){
		$q = $this->db->query("select * from destination where id = $id AND isdeleted = 0");
		return $q->result();	
	}



	//Insert OverView
	public function insert_overview($data){
		$this->load->database();
		$q = $this->db->query('insert into overview values(null,"'.addslashes($data['destinationname']).'","'.addslashes($data['oleft']).'","'.addslashes($data['oright']).'",0)');
		return $q;
	}

	//Insert FAQ
	public function insert_faq($data){
		$this->load->database();
		$total = count($data['question']);
		$qu = "insert into faq values";
		for ($i=1; $i<=$total ; $i++) {

			if($i==$total){
				$qu .= '(null,'.$data['destinationname'].',"'.addslashes($data['question'][$i]).'","'.addslashes($data['answer'][$i]).'",0)';
			}
			else{
				$qu .= '(null,'.$data['destinationname'].',"'.addslashes($data['question'][$i]).'","'.addslashes($data['answer'][$i]).'",0),';
			}
		}

		$q = $this->db->query($qu);
		return $q;
	}

	//Insert Packing
	public function insert_packing($data){
		$this->load->database();
		$item1count = count($data['item1']);
		$item2count = count($data['item2']);
		$item3count = count($data['item3']);
		$item4count = count($data['item4']);
		$qu = 'insert into packing values(null,'.$data['destinationname'].',"'.addslashes($data['title1']).'","'.addslashes($data['desc1']).'","'.addslashes($data['title2']).'","'.addslashes($data['desc2']).'","'.addslashes($data['list1']).'","[';
		for($i=0; $i<$item1count; $i++){

			if($i==$item1count-1){
				$qu .= addslashes($data['item1'][$i])."]".'","'.addslashes($data['list2']).'","[';
			}else{
				$qu .= addslashes($data['item1'][$i]).",";
			}
		}
		for($i=0; $i<$item2count; $i++){

			if($i==$item2count-1){
				$qu .= addslashes($data['item2'][$i])."]".'","'.addslashes($data['list3']).'","[';
			}else{
				$qu .= addslashes($data['item2'][$i]).",";
			}
		}
		for($i=0; $i<$item3count; $i++) {

			if ($i == $item3count-1) {
				$qu .= addslashes($data['item3'][$i]) . "]" . '","' . addslashes($data['list4']) . '","[';
			} else {
				$qu .=addslashes($data['item3'][$i]). ",";
			}
		}
		for($i=0; $i<$item4count; $i++) {

			if ($i == $item4count-1) {
				$qu .= addslashes($data['item4'][$i]) . "]".'",0)' ;
			} else {
				$qu .= addslashes($data['item4'][$i]) . ",";
			}
		}

		$q = $this->db->query($qu);

		return $q;
	}

	//Insert SEOTags
	public function insert_seotags($data){
		$this->load->database();
		$q = $this->db->query('insert into seotag values(null,"'.$data['destinationname'].'","'.$data['tags'].'",0)');
		return $q;
	}

	//Insert Gallery
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


	//Get Dest(Helper)
	public function getdest($id){
		$q = $this->db->query("select * from destination where id = $id AND isdeleted = 0");
		return $q->result();
	}
	//Get Gallert(Helper)
	public function getgallery($id){
		$q = $this->db->query("select * from gallery where destid =$id AND isdeleted = 0");
		return $q->result();
	}
	//Get OverView(Helper)
	public function getoverview($id){
		$q = $this->db->query("select * from overview where destid =$id AND isdeleted = 0");
		return $q->result();
	}
	//Get FAQ(helper)
	public function getfaq($id){
		$q = $this->db->query("select * from faq where destid =$id AND isdeleted = 0");
		return $q->result();
	}
	//Get packing(Helper)
	public function getpacking($id){
		$q = $this->db->query("select * from packing where destid =$id AND isdeleted = 0");
		return $q->result();
	}
	//Get Destination(Helper)
	public function gettoursbydestination($id){
		$q = $this->db->query("select * from destination where isdeleted = 0");
		return $q->result();
	}
	//Get seo
	public function listseo($id){
		$q = $this->db->query("select * from seotag where isdeleted = 0");

	}
	
	//Get Banner Image
	public function getBanner($id){
		$q = $this->db->query("Select banner from destination where id = $id");
		return $q;
	}



	//Insert Travel Style
	public function insert_travelstyle($data){
		$qu = 'insert into travelstyle values(null,"[';
		$total = count($data['destinations']);
		for($i=0; $i<$total; $i++){
			if($i==$total-1){
				$qu .= $data['destinations'][$i].']","'.addslashes($data['name']).'","'.$data['bannerimg'].'",'.$data['featured'].',0)';
			}else{
				$qu .= $data['destinations'][$i].',';
			}
		}
		$q = $this->db->query($qu);
		return $q;
	}

	//List Travel Style
	public function listtravelstyle(){
		$q = $this->db->query("select * from travelstyle where isdeleted = 0");
		return $q->result();
	}

	//Delete Travel Style
	public function delete_travelstyle($id){
		$this->load->database();
		$q = $this->db->query('update travelstyle set isdeleted=1 where id='.$id);
		return $q;
	}

	//Insert Travel deal
	public function insert_traveldeal($data){
		$q = $this->db->query('insert into traveldeal values(null,'.$data['destination'].','.$data['featured'].',"'.addslashes($data['offer']).'","'.addslashes($data['deal']).'")');
		return $q;
	}

	//
	public function listtraveldeal(){
		$q = $this->db->query('SELECT destination.name,traveldeal.offer,traveldeal.deal,traveldeal.featured,traveldeal.id FROM destination,traveldeal where destination.id = traveldeal.did');
		return $q->result();
	}

	//Travel Deal function for helper and frontend
	public function alldeals(){
		$q= $this->db->query('select * from traveldeal');
		return $q->result();
	}

	//Edit_List Travel Deal
	public function editlist_traveldeal($id){
		$q = $this->db->query("select * from traveldeal where id = $id");
		return $q->result();
	}

	//Edit Travel Deal
	public function edit_traveldeal($data){
		$q = $this->db->query('update traveldeal set featured="'.$data['featured'].'",offer = "'.$data['offer'].'", deal = "'.$data['deal'].'" where id = "'.$data['id'].'"');
		return $q;
	}

	public function editlist_travelstyle($id){
		$q = $this->db->query("select * from travelstyle where id = $id");
		return $q->result();
	}

	public function update_dgeneral($data){
		$this->load->database();
		if($data['p']==1) {
			$q = $this->db->query('update destination set name="'.addslashes($data['name']).'",tagline="'.addslashes($data['tagline']).'",featured='.$data['featured'].',banner="'.addslashes($data['picture']).'",about1="'.addslashes($data['about1']).'",about2="'.addslashes($data['about2']).'" where id=' . $data['id']);
			return $q;
		}else if($data['p']==2) {
			$q = $this->db->query('update destination set name="'.addslashes($data['name']).'",tagline="'.addslashes($data['tagline']).'",featured='.$data['featured'].',about1="'.addslashes($data['about1']).'",about1_image="'.addslashes($data['picture']).'",about2="'.addslashes($data['about2']).'" where id=' . $data['id']);
			return $q;
		}else if($data['p']==3) {
			$q = $this->db->query('update destination set name="'.addslashes($data['name']).'",tagline="'.addslashes($data['tagline']).'",featured='.$data['featured'].',about1="'.addslashes($data['about1']).'",about2_image="'.addslashes($data['picture']).'",about2="'.addslashes($data['about2']).'" where id=' . $data['id']);
			return $q;
		}else{
			$q = $this->db->query('update destination set name="'.addslashes($data['name']).'",tagline="'.addslashes($data['tagline']).'",featured='.$data['featured'].',about1="'.addslashes($data['about1']).'",about2="'.addslashes($data['about2']).'" where id=' . $data['id']);
			return $q;
		}
	}

	public function update_doverview($data){
		$this->load->database();
		$q = $this->db->query('update overview set oleft="'.addslashes($data['oleft']).'",oright="'.addslashes($data['oright']).'"  where destid='.$data['id']);
		return $q;
	}
	public function update_dfaq($data){
		$this->load->database();
		$q = $this->db->query('delete from faq where destid='.$data['did']);
		if(isset($data['question'])) {
			$total = count($data['question']);
			$qu = "insert into faq values";
			for ($i=0; $i<$total ; $i++) {

				if($i==$total-1){
					$qu .= '(null,'.$data['did'].',"'.addslashes($data['question'][$i]).'","'.addslashes($data['answer'][$i]).'",0)';
				}
				else{
					$qu .= '(null,'.$data['did'].',"'.addslashes($data['question'][$i]).'","'.addslashes($data['answer'][$i]).'",0),';
				}
			}

			$q = $this->db->query($qu);
		}
		return $q;
	}

	public function update_dpacking($data){
		$this->load->database();
		$q = $this->db->query('delete from packing where destid='.$data['did']);
		$item1count = count($data['item1']);
		$item2count = count($data['item2']);
		$item3count = count($data['item3']);
		$item4count = count($data['item4']);
		$qu = 'insert into packing values(null,'.$data['did'].',"'.addslashes($data['title1']).'","'.addslashes($data['desc1']).'","'.addslashes($data['title2']).'","'.addslashes($data['desc2']).'","'.addslashes($data['list1']).'","[';
		for($i=0; $i<$item1count; $i++){

			if($i==$item1count-1){
				$qu .= addslashes($data['item1'][$i])."]".'","'.addslashes($data['list2']).'","[';
			}else{
				$qu .= addslashes($data['item1'][$i]).",";
			}
		}
		for($i=0; $i<$item2count; $i++){

			if($i==$item2count-1){
				$qu .= addslashes($data['item2'][$i])."]".'","'.addslashes($data['list3']).'","[';
			}else{
				$qu .= addslashes($data['item2'][$i]).",";
			}
		}
		for($i=0; $i<$item3count; $i++) {

			if ($i == $item3count-1) {
				$qu .= addslashes($data['item3'][$i]) . "]" . '","' . addslashes($data['list4']) . '","[';
			} else {
				$qu .=addslashes($data['item3'][$i]). ",";
			}
		}
		for($i=0; $i<$item4count; $i++) {

			if ($i == $item4count-1) {
				$qu .= addslashes($data['item4'][$i]) . "]".'",0)' ;
			} else {
				$qu .= addslashes($data['item4'][$i]) . ",";
			}
		}

		$q = $this->db->query($qu);

		return $q;
	}
	public function update_dgallery($data){
		$this->load->database();
		$q = $this->db->query('update gallery set img="'.$data['img'].'" where id='.$data['id']);
		return $q;
	}
	public function delete_dgallery($id){
		$this->load->database();
		$q = $this->db->query('update gallery set isdeleted=1 where id='.$id);
		return $q;
	}
}
