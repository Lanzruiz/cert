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
		$this->load->model(array('users_model'));
	}

	public function index()
	{
		 $session_data = $this->session->userdata('session_data'); 

		 if($session_data != '') {

             $this->load->view('syrena/user.dashboard.php');

		 }
		 else
		 {
		 	 $this->load->view('login-form/login.php');
		 }
	}

	public function signup() {

		 $this->load->view('login-form/signup.php');
	}

	public function signin() {

		 $this->load->view('b3/signin.php');
	}

	public function pages($pages)
	{

		  $session_data = $this->session->userdata('session_data'); 

		  if($session_data != '') {

              Switch($pages) {

              	   case 'dashboard' :

              	       $this->load->view('syrena/user.dashboard.php');
              	       break;

              	   case 'profile' :

              	       $this->load->view('syrena/user.profile.php');
              	       break;

              	   case 'list' :
              	   
              	       $this->load->view('syrena/user.pages.php');
              	       break;

              	    case 'new' :
              	    
              	       $this->load->view('syrena/user.new-page.php');      
                       break;

                    case 'categories':
                    
                       $this->load->view('syrena/user.categories.php');
                       break;  

                    case 'newcategory' :
                    
                       $this->load->view('syrena/user.new-categories.php');
                       break;   

                    case 'kits' :
                    
                        $this->load->view('syrena/user.kits.php');
                        break;   

                    case 'newkits' :
                        
                        $this->load->view('syrena/user.new-kits.php');
                        break; 

                    case 'preview' :
                    
                         $this->load->view('syrena/user.app-preview.php');
                         break;       
              	   
              	   case 'addpreparednessinfo' :
              	   
              	       $this->load->view('b3/user.new-preparedness.php');
              	       break;

              	   case 'preparednessinfo' :
              	   
              	       $this->load->view('b3/user.list-preparedness.php');
              	       break;        


              }
		  }
		  else {

		  	  $this->load->view('b3/signin.php');


		  }
	}

	

}