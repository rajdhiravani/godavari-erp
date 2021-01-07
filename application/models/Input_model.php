<?php

class Input_model extends CI_Model 
{
	public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	}
	public function get_users()
	{
		 $query = $this->db->query('Select * from go_user');
		return $query->result_array();
    } 
    public function delete_user($id)
	{
		 $query = $this->db->query('delete from go_user where id = '. $id);
    } 
    public function add_EA_procurement($data)
    { 
        $this->db->insert('EA_procurement', $data);
        $id = $this->db->insert_id();
        return $id;
    }
    public function add_EA_production($data)
    { 
        $this->db->insert('EA_production', $data);
        $id = $this->db->insert_id();
        return $id;
    }
    public function add_EA_marketing($data)
    { 
        $this->db->insert('EA_marketing', $data);
        $id = $this->db->insert_id();
        return $id;
    }
    public function add_EA_business($data)
    { 
        $this->db->insert('EA_business', $data);
        $id = $this->db->insert_id();
        return $id;
    }
}