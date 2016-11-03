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

        $this->load->model('pages_model');

        $this->load->model('teams_model');

         $this->load->model('admins_model');

        $this->load->helper('date');

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

        	      	    if($this->form_validation->run() == FALSE) {
                              
                            $this->load->view('b3/signin.php');
        	      	    }
        	      	    else {

                             $data = array(
           

                                'user_email'     => $this->input->post('email'),
                                'user_password'  => $this->input->post('password')

                             );

        	      	    	 if($this->users_model->login($data) == true ) {



        	      	    	 	$this->session->set_userdata('session_data', $data);

        	      	    	 	redirect('users/', 'refresh');

        	      	    	 }	

        	      	    	 else {

        	      	    	 	redirect('users/signin', 'refresh');

        	      	    	 }

        	      	    }	

        	      	    break;

                     case 'signup' :


                     //first step

                       if($this->input->post('steps') == '1' ) {

                            $email = $this->input->post('email');


                            if($this->users_model->find($email) == TRUE) {

                                 
                                $data = array(
                                     
                                     'email'  => $email 

                                );

                                $this->load->view('b3/emailexist.php', $data);

                            }
                            else {

                                $data = array(
                                     
                                     'email'  => $email 

                                );

                                $this->load->view('todo/user.details.php', $data);

                            }
                   

                           


                       }
                       else {
 
                           
                           


                           
                            

                            $this->form_validation->set_rules('email', 'Email', 'required');

                            $this->form_validation->set_rules('password', 'Password', 'required');

                            $this->form_validation->set_rules('firstname', 'First Name', 'required');

                            $this->form_validation->set_rules('middlename', 'Middle Name', 'required');

                            $this->form_validation->set_rules('lastname', 'Last Name', 'required');

                            $this->form_validation->set_rules('team', 'Team Name', 'required');

                            $this->form_validation->set_rules('code', 'Code', 'required');

                            $this->form_validation->set_rules('position', 'Position', 'required');


                            if($this->form_validation->run() == FALSE) {
                                
 
                               //   $data['email']     = $this->input->post('email');
                             //     $data['password']  = $this->input->post('password');
                              //    $data['fname']     = $this->input->post('fname');
                             //     $data['lname']     = $this->input->post('lname');
                             //     $data['team']      = $this->input->post('team');
                             //     $data['code']      = $this->input->post('code');

                              //    $this->load->view('todo/user.details.correction.php', $data);

                               echo "faild2";
                            
                            } 
                            else {

                                date_default_timezone_set('Asia/Jakarta');

                                $data = array(
               

                                    'user_email'     => $this->input->post('email'),
                                    'user_password'  => md5($this->input->post('password')),
                                    'firstname'      => $this->input->post('firstname'),
                                    'middlename'     => $this->input->post('middlename'),
                                    'lastname'       => $this->input->post('lastname'),
                                    'team'           => $this->input->post('team'),
                                    'code'           => $this->input->post('code'),
                                    'position'       => $this->input->post('position'),
                                    'date_created'   => date('Y-m-d H:i:s')

                                 );

                                if($this->users_model->register($data) == true ) {

                                	//redirect('/user/pages/dashboard', 'refresh');

                                    $this->session->set_userdata('session_data', $data);

                                    $default = $this->pages_model->get_admin_defualt();

                                    $community_id = $this->teams_model->get_id($data);

                                    foreach($default as $result) {


                                            $data = array(
                                                 
                                                 'name'         => $result->name,
                                                 'content'      => $result->content,
                                                 'community_id' => $community_id,
                                                 'editable'     => $result->editable

                                            );

                                            $this->pages_model->set_defualt($data);

                                      }      

                                    echo "affirmative";

                                	

                                	
                                }
                                else {

                                	redirect('/user/page/signup', 'refresh');  
                                }

                            }	

                            //second step
                        }    
    
                        break;

                        
               }

            break;

            case 'admin' :

                 Switch($process) {


                      case 'login' :

                          $this->form_validation->set_rules('email', 'Email', 'required');
                          $this->form_validation->set_rules('password', 'Password', 'required');

                          $email     = $this->input->post('email');
                          $password  = $this->input->post('password');

                          if($this->form_validation->run() == FALSE) {
                              
                            $this->load->view('b3/admin.signin.php');
                          }
                          else {

                             $data = array(
           

                                'email'     => $this->input->post('email'),
                                'password'  => $this->input->post('password')

                             );

                              if($this->admins_model->login($data) == true ) {



                                $this->session->set_userdata('session_data', $data);

                                redirect('admin/', 'refresh');

                               }  else {

                                  redirect('users/admin.signin', 'refresh');

                               }

                          }     


                      break;


                      case 'logout' :

                            $this->session->sess_destroy();

                             redirect('admin', 'refresh');

                      break;

                      case 'addadmin' :

                            $this->form_validation->set_rules('email', 'Email', 'required');

                            $this->form_validation->set_rules('password', 'Password', 'required');

                            $this->form_validation->set_rules('firstname', 'First Name', 'required');

                            $this->form_validation->set_rules('middlename', 'Middle Name', 'required');

                            $this->form_validation->set_rules('lastname', 'Last Name', 'required');

                            $this->form_validation->set_rules('level', 'Position', 'required'); 

                            if($this->form_validation->run() == FALSE) {

                                echo 'faild to add';

                            }
                            else {

                                
                                date_default_timezone_set('Asia/Jakarta');

                                $data = array(
               

                                    'email'          => $this->input->post('email'),
                                    'password'       => md5($this->input->post('password')),
                                    'firstname'      => $this->input->post('firstname'),
                                    'middlename'     => $this->input->post('middlename'),
                                    'lastname'       => $this->input->post('lastname'),
                                    'level'          => $this->input->post('level'),
                                    'date_created'   => date('Y-m-d H:i:s')

                                 );

                                if($this->admins_model->add($data) == true ) {


                                     redirect('/admin/adminlist', 'refresh');
                                }  


                            }  

                      break;

                      case 'addteam' :


                            $this->form_validation->set_rules('email', 'Email', 'required');

                            $this->form_validation->set_rules('password', 'Password', 'required');

                            $this->form_validation->set_rules('firstname', 'First Name', 'required');

                            $this->form_validation->set_rules('middlename', 'Middle Name', 'required');

                            $this->form_validation->set_rules('lastname', 'Last Name', 'required');

                            $this->form_validation->set_rules('team', 'Team Name', 'required');

                            $this->form_validation->set_rules('code', 'Code', 'required');

                            $this->form_validation->set_rules('position', 'Position', 'required'); 

                            if($this->form_validation->run() == FALSE) {

                                echo 'faild to add';

                            }
                            else {


                                date_default_timezone_set('Asia/Jakarta');

                                $data = array(
               

                                    'user_email'     => $this->input->post('email'),
                                    'user_password'  => md5($this->input->post('password')),
                                    'firstname'      => $this->input->post('firstname'),
                                    'middlename'     => $this->input->post('middlename'),
                                    'lastname'       => $this->input->post('lastname'),
                                    'team'           => $this->input->post('team'),
                                    'code'           => $this->input->post('code'),
                                    'position'       => $this->input->post('position'),
                                    'date_created'   => date('Y-m-d H:i:s')

                                 );

                                if($this->users_model->register($data) == true ) {


                                     redirect('/admin/users', 'refresh');
                                }   

                            } 


                      break;


                   } 


            break;
                      


              

               
        }
	}

	public function logout() {
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}