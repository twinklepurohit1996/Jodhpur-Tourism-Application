<?php
    public function Edit($id)
	{
        public function Edititem()
	{
		$this->load();
		$this->load->view('Dashboard/edit');
		
		$query=$this->db->get("addcategories");
		$data['res']=$query->result_array();

		$this->db->where(array("id"=>$id));
		$query=$this->db->get("addcategories");
		
		
		$this->load->view("Dashboard/additem",$data);
		
	}

	public function item_update()
	{
		$this->load();
		
		$cateid=$this->input->post("xid");
		$title=$this->input->post("title");
		$des=$this->input->post("des");
		$image=$this->input->post("image");
		$long=$this->input->post("long");
		$lati=$this->input->post("lati");
		$this->db->update("addcategories",array("cate_id"=>$cateid),array("title"=>$title),array("des"=>$des),
									array("image"=>$image),array("long"=>$long),array("lati"=>$lati));
		$this->getallitem();
	}
    }

?>
		