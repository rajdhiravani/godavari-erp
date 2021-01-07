<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {
	function __construct()
	{
	        parent::__construct();
	        $this->load->library('session');
            $this->load->model('dashboard_model');
            $this->load->model('history_model');
	}
	public function index()
	{
        $product = $this->uri->segment(3);
		$user = $this->session->userdata('type'); // get this from session variable
        $data['active'] = "history";
        $data['product'] = $this->dashboard_model-> get_products();

		if($product == "Ethyl%20Acetate" || $product =="EA")
		{
        $data['procurement'] = $this->history_model-> get_EA_procurement();
        $data['production'] = $this->history_model-> get_EA_production();
        $data['marketing'] = $this->history_model-> get_EA_marketing();
        $data['business'] = $this->history_model-> get_EA_business();
        $data['datapoints'] = $this->history_model-> get_EA_datapoints();
		$d = array(); foreach($data['datapoints'] as $do){$d[$do['code']]= $do['name'];}
		$data['d'] = $d;
        $this->load->view('common/header', $data);	
		$this->load->view('EA_history_'.$user, $data);
		$this->load->view('common/footer');
		}
        
    }

   



    
   
	
}
