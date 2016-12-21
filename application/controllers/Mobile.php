<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

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
		$this->load->model(array('users_model', 'mobile_model', 'resources_model'));
	}

    public function index() {



       if($this->mobile_model->istherecode() == true) {

           $this->load->view('mobile/mobile.dashboard2.php');
       }
       else {

          $this->load->view('cert/code.php');
       }

    	

         
    }

    public function process($command) {

         Switch($command) {


            case 'putcode' :


                $data  = array(
                    
                    'code' => $this->input->post('code')

                ); 

            


                if($this->mobile_model->codexist($data) == true) {
   
                   $this->mobile_model->putcode($data);




                   echo "success";




                   
                  

                }
                else {

                  echo "none";

                }

            break;


         }   
    }	

    public function code() {

        $this->load->view('cert/code.php');
    	   
    }

    public function intro() {

       $this->load->view('mobile/mobile.intro.php');
    }

    public function loading() {


    }

    public function instruction() {

    	$this->load->view('mobile/mobile.instruction-temp1.php');
    }

    public function interview() {

        $this->load->view('mobile/mobile.interview.php');
    }

    public function main() {


    }


	public function plan() {


	}

    public function kits() {


    }

    public function resources() {


    }

    public function disaster() {


    }

    public function disasterinfo() {


    }



	
}