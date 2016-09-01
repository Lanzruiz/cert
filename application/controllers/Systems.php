<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Systems extends CI_Controller {

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

	

		$this->load->library('form_validation');

		$this->load->model('users_model');

	}

	public function process($group, $process) {

        Switch($group) {

        	  case 'user' :

        	      Switch($process) {


        	      	 case 'createcommunity':

        	      	     


        	      	 case 'logout':

        	      	     $this->session->sess_destroy();

        	      	     redirect('users', 'refresh');

        	      	     break;


        	      	 case 'login' :

        	      	    $this->form_validation->set_rules('email', 'Email', 'required');
                        $this->form_validation->set_rules('password', 'Password', 'required');

        	      	    $email     = $this->input->post('email');
        	      	    $password  = $this->input->post('password');

        	      	    if ($email == '' || $password == '') {
                              
                            $this->load->view('b3/signin.php');
        	      	    }
        	      	    else {

                             $data = array(
           

                                'user_email'     => $this->input->post('email'),
                                'user_password'  => $this->input->post('password')

                             );

        	      	    	 if($this->users_model->login($data) == true ) {

        	      	    	 	$this->session->set_userdata('session_data', $data);

        	      	    	 	redirect('users/pages/dashboard', 'refresh');

        	      	    	 }	

        	      	    	 else {

        	      	    	 	redirect('users/signin', 'refresh');

        	      	    	 }

        	      	    }	

        	      	    break;

                     case 'signup' :


                     //first step

                       if($_POST['steps'] == '1' ) {

                          $email = $this->input->post('email');

                          $this->load->view('syrena/step2.signup.php');


                       }
                       else {



                         //second step

                            $email       = $this->input->post('email');
                            $password    = $this->input->post('password');
                            $repassword  = $this->input->post('repassword');

                            if ($email == '' || $password == '' || $password != $repassword) {
                                
                                  $this->load->view('b3/signup.php');
                            } 
                            else {

                                $data = array(
               

                                    'user_email'     => $email,
                                    'user_password'  => md5($password)

                                 );

                                if($this->users_model->register($data) == true ) {

                                	//redirect('/user/pages/dashboard', 'refresh');
                                     
                                    $this->load->view('b3/user.dashboard.php'); 

                                	//echo 'success';

                                	$this->session->set_userdata('session_data', $data);
                                }
                                else {

                                	redirect('/user/page/signup', 'refresh');  
                                }

                            }	

                            //second step
                        }    
    
                        break;

                        
               }
        }
	}

	public function logout() {
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}