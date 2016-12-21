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

		$this->load->model(array('users_model', 'teams_model', 'pages_model', 'menus_model', 'resources_model'));
	}

	public function index()
	{
		 $session_data = $this->session->userdata('session_data'); 

		

		 if($session_data != '') {


		 	 $data = array(

                 'user_email' => $session_data['user_email']

		 	 );

             $output = array(

             	   'team' => $this->teams_model->get_name($data),
             	   'code' => $this->teams_model->get_code($data),
             	   'users' => $this->users_model->getdetails($data)

             );

             
             $this->load->view('todo/user.dashboard.php', $output);

		 }
		 else
		 {
		 	 $this->load->view('b3/signin.php');
		 }
	}

	public function menus() {
 
        $session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['user_email'],


		 	 );


             $community_id = $this->teams_model->get_id($data);







             $output = array(
    
                 'team'       => $this->teams_model->get_name($data),
                 'code'       => $this->teams_model->get_code($data),
                 'pages'      => $this->pages_model->sort($community_id),
                 'users'      => $this->users_model->getdetails($data),
                 'menus'      => $this->menus_model->sort($community_id),
                 'resources'  => $this->resources_model->sort($community_id),
             );
             
             $this->load->view('todo/user.menu.php', $output);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 

	}

	public function kits() {

		  $session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['user_email'],


		 	 );


             $community_id = $this->teams_model->get_id($data);

             $output = array(
    
                 'team'       => $this->teams_model->get_name($data),
                 'code'       => $this->teams_model->get_code($data),
                 'pages'      => $this->pages_model->sort($community_id),
                 'users'      => $this->users_model->getdetails($data),
                 'resources'  => $this->resources_model->sort($community_id)
             );
             
             $this->load->view('todo/user.kits.php', $output);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 	

	}

	public function addpage() {


		$session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['user_email'],


		 	 );


             $community_id = $this->teams_model->get_id($data);



             $output = array(
    
                 'team'       => $this->teams_model->get_name($data),
                 'code'       => $this->teams_model->get_code($data),
                 'pages'      => $this->pages_model->sort($community_id),
                 'users'      => $this->users_model->getdetails($data),
                 'resources'  => $this->resources_model->sort($community_id)
             );
             
             $this->load->view('todo/user.addpage.php', $output);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 	


	}

	public function pages() {

		$session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['user_email'],


		 	 );


             $community_id = $this->teams_model->get_id($data);







             $output = array(
    
                 'team'   => $this->teams_model->get_name($data),
                 'code'   => $this->teams_model->get_code($data),
                 'pages'  => $this->pages_model->sort($community_id),
                 'users'  => $this->users_model->getdetails($data)
             );
             
             $this->load->view('todo/user.pages-temp.php', $output);

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