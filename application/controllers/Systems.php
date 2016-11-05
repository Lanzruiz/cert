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

                      case 'addresources' :

                            $this->form_validation->set_rules('name', 'Name', 'required');

                            $this->form_validation->set_rules('description', 'Description', 'required');

                            $this->form_validation->set_rules('quantity', 'Quantity', 'required');

                            $images = " ";

                            if($this->form_validation->run() == FALSE) {

                                echo 'faild to add';

                            }
                            else {


                                  $target_dir = "uploads/";
                                  $target_file = $target_dir . basename($_FILES["image"]["name"]);
                                  $uploadOk = 1;
                                  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                  // Check if image file is a actual image or fake image
                                  if(isset($_POST["submit"])) {

                                      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

                                     if($check !== false) {

                                       echo "File is an image - " . $check["mime"] . ".";
                                       $uploadOk = 1;

                                     } else {

                                       echo "File is not an image.";
                                       $uploadOk = 0;
                                     }
                                  }

                                  // Check if file already exists
                                  if (file_exists($target_file)) {

                                     echo "Sorry, file already exists.";
                                     $uploadOk = 0;
                                   }

                                   // Check file size
                                  if ($_FILES["image"]["size"] > 5000000000) {

                                     echo "Sorry, your file is too large.";
                                     $uploadOk = 0;
                                   }

                                   // Allow certain file formats
                                   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                     && $imageFileType != "gif" ) {
                                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                        $uploadOk = 0;
                                    }

                               // Check if $uploadOk is set to 0 by an error
                                   if ($uploadOk == 0) {
                                       echo "Sorry, your file was not uploaded.";
                                       // if everything is ok, try to upload file
                                   } else {

                                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";

                                       $images = '/uploads/'. basename( $_FILES["image"]["name"]);

                     



                                         } else {

                                         echo "Sorry, there was an error uploading your file.";

                                         }

                                    }


                                date_default_timezone_set('Asia/Jakarta');

                                $data = array(
               

                                    'name'           => $this->input->post('name'),
                                    'description'    => $this->input->post('password'),
                                    'image_url'      => $images,
                                    'availabilty'    => $this->input->post('availability'),
                                    'date_created'   => date('Y-m-d H:i:s'),
                                    'status'         => 1,
                                    'community_id'   => 00000
                                   
                                 );

                                if($this->resources_model->add($data) == true ) {


                                     redirect('/admin/resources', 'refresh');
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