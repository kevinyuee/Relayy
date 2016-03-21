<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('muser');
		$this->load->library('session');
        $this->load->library('email');
	}

	public function index()
	{
    	$data['body_class'] = 'home';

		$data['page_title'] = 'Welcome! Relayy';

    	$data['current_section'] = 'home';

    	$data['js_home'] = 1;
    
    	$this->load->view('templates/header-home');
		
		$this->load->view('home');

		$this->load->view('templates/footer', $data);
	}

	public function login() 
	{
    
        $email = $this->input->post('sgn_email');
        $password = $this->input->post('sgn_pwd');

        $object = $this->muser->login($email, $password);
        
        if($object) {

            gf_registerCurrentUser($object);

            if (gf_cu_type() == 1) {

            	redirect(site_url('users'), 'get');

            } else {

            	redirect(site_url('profile'), 'get');

            }

        } else {

            show_error("An Error has occurred while logging in!", 500, "Login Error");
        }	
	}

	public function register() 
	{
    	//TODO:  called when
    	$id = $this->input->post('reg_id');
    	$type = $this->input->post('reg_role');
    	$fname = $this->input->post('reg_fname');
        $lname = $this->input->post('reg_lname');
        $email = $this->input->post('reg_email');
        $password = $this->input->post('reg_pwd');

        $object = $this->muser->register($id, $fname, $lname, $email, $password, $type, '', '', '');
        
        if($object) {

            gf_registerCurrentUser($object);

            $this->email->register($email, $fname." ".$lname);

            redirect(site_url('profile'), 'get');

        } else {
            show_error("An Error has occurred while registering!", 500, "Register Error");
        }

	}

	public function linkedin()
	{
        $id = $this->input->post('li_id');
        $fname = $this->input->post('li_fname');
        $lname = $this->input->post('li_lname');
        $email = $this->input->post('li_email');
        $login = $this->input->post('li_login');
        $photo = $this->input->post('li_photo');
        $bio = $this->input->post('li_bio');

		$object = $this->muser->register($id, $fname, $lname, $email, '', 3, $login, $photo, $bio);
        
        if($object) {

            gf_registerCurrentUser($object);

            $this->email->linkedin($email, $fname." ".$lname);

            if (gf_cu_type() == 1) {

            	redirect(site_url('chat'), 'get');

            } else {

            	redirect(site_url('profile'), 'get');
            	
            }

        } else {
            show_error("An Error has occurred while registering!", 500, "Register Error");
        }
	}

	public function logout()
	{
		gf_unregisterCurrentUser();

		// $CI =& get_instance();

  //   	$cu_id = $CI->session->userdata('cu_email');

		// $abc = "hello".$cu_id;
		// show_error($abc, 400, "Hello, World");
		redirect(site_url('home'), 'get');

	}
}