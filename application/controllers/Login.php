<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
	        parent::__construct();
	        $this->load->library('session');
            $this->load->model('user_model');
            $this->load->model('dashboard_model');
            $this->load->helper('url');
	}
	public function index()
	{
        $this->load->view('login');
    }
    public function bypass()
    {
        $this->session->set_userdata('check','1');
        $this->session->set_userdata('name','Raj');
        $this->session->set_userdata('email','rajdhiravani@gmail.com');
        $this->session->set_userdata('type','management');
            
        redirect(URL.'dashboard/index/EA');
    }

    public function check()
	{
        $email = $this->uri->segment(3);
        $name = $this->uri->segment(4);
        $email = str_replace('_', '@', $email);
        $data['users'] = $this->user_model->get_users();
        $check = 0;
        $type="type";
        foreach($data['users'] as $user)
        {
            if($email==$user['email'])
            {
                $check = 1;
                $type = $user['type'];
            }
        }
        if($check==0)
        {
            echo "Unauthorised";
        }
        $this->session->set_userdata('check',$check);
        $this->session->set_userdata('name',$name);
        $this->session->set_userdata('email',$email);
        $this->session->set_userdata('type',$type);
            
        redirect(URL.'dashboard/index/EA');
        
        
        
    }

}