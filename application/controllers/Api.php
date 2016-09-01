<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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

	public function call($type, $process, $code, $credential) {

          Switch($type) {

              case 'get' :

                  Switch($process) {


                        case 'sort' :

                           if($code == '45030' AND $credential == '34985435234ERer3fjdsj')
                           {

                               $arr = array(
                                    
                                        "code" => "45030",
                                        "community" => "Cebu Emergency",
                                        "city" => "Cebu",
                                        "country" => "Philippines",
                                        "pages" => ["Plan", "Prepared Info", "Disaster Info", "Local Info"],
                                        "plan" => ["Kits and Resources"]
                                    
                                );

                                echo json_encode($arr);

                           }
                           else {

                               echo 'credential not recognize';
                           }


                  }

           } 

    }
	
}