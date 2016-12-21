<?php
class Teams_model extends CI_Model {
	

	    function get_name($data) {

	    	 $condition = "community_creator =" . "'" . $data['user_email'] . "'";

	         $this->db->select('*');
	         $this->db->from('tbl_community');
	         $this->db->where($condition);
	         $query = $this->db->get();

	         $ret = $query->row();

	         return $ret->community_name;
	    }

	
	    function get_code($data) {


	    	 $condition = "community_creator =" . "'" . $data['user_email'] . "'";

	         $this->db->select('*');
	         $this->db->from('tbl_community');
	         $this->db->where($condition);
	         $query = $this->db->get();

	         $ret = $query->row();

	         return $ret->community_number;
	    }


	    function get_creator($data) {


	    	 $condition = "community_creator =" . "'" . $data['user_email'] . "'";

	         $this->db->select('*');
	         $this->db->from('tbl_community');
	         $this->db->where($condition);
	         $query = $this->db->get();

	         $ret = $query->row();

	         return $ret->community_creator;
	    }

	    function get_id($data) {


	    	 $condition = "community_creator =" . "'" . $data['user_email'] . "'";

	         $this->db->select('*');
	         $this->db->from('tbl_community');
	         $this->db->where($condition);
	         $query = $this->db->get();

	         $ret = $query->row();

	         return $ret->community_id;
	    }

	    function sort($command) {


            Switch($command) {


                case 'sort_email' :

                    $this->db->select('*');
                    $this->db->from('tbl_community');
                    $this->db->join('tbl_user_login', 'tbl_community.user_id = tbl_user_login.user_id'); 

                break;
  
            }
            

            $query = $this->db->get();

            return $query->result();  
	    }

	

	}

?>