<?php

class History_model extends CI_Model 
{
	 public function __construct()
	 {
	  parent::__construct();
	  $this->load->database();
	 }
 
  
	 public function get_products()
	 {
		 $query = $this->db->query('Select * from go_product');
		return $query->result_array();
	 } 

	 public function get_EA_datapoints()
	 {
		 $query = $this->db->query('Select * from EA_datapoints');
		return $query->result_array();
	 }

	 public function get_EA_procurement()
	 {
		 $query = $this->db->query('Select * from EA_procurement order by id  limit 0,52');
		return $query->result_array();
	 }
	 public function get_EA_production()
	 {
		 $query = $this->db->query('Select * from EA_production order by id  limit 0,52');
		return $query->result_array();
	 }
	 public function get_EA_marketing()
	 {
		 $query = $this->db->query('Select * from EA_marketing order by id  limit 0,52');
		return $query->result_array();
	 }
	 public function get_EA_business()
	 {
		 $query = $this->db->query('Select * from EA_business order by id  limit 0,52');
		return $query->result_array();
	 }




	 public function is_registered($event_id,$facebook_id)
	 {
	 
	 	
		 $query = $this->db->query('Select * from events_users where event_id = '.$event_id.' and facebook_id = '.$facebook_id);
		 $row = $query->result_array();
		
		
		if($query->num_rows() > 0)
		{
		return 1;
		}
		else
		return 0;
		
	 } 
	 
	  public function get_events_count_group()
	 {
		 $query = $this->db->query('select count(pu.event_id) "count", p.name "event_name", p.id "id"  from  events p left join events_users pu on p.id = pu.event_id group by p.id');
		return $query->result_array();
	 } 
	 
	  public function get_all_events_users($id)
	 {
	 	if($id==0)
	 	{
	 	 $query = $this->db->query('Select distinct p.name "Event",u.facebook_name "Username",u.facebook_email "Email", pu.timestamp "Timestamp" from events_users pu, site_users u, events p where 
		 pu.facebook_id = u.facebook_id and pu.event_id = p.id');
	 	}
	 	else
	 	{
		 $query = $this->db->query('Select distinct p.name "Event",u.facebook_name "Username",u.facebook_email "Email",pu.timestamp "Timestamp"  from events_users pu, site_users u, events p where 
		 pu.facebook_id = u.facebook_id and pu.event_id = p.id and p.id='.$id);
		 }
		return $query->result_array();
	 } 
	 
	public function set_events_users($event_id,$facebook_id,$timestamp)
	 {
		 $query = $this->db->query('insert ignore into events_users (event_id, facebook_id, timestamp) values('.$event_id.','.$facebook_id.','.$timestamp.')');
		echo "success";	
	 }
     

}