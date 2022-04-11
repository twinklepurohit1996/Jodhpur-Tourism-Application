<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public $data;
	private function load()
	{
		$this->load->helper(array('url','form','cookie','captcha'));
		$this->load->library(array("session","email","image_lib"));
		$this->load->database();
	}
	public function index()
	{
        $this->load();
	    $this->load->view('Dashboard/dashboard');
	}

    public function newcate()
    {
        $this->load();
		$this->getallCate();
    }

	public function insertCat()
	{
		$this->load();
		$catename=$this->input->post("xcate");
		$underCate=$this->input->post("under_cate");
		$this->db->insert("categories",array("cate_name"=>$catename,"under"=>$underCate));
		$this->getallCate();
	}

	public function getallCate()
	{
		$this->load();
		$query=$this->db->get("categories");
		$data['res']=$query->result_array();
		$this->load->view("Dashboard/newcate",$data);
	}

	public function Del($id)
	{
			$this->load();
			$this->db->where(array("cate_id"=>$id));
			$this->db->delete("categories");
			$this->getallCate();
	}

	public function Edit($id)
	{
		$this->load();
		$query=$this->db->get("categories");
		$data['res']=$query->result_array();

		$this->db->where(array("cate_id"=>$id));
		$query=$this->db->get("categories");
		$data['eres']=$query->result_array();
		$data['editPage']=True;
		
		$this->load->view("Dashboard/newcate",$data);
		
	}

	public function cate_update()
	{
		$this->load();
		$catename=$this->input->post("xcate");
		$cateid=$this->input->post("xid");
		$this->db->update("categories",array("cate_name"=>$catename),array("cate_id"=>$cateid));
	
		$this->getallCate();
	}
	
	public function showcate()
	{
		$this->load();
		$this->showallcate();
	}

	public function showallcate()
	{
		$this->load();
		$query=$this->db->get('categories');
		$data['res']=$query->result_array();
		$this->load->view('Dashboard/showcate',$data);
	}

	public function additem()
    {
        $this->load();
		$query=$this->db->get('categories');
		$data['res']=$query->result_array();
		$this->load->view('Dashboard/additem',$data);
      
    }

	public function insertitem()
	{
		$this->load();
		$query=$this->db->get('categories');
		
		$data['res']=$query->result_array();
		$cateid=$this->input->post("cate_id");
		$title=$this->input->post("title");
		$des=$this->input->post("des");
		$long=$this->input->post("long");
		$lati=$this->input->post("lati");
		
		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		$config['file_name']            ='image';
		$config['encrypt_name']         =TRUE;
		$this->load->library('upload', $config);
		//$this->upload->do_upload('image'); 
		//print_r($data = $this->upload->data());
		
		
		if ( !$this->upload->do_upload('image') )
		{

		$data['error'] = array('error' => $this->upload->display_errors());
			
		 }
		else
		{
		$data = $this->upload->data();
		$this->db->insert("addcategories",array("cate_id"=>$cateid,"title"=>$title,"des"=>$des,"image"=>$data['file_name'],"long"=>$long,"lati"=>$lati));
			
		}
		
		$this->load->view('Dashboard/additem',$data);
	}

	public function getallitem()
	{
		$this->load();
		$query=$this->db->get("addcategories");
		$data['res']=$query->result_array();
		$this->load->view("Dashboard/additem",$data);
	}

	public function Delitem($id)
	{
			$this->load();
			$this->db->where(array("id"=>$id));
			$this->db->delete("addcategories");
			$this->showallitem();
	}

	public function Edititem($id,$cate_id)
	{
		$this->load();
		$this->db->where(array("cate_id"=>$cate_id));
		$query=$this->db->get("categories");
		$data['c_res']=$query->result_array();

		$this->db->where(array("id"=>$id));
		$query=$this->db->get("addcategories");
		$data['item_res']=$query->result_array();

		$query=$this->db->get('categories');
		$data['res']=$query->result_array();

		$this->load->view("Dashboard/edititem",$data);
	}

	public function item_update()
	{
		$this->load();
		$id=$this->input->post('xid');
		$cateid=$this->input->post("cate_id");
		$title=$this->input->post("title");
		$des=$this->input->post("des");
		$long=$this->input->post("long");
		$lati=$this->input->post("lati");
		$data=array("cate_id"=>$cateid,"title"=>$title,"des"=>$des,"long"=>$long,"lati"=>$lati);
		$this->db->update("addcategories",$data,array("id"=>$id));
		//echo $this->db->last_query();
		$this->getallitem();
	}
	
	public function showitem()
	{
		$this->load();
		$this->showallitem();
	}

	public function showallitem()
	{
		$this->load();
		$query=$this->db->get('addcategories');
		$data['res']=$query->result_array();
		$this->load->view('Dashboard/showitem',$data);
	}

	public function item()
	{
		$this->load();
		$this->displayitem();
	}

	public function displayitem()
	{
		$this->load();
		$query=$this->db->get('addcategories');
		$data['res']=$query->result_array();
		$this->load->view('Dashboard/item',$data);
	}
	
}
