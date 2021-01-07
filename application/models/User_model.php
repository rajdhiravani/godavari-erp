<?php

class User_model extends CI_Model 
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
    public function add_user($data)
    { 
        $this->db->insert('go_user', $data);
        $id = $this->db->insert_id();
        return $id;
    }
}