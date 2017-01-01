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

    $this->load->model('resources_model');

    $this->load->model('disaster_model');

    $this->load->model('menus_model');

    $this->load->helper('date');

	}

	public function process($group, $process) {


        date_default_timezone_set('Asia/Jakarta');

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

                           
                            $this->form_validation->set_rules('lastname', 'Last Name', 'required');

                            $this->form_validation->set_rules('team', 'Team Name', 'required');

                            $this->form_validation->set_rules('code', 'Code', 'required');

                         

                            if($this->form_validation->run() == FALSE) {
                                
 

                               echo "faild";
                            
                            } 
                            else {

                               

                                $data = array(
               

                                    'user_email'     => $this->input->post('email'),
                                    'user_password'  => md5($this->input->post('password')),
                                    'firstname'      => $this->input->post('firstname'),
                                   
                                    'lastname'       => $this->input->post('lastname'),
                                    'team'           => $this->input->post('team'),
                                    'code'           => $this->input->post('code'),
                                   
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

                                    echo "user added";

                                	

                                	
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

                       

                            $this->form_validation->set_rules('lastname', 'Last Name', 'required');

                            $this->form_validation->set_rules('team', 'Team Name', 'required');

                            $this->form_validation->set_rules('code', 'Code', 'required');

                        

                            if($this->form_validation->run() == FALSE) {

                                echo 'faild to add';

                            }
                            else {


                                date_default_timezone_set('Asia/Jakarta');

                                $data = array(
               

                                    'user_email'     => $this->input->post('email'),
                                    'user_password'  => md5($this->input->post('password')),
                                    'firstname'      => $this->input->post('firstname'),
                                  
                                    'lastname'       => $this->input->post('lastname'),
                                    'team'           => $this->input->post('team'),
                                    'code'           => $this->input->post('code'),
                                   
                                    'date_created'   => date('Y-m-d H:i:s')

                                 );

                                if($this->users_model->register($data) == true ) {


                                     $pages = $this->pages_model->sort('all');

                                     $user_email = $this->input->post('email');

                                     $user_id =  $this->users_model->get_id($data);

                                     $community_id = $this->teams_model->get_id($data);


                                     foreach ($pages as $row) {

                                         $toaddpage = array(

                                             'name'         => $row->name,
                                             'app_code'     => $this->input->post('code'),
                                             'status'       => 1,
                                             'user_id'      => $user_id,
                                             'community_id' => $community_id
                                         );
                                      
                                         $this->pages_model->add_page($toaddpage);
                                     }  


                                     redirect('/admin/users', 'refresh');
                                } 

                                



                            } 


                      break;


                      case 'adddisaster' :

                            $this->form_validation->set_rules('disaster', 'disastername', 'required');

                            $this->form_validation->set_rules('before', 'Before', 'required');

                            $this->form_validation->set_rules('during', 'During', 'required');

                            $this->form_validation->set_rules('after', 'After', 'required');


                            if($this->form_validation->run() == FALSE) {

                                 echo "fail";

                            }
                            else {



                                 $data = array(
           
                                     'name'               => $this->input->post('disaster'),
                                     'disaster_before'    => $this->input->post('before'),
                                     'disaster_during'    => $this->input->post('during'),
                                     'disaster_after'     => $this->input->post('after'),
                                     'date_created'       => date('Y-m-d H:i:s'),
                                     'status'             => 1

                                  );


                                  if($this->disaster_model->add($data) == true ) {

                                      
                                       echo "added";


                                  }  

                                 else {

                                      echo  "faild resources";

                                  }


                            }  

                      break;

                      case 'addpage' :

  
                            $this->form_validation->set_rules('pagename', 'Page Name', 'required');

                            if($this->form_validation->run() == FALSE) {

                                 echo "fail";

                            }
                            else {


                                  $data  = array(

                                         'name'         => $this->input->post('pagename'),

                                         'app_code'      => 'Administrator',

                                         'status'       => 1,

                                         'community_id' => 0,

                                         'editable'     => 0

                                  );

                                  echo $this->pages_model->add_page($data);

                                      
                             }

                      break;

                      case 'addpageresources' :


                           $data = array(
           
                               'page_id'      => $this->input->post('id'),
                               'content'      => $this->input->post('content'),
                               'content_type' => $this->input->post('type')

                           );            

                           $this->pages_model->add_page_details($data);


                      break;


                      case 'resourcesdetails' :



                           $data = array(
           
                               'id' => $this->input->post('r_id')

                           );            

                           $result = $this->resources_model->get_name($data);

                           echo $result; 


                      break;


                      case 'pagedetails' :



                           $data = array(
           
                               'id' => $this->input->post('r_id')

                           );            

                           $result = $this->pages_model->get_name($data);

                           echo $result; 


                      break;



                       case 'disasterdetails' :



                           $data = array(
           
                               'id' => $this->input->post('r_id')

                           );            

                           $result = $this->disaster_model->get_name($data);

                           echo $result; 


                      break;


                      case 'savemenu':


                           $data = array(
           
                               'content'       => $this->input->post('content'),
                               'community_id'  => $this->input->post('community_id')

                           );

                            if($this->menus_model->add($data) == true ) {

                                      
                                       echo "added";


                             }  


                      break;


                      case 'editmenu':


                           $data = array(
           
                               'content'       => $this->input->post('content'),
                               'community_id'  => $this->input->post('community_id')

                           );

                            if($this->menus_model->update($data) == true ) {

                                      
                                       echo "edited";


                             }  


                      break;

                           


                      case 'addresources' :

                          
                            $this->form_validation->set_rules('name', 'Name', 'required');

                            $this->form_validation->set_rules('description', 'Description', 'required');  

                            $this->form_validation->set_rules('availability', 'Availability', 'required');

                            if($this->form_validation->run() == FALSE) {

                                 echo "fail";

                            }
                            else {

                                   $data = array(
           
                                     'name'           => $this->input->post('name'),
                                     'description'    => $this->input->post('description'),
                                     'availability'   => $this->input->post('availability'),
                                     'website'        => $this->input->post('website'),
                                     'date_created'   => date('Y-m-d H:i:s'),
                                     'status'         => 1

                                  );

                                  if($this->resources_model->add($data) == true ) {

                                      
                                       echo "added";


                                  }  

                                 else {

                                      echo  "faild resources";

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