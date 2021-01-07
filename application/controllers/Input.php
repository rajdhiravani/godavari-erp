<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {
	function __construct()
	{
	        parent::__construct();
	        $this->load->library('session');
            $this->load->model('input_model');
            $this->load->model('dashboard_model');
            $this->load->helper('url');
	}
	public function index()
	{
        $product = $this->uri->segment(3);
		$user = $this->session->userdata('type');  // get this from session variable
        $data['active'] = "input";
        $data['product'] = $this->dashboard_model-> get_products();

		if($product == "Ethyl%20Acetate" || $product == "EA")
		{
        $data['procurement'] = $this->dashboard_model-> get_EA_procurement();
        $data['production'] = $this->dashboard_model-> get_EA_production();
        $data['marketing'] = $this->dashboard_model-> get_EA_marketing();
        $data['datapoints'] = $this->dashboard_model-> get_EA_datapoints();
		$d = array(); foreach($data['datapoints'] as $do){$d[$do['code']]= $do['name'];}
		$data['d'] = $d;
        $this->load->view('common/header', $data);	
		$this->load->view('EA_input_'.$user, $data);
		$this->load->view('common/footer');
		}
        
    }
    public function bypass()
	{
        $product = $this->uri->segment(3);
		$user = $this->session->userdata('type');  // get this from session variable
        $data['active'] = "input";
        $data['product'] = $this->dashboard_model-> get_products();

		if($product == "Ethyl%20Acetate" || $product == "EA")
		{
        $data['procurement'] = $this->dashboard_model-> get_EA_procurement();
        $data['production'] = $this->dashboard_model-> get_EA_production();
        $data['marketing'] = $this->dashboard_model-> get_EA_marketing();
        $data['datapoints'] = $this->dashboard_model-> get_EA_datapoints();
		$d = array(); foreach($data['datapoints'] as $do){$d[$do['code']]= $do['name'];}
		$data['d'] = $d;
        $this->load->view('common/header', $data);	
		$this->load->view('EA_input_'.$user, $data);
		$this->load->view('common/footer');
		}
        
    }

   



    public function add()
    {
        $user = $this->session->userdata('type'); // get this from session variable
        $product = $id = $this->uri->segment(3);
        if($product == "EA"){

        
            if($user=="procurement") // product type and user type
            {
                $data = array (
                    'SDS_USD' => $this->input->post("SDS_USD"),
                    'SDS_USD_other' => $this->input->post("SDS_USD_other"),
                    'SDS_USD_landed' => $this->input->post("SDS_USD_landed"),
                    'SDS_INR_landed' => $this->input->post("SDS_INR_landed"),
                    'AA_USD' => $this->input->post("AA_USD"),
                    'AA_USD_other' => $this->input->post("AA_USD_other"),
                    'AA_USD_landed' => $this->input->post("AA_USD_landed"),
                    'AA_INR_landed' => $this->input->post("AA_INR_landed"),
                    'COAL_INR_landed' => $this->input->post("COAL_INR_landed"),
                    'SDS_USD_INR_procurement' => $this->input->post("SDS_USD_INR_procurement"),
                    'AA_USD_INR_procurement' => $this->input->post("AA_USD_INR_procurement"),
                    'timestamp_procurement' => time() + 19800,
                    );
                    $data['id'] = $this->input_model-> add_EA_procurement($data);
            }
            else if($user=="production")
            {
                $data = array (
                    'SDS_norm' => $this->input->post("SDS_norm"),
                    'AA_norm' => $this->input->post("AA_norm"),
                    'STEAM_norm' => $this->input->post("STEAM_norm"),
                    'POWER_norm' => $this->input->post("POWER_norm"),
                    'POWER_INR' => $this->input->post("POWER_INR"),
                    'OTHER_INR' => $this->input->post("OTHER_INR"),
                    'OTHER_norm' => $this->input->post("OTHER_norm"),
                    'COAL_STEAM_ratio' => $this->input->post("COAL_STEAM_ratio"),
                    'timestamp_production' => time() + 19800,
                    );
                    $data['id'] = $this->input_model-> add_EA_production($data);
            }
            else if($user=="marketing")
            {
                $data = array (
                    'USD_INR_marketing' => $this->input->post("USD_INR_marketing"),
                    'AA_GNFC_INR' => $this->input->post("AA_GNFC_INR"),
                    'EA_GNFC_INR' => $this->input->post("EA_GNFC_INR"),
                    'AA_ICIS_USD' => $this->input->post("AA_ICIS_USD"),
                    'EA_ICIS_USD' => $this->input->post("EA_ICIS_USD"),
                    
                    'EA_DOM_DRUM_QTY' => $this->input->post("EA_DOM_DRUM_QTY"),
                    'EA_DOM_TANKER_QTY' => $this->input->post("EA_DOM_TANKER_QTY"),
                    'EA_DOM_DRUM_INR' => $this->input->post("EA_DOM_DRUM_INR"),
                    'EA_DOM_TANKER_INR' => $this->input->post("EA_DOM_TANKER_INR"),
                    'EA_DOM_TOTAL_DRUM_INR' => $this->input->post("EA_DOM_TOTAL_DRUM_INR"),
                    'EA_DOM_TOTAL_TANKER_INR' => $this->input->post("EA_DOM_TOTAL_TANKER_INR"),
                    'EA_DOM_TOTAL_INR' => $this->input->post("EA_DOM_TOTAL_INR"),
                    'EA_DOM_AVG_INR' => $this->input->post("EA_DOM_AVG_INR"),

                    'EA_EXP_DRUM_QTY' => $this->input->post("EA_EXP_DRUM_QTY"),
                    'EA_EXP_TANKER_QTY' => $this->input->post("EA_EXP_TANKER_QTY"),
                    'EA_EXP_DRUM_INR' => $this->input->post("EA_EXP_DRUM_INR"),
                    'EA_EXP_TANKER_INR' => $this->input->post("EA_EXP_TANKER_INR"),
                    'EA_EXP_TOTAL_DRUM_INR' => $this->input->post("EA_EXP_TOTAL_DRUM_INR"),
                    'EA_EXP_TOTAL_TANKER_INR' => $this->input->post("EA_EXP_TOTAL_TANKER_INR"),
                    'EA_EXP_TOTAL_INR' => $this->input->post("EA_EXP_TOTAL_INR"),
                    'EA_EXP_AVG_INR' => $this->input->post("EA_EXP_AVG_INR"),

                    'EA_SALE_actual' => $this->input->post("EA_SALE_actual"),
                    'EA_SP_actual' => $this->input->post("EA_SP_actual"),

                    'C1' => $this->input->post("C1"),
                    'C1_EA_INR' => $this->input->post("C1_EA_INR"),
                    'C2' => $this->input->post("C2"),
                    'C2_EA_INR' => $this->input->post("C2_EA_INR"),
                    'C3' => $this->input->post("C3"),
                    'C3_EA_INR' => $this->input->post("C3_EA_INR"),
                    'timestamp_marketing' => time() + 19800,
                    );
                    $data['id'] = $this->input_model-> add_EA_marketing($data);
            }
            else if($user=="business")
            {
                $data = array (
                    'EA_INR_CP' => $this->input->post("EA_INR_CP"),
                    'EA_INR_SP' => $this->input->post("EA_INR_SP"),
                    'STEAM_INR' => $this->input->post("STEAM_INR"),
                    'EA_INR_margin' => $this->input->post("EA_INR_margin"),
                    'timestamp_business' => time() + 19800,
                    );
                    $data['id'] = $this->input_model-> add_EA_business($data);
            }
            redirect(URL.'dashboard/EA');
        }   
    }
    

    public function options(){
        for($i=-5000;$i<=15000;$i=$i+500)
        {
            echo "<option>".$i."</option>";
        }
        exit;
    }
   
	
}
