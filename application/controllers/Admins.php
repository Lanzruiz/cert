<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

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
	public function __construct() {
		parent::__construct();
		$this->load->model(array('users_model'));
	}

	public function index()
	{
		if(!$this->session->userdata('logged_in')) {
			$this->load->view('login');
		} else {
			$this->load->view('home');
		}
	}

	public function dashboard {

        
        	  $this->load->view('b3/admin.dashboard.php');
        
	}

	public function login()
	{
		if($this->input->post('login')) {
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$auth = $this->users_model->login($data);
			if($auth==1) {
				$this->session->set_userdata('logged_in', true);
				$this->load->view('home');
			} else {
				$this->load->view('login');
			}
		} else {
			$this->load->view('login');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}