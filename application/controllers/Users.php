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
	public function __construct() {

		parent::__construct();

		$this->load->model(array('users_model', 'teams_model', 'pages_model'));
	}

	public function index()
	{
		 $session_data = $this->session->userdata('session_data'); 

		

		 if($session_data != '') {


		 	 $data = array(

                 'user_email' => $session_data['user_email']

		 	 );

		 	

		 	 
             $data['team'] = $this->teams_model->get_name($data);

             $data['code'] = $this->teams_model->get_code($data);

             
             $this->load->view('todo/user.dashboard.php', $data);

		 }
		 else
		 {
		 	 $this->load->view('b3/signin.php');
		 }
	}

	public function pages() {

		$session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['user_email']

		 	 );

		 	 
             $data['team']   =  $this->teams_model->get_name($data);

             $data['code']   =  $this->teams_model->get_code($data);

             $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));
             
             $this->load->view('todo/user.pages-temp.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 	 
	}

	public function createpage() {

        $session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {


			  $data = array(

                 'user_email' => $session_data['user_email']

		 	 );

		 	 
             $data['team']   =  $this->teams_model->get_name($data);

             $data['code']   =  $this->teams_model->get_code($data);

             $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));


             $this->load->view('todo/user.createpagev2.php', $data);

	    }
	    else
		 {
		 	 $this->load->view('b3/signin.php');

		 } 		

	}

	public function signup() {

		 $this->load->view('b3/signup.php');
	}

	public function signin() {

		 $this->load->view('b3/signin.php');
	}

	

	

}