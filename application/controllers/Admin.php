<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

		$this->load->model(array('users_model', 'teams_model', 'pages_model', 'admins_model'));
	}

	public function index()
	{
		 $session_data = $this->session->userdata('session_data'); 

		

		 if($session_data != '') {


		 	 $data = array(

                 'user_email' => $session_data['email']

		 	 );

		 	

		 

             
             $this->load->view('todo/admin.dashboard.php', $data);

		 }
		 else
		 {
		 	 $this->load->view('b3/admin.signin.php');
		 }
	}


	public function adminlist() {

		$session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email'  => $session_data['email'],
                 'admin_list'  => $this->admins_model->sort()

		 	 );

		 	 
          //   $data['team']   =  $this->teams_model->get_name($data);

          //   $data['code']   =  $this->teams_model->get_code($data);

         //    $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));


             
             $this->load->view('todo/admins.list.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 
	}


	public function resources() {

		$session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email'  => $session_data['email'],
                 'admin_list'  => $this->admins_model->sort()

		 	 );

		 	 
          //   $data['team']   =  $this->teams_model->get_name($data);

          //   $data['code']   =  $this->teams_model->get_code($data);

         //    $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));


             
             $this->load->view('todo/admin.resources.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 
	}

	public function settings() {

        $session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['email']

		 	 );

		 	 
             $data['team']   =  $this->teams_model->get_name($data);

             $data['code']   =  $this->teams_model->get_code($data);

             $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));
             
             $this->load->view('todo/admin.settings.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 	 


	}

	public function support() {

        $session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['email']

		 	 );

		
             
             $this->load->view('todo/admins.support.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 

	}

	public function adddisasterinfo() {


        $session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['email']

		 	 );

		 	 
           
             
             $this->load->view('todo/admin.adddisasterinfo.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/signin.php');

		 } 

	}



	public function users() {

		$session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'email'     => $session_data['email'],
                 'userlist'  => $this->teams_model->sort('sort_email')

		 	 );

		 	 
          //   $data['team']   =  $this->teams_model->get_name($data);

          //   $data['code']   =  $this->teams_model->get_code($data);

         //    $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));
             
             $this->load->view('todo/admin.userslist.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/admin.signin.php');

		 } 	 
	}

	public function addkits() {


		  $session_data = $this->session->userdata('session_data'); 

         if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['email']

		 	 );

		 	 
            
             
             $this->load->view('todo/admin.addkits.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/admin.signin.php');

		 } 

	}

	public function addpage() {


		  $session_data = $this->session->userdata('session_data'); 

         if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['email']

		 	 );

		 	 
           
             
             $this->load->view('todo/admin.addpage.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/admin.signin.php');

		 } 

	}


	public function addresources() {

         $session_data = $this->session->userdata('session_data'); 

         if($session_data != '') {

              $data = array(

                 'user_email' => $session_data['email']

		 	 );

		 	 
           
             
             $this->load->view('todo/admin.addresourcesv2.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/admin.signin.php');

		 } 

	}

	public function kits() {


        $session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'email' => $session_data['email']

		 	 );

		 	 
          //   $data['team']   =  $this->teams_model->get_name($data);

          //   $data['code']   =  $this->teams_model->get_code($data);

         //    $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));
             
             $this->load->view('todo/admin.kits.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/admin.signin.php');

		 } 	

	}

	public function pages() {

		$session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'email' => $session_data['email']

		 	 );

		 	 
          //   $data['team']   =  $this->teams_model->get_name($data);

          //   $data['code']   =  $this->teams_model->get_code($data);

         //    $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));
             
             $this->load->view('todo/admin.pages.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/admin.signin.php');

		 } 	 
	}

	public function menus() {

		$session_data = $this->session->userdata('session_data'); 

		if($session_data != '') {

              $data = array(

                 'email' => $session_data['email']

		 	 );

		 	 
          //   $data['team']   =  $this->teams_model->get_name($data);

          //   $data['code']   =  $this->teams_model->get_code($data);

         //    $data['pages']  =  $this->pages_model->sort($this->teams_model->get_id($data));
             
             $this->load->view('todo/admin.menu.php', $data);

		 }
		 else {
		 	
		 	 $this->load->view('b3/admin.signin.php');

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

		 $this->load->view('b3/admin.signin.php');
	}

}