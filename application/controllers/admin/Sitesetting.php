<?php

class Sitesetting extends CI_Controller{
    public function index(){
        if($_SESSION['admin']){
                $data['title']="Contact";
				$this->load->model('SitesettingM');
				$data['contact']= $this->SitesettingM->list_contact();
                 $this->load->view('admin/Contact',$data);
        }else{
            redirect('admin');
        }
    }

    public function add_logo(){
    	if($_SESSION['admin']){
                $data['title']="Logo";
                $this->load->model('SitesettingM');
                $data['sitesetting']=$this->SitesettingM->listsitesetting();
                 $this->load->view('admin/add-logo',$data);
        }else{
            redirect('admin');
        }
    }
    public function update_contact(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			$this->load->model('SitesettingM');
			$op= $this->SitesettingM->update_contact($data);
			if($op==1){
				$_SESSION['success'] = "Updated Successfully";
			}else{
				$_SESSION['error'] = "Error Updating";
			}
			redirect('admin/Sitesetting');
		}else{
			redirect('admin');
		}
	}


	public  function  uploadimage($img,$name,$dest){
		$config['upload_path'] = 'assets/images/'.$dest;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = $img['name'];

		//Load upload library and initialize configuration
		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if($this->upload->do_upload($name)){
			$uploadData = $this->upload->data();
			$picture = $uploadData['file_name'];
			return $picture;
		}else{
			return "error";
		}
	}

	public function update_logo(){
		if($_SESSION['admin']){
			$picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","");
			if($picture=="error"){
				$_SESSION['error']="Error Updating Record";
			}else{
				$this->load->model('SitesettingM');
				$op= $this->SitesettingM->update_logo($picture);
				if($op==1){
					$_SESSION['success'] = "Updated Successfully";
				}else{
					$_SESSION['error'] = "Error Updating";
				}
			}

			redirect('admin/Sitesetting/add_logo');
		}else{
			redirect('admin');
		}
	}
	public function homepage(){
		if($_SESSION['admin']){
			$data['title']="Home page Setting";
			$this->load->model('SitesettingM');
			$data['sitesetting']=$this->SitesettingM->listsitesetting();
			$this->load->view('admin/homepage',$data);
		}else{
			redirect('admin');
		}
	}

	public function update_homepage(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			if ($_FILES['file1']['error'] != 4 || $_FILES['file2']['error'] != 4 || $_FILES['file3']['error'] != 4){
				if($_FILES['file1']['error'] !=4){
					$data['picture'] = $this->uploadimage($_FILES['file1'],"file1","slider");
					if($data['picture']=="error"){
						$_SESSION['error']="Error Inserting Record";
						redirect('admin/Sitesetting/homepage');
					}
					else{
						$data['p']=1;
						$this->load->model('SitesettingM');
						$op = $this->SitesettingM->update_slider($data);
						if($op==1){
							$_SESSION['success']="Successfully Update";
						}
						else{
							$_SESSION['error']="Error Updating";
						}
						redirect('admin/Sitesetting/homepage');
					}
				}else if($_FILES['file2']['error'] !=4){
					$data['picture'] = $this->uploadimage($_FILES['file2'],"file2","slider");
					if($data['picture']=="error"){
						$_SESSION['error']="Error Inserting Record";
						redirect('admin/Sitesetting/homepage');
					}
					else{
						$data['p']=2;
						$this->load->model('SitesettingM');
						$op = $this->SitesettingM->update_slider($data);
						if($op==1){
							$_SESSION['success']="Successfully Update";
						}
						else{
							$_SESSION['error']="Error Updating";
						}
						//echo $op;
						redirect('admin/Sitesetting/homepage');
					}
				}else if($_FILES['file3']['error'] !=4){
					$data['picture'] = $this->uploadimage($_FILES['file3'],"file3","slider");
					if($data['picture']=="error"){
						$_SESSION['error']="Error Inserting Record";
						redirect('admin/Sitesetting/homepage');
					}
					else{
						$data['p']=3;
						$this->load->model('SitesettingM');
						$op = $this->SitesettingM->update_slider($data);
						if($op==1){
							$_SESSION['success']="Successfully Update";
						}
						else{
							$_SESSION['error']="Error Updating";
						}
						redirect('admin/Sitesetting/homepage');
					}
				}

			}
			else{
				$this->load->model('SitesettingM');
				$op = $this->SitesettingM->update_slider($data);
				echo $op;
				if($op==1){
					$_SESSION['success']="Successfully Updated";
				}else{
					$_SESSION['error']="Error updating";
				}
				redirect('admin/Sitesetting/homepage');
			}
		}
		else{
			redirect('admin');
		}
	}

	public function update_features(){
		if($_SESSION['admin']){
			$data= $this->input->post();
			$this->load->model('SitesettingM');
			$op= $this->SitesettingM->update_features($data);
			if($op==1){
				$_SESSION['success'] = "Updated Successfully";
			}else{
				$_SESSION['error'] = "Error Updating";
			}

			redirect('admin/Sitesetting/homepage');
		}else{
			redirect('admin');
		}
	}
	public function update_homediv(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			print_r($data);
			if ($_FILES['bannerimg']['error'] != 4){
				$picture = $this->uploadimage($_FILES['bannerimg'],"bannerimg","placeholder");
				if($picture=="error"){
					$_SESSION['error']="Error Inserting Record";
					redirect('admin/Sitesetting/homepage');
				}
				else{
					$this->load->model('SitesettingM');
					$op = $this->SitesettingM->update_homediv($data,$picture);
					if($op==1){
						$_SESSION['success']="Successfully Update";
					}
					else{
						$_SESSION['error']="Error Updating";
					}
					redirect('admin/Sitesetting/homepage');
				}
			}
			else{
				$this->load->model('SitesettingM');
				$op = $this->SitesettingM->update_homediv($data);
				echo $op;
				if($op==1){
					$_SESSION['success']="Successfully Updated";
				}else{
					$_SESSION['error']="Error updating";
				}
				redirect('admin/Sitesetting/homepage');
			}
		}
		else{
			redirect('admin');
		}
	}

	public function footer(){
		if($_SESSION['admin']){
			$data['title'] = "Edit-Footer";
			$this->load->model('SitesettingM');
			$data['footer']= $this->SitesettingM->editlist_footer();
			$this->load->view('admin/edit-footer',$data);
		}else{
			redirect('admin');
		}
	}

	public function update_footer(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			$this->load->model('SitesettingM');
			$op= $this->SitesettingM->update_footer($data);
			if($op==1){
				$_SESSION['success'] = "Updated Successfully";
			}else{
				$_SESSION['error'] = "Error Updating";
			}
			redirect('admin/Sitesetting/footer');
		}else{
			redirect('admin');
		}
	}

	public function update_seo(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			$this->load->model('SitesettingM');
			$op= $this->SitesettingM->update_seo($data);
			if($op==1){
				$_SESSION['success'] = "Updated Successfully";
			}else{
				$_SESSION['error'] = "Error Updating";
			}
			redirect('admin/Sitesetting/main_SEO');
		}else{
			redirect('admin');
		}
	}

	public function main_SEO(){
		if($_SESSION['admin']){
			$data['title'] = "Add-SEO";
			$this->load->model('SitesettingM');
			$data['seo']= $this->SitesettingM->main_seo();
			$this->load->view('admin/edit-main_seo',$data);
		}else{
			redirect('admin');
		}
	}

	public function getseotags(){
		if($_SESSION['admin']){
			$page = $this->input->post('page');
			$this->load->model('SitesettingM');
			$tags = $this->SitesettingM->get_seotags($page);
			//$this->load->view('admin/edit-main_seo',$data);
			echo $tags[0]->tags;
		}else{
			redirect('admin');
		}
	}

	public function getseometatags(){
		if($_SESSION['admin']){
			$page = $this->input->post('page');
			$this->load->model('SitesettingM');
			$tags = $this->SitesettingM->get_seometatags($page);
			//$this->load->view('admin/edit-main_seo',$data);
			echo $tags[0]->meta_tag;
		}else{
			redirect('admin');
		}
	}

	public function getseokeywords(){
		if($_SESSION['admin']){
			$page = $this->input->post('page');
			$this->load->model('SitesettingM');
			$tags = $this->SitesettingM->get_seokeywords($page);
			//$this->load->view('admin/edit-main_seo',$data);
			echo $tags[0]->keywords;
		}else{
			redirect('admin');
		}
	}

	public function getseoindexing(){
		if($_SESSION['admin']){
			$page = $this->input->post('page');
			$this->load->model('SitesettingM');
			$tags = $this->SitesettingM->get_seoindexing($page);
			//$this->load->view('admin/edit-main_seo',$data);
			echo $tags[0]->indexing;
		}else{
			redirect('admin');
		}
	}

	public function getseofollow(){
		if($_SESSION['admin']){
			$page = $this->input->post('page');
			$this->load->model('SitesettingM');
			$tags = $this->SitesettingM->get_seofollow($page);
			//$this->load->view('admin/edit-main_seo',$data);
			echo $tags[0]->follow;
		}else{
			redirect('admin');
		}
	}

	public function navbar(){
		if($_SESSION['admin']){
			$data['title'] = "Edit-Navbar";
			$this->load->model('SitesettingM');
			$data['navbar']= $this->SitesettingM->editlist_navbar();
			$this->load->view('admin/edit-navbar',$data);
		}else{
			redirect('admin');
		}
	}

	public function update_navbar(){
		if($_SESSION['admin']){
			$data = $this->input->post();
			$this->load->model('SitesettingM');
			$op= $this->SitesettingM->update_navbar($data);
			if($op==1){
				$_SESSION['success'] = "Updated Successfully";
			}else{
				$_SESSION['error'] = "Error Updating";
			}
			redirect('admin/Sitesetting/navbar');
		}else{
			redirect('admin');
		}
	}
}
