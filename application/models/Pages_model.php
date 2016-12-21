<?php
class Pages_model extends CI_Model {
	

	    function get_admin_defualt() {

	   

	         $this->db->select('*');
	         $this->db->from('tbl_defualt_page');
	         
	         $query = $this->db->get();

	         return $query->result();
	    }

	    function set_defualt($data) {


              $this->db->insert('tbl_community_page', $data);

              return ($this->db->affected_rows() != 1) ? false : true;

	    }

	    function add_page_details($data) {

               $this->db->insert('tbl_page_resoucres', $data);

              
	    }

	    public function get_name($data) {


	    	 $id = $data['id'];

	    	 $condition = "id =" ."'".$id."'";

	    	

	         $this->db->select('*');
	         $this->db->from('tbl_community_page');
	         $this->db->where($condition);
	         $query = $this->db->get();

	         $ret = $query->row();

	         return $ret->name;
	    }

	    function add_page($data) {

             $this->db->insert('tbl_community_page', $data);

             $condition = "name =" . "'" . $data['name'] . "'";

	         $this->db->select('*');
	         $this->db->from('tbl_community_page');
	         $this->db->where($condition);
	         $query = $this->db->get();

	         $ret = $query->row();

	         return $ret->id;
	    }

	  

	    function sort($community) {

	    	 $condition = "community_id =" . "'" . $community . "'";


	    	Switch($community) {


                case 'all' :

                     
                      $this->db->select('*');
	                  $this->db->from('tbl_community_page');
	                  $this->db->where('community_id = 0');
	                  $query = $this->db->get();

	                  return $query->result();

                break;

                default :

                      $this->db->select('*');
	                  $this->db->from('tbl_community_page');
	                  $this->db->where($condition);
	                  $query = $this->db->get();

	                  return $query->result();


  
            }
            



	         

	    }

	   
	   

	

	}

?>