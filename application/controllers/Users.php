<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
	        parent::__construct();
	        $this->load->library('session');
            $this->load->model('user_model');
            $this->load->model('dashboard_model');
	}

	public function index()
	{
	    if($this->session->userdata('type') =="business")
	    {
        $data['active'] = "users";
        $data['product'] = $this->dashboard_model-> get_products();
		$data['users'] = $this->user_model-> get_users();
		$this->load->view('common/header', $data);	
		$this->load->view('users', $data);
		$this->load->view('common/footer');
	    }else { echo "unauthorised"; } 
    }

    public function add_user_form()
	{
	    if($this->session->userdata('type') =="business")
	    {
        $data['active'] = "users";
        $data['product'] = $this->dashboard_model-> get_products();
		$data['users'] = $this->user_model-> get_users();
		$this->load->view('common/header', $data);	
		$this->load->view('add_user', $data);
		$this->load->view('common/footer');
	    }else { echo "unauthorised"; } 
    }

    public function add_user()
	{
	    if($this->session->userdata('type') =="business")
	    {
        $data = array (
        'name' => $this->input->post("name"),
        'email' => $this->input->post("email"),
        'type' => $this->input->post("type"),
        );
        $data['id'] = $this->user_model-> add_user($data);
        $this->index();
	    }else { echo "unauthorised"; } 
    }
    
    
    public function delete()
	{
	   if($this->session->userdata('type') =="business")
	    {
        $id = $this->uri->segment(3);
        $this->user_model-> delete_user($id);
        $this->index();
	    }else { echo "unauthorised"; } 
	}
}
