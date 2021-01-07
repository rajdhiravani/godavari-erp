<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	function __construct()
	{
	        parent::__construct();
	        $this->load->library('session');
	        $this->load->model('dashboard_model');
	}

	public function index()
	{
		$product = $this->uri->segment(3);
		
		if($product == "Ethyl%20Acetate" || $product == "EA")
		{
			$this->EA();
		}
		
		
	}
	
	public function EA()
	{
		$user = $this->session->userdata('type');  
		$data['active'] = "dashboard";
		$data['product'] = $this->dashboard_model-> get_products();
		$data['data'] = $this->dashboard_model-> get_EA_datapoints();
		$data['procurement'] = $this->dashboard_model-> get_EA_procurement();
        $data['production'] = $this->dashboard_model-> get_EA_production();
		$data['marketing'] = $this->dashboard_model-> get_EA_marketing();
		$data['business'] = $this->dashboard_model-> get_EA_business();
		$d = array();
		foreach($data['data'] as $do){$d[$do['code']]= $do['name'];}
		$data['d'] = $d;
		$this->load->view('common/header', $data);	
		$this->load->view('EA_dashboard_'.$user, $data);
		$this->load->view('common/footer');
	}
}
