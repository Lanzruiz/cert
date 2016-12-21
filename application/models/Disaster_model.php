<?php
class Disaster_model extends CI_Model {


	    public function add($data) {



		 $this->db->insert('tbl_disaster_info', $data);

        

		 return ($this->db->affected_rows() != 1) ? false : true;

	    }

	

	    function get_name($data) {


	    	 $id = $data['id'];

	    	 $condition = "id =" ."'".$id."'";

	    	

	         $this->db->select('*');
	         $this->db->from('tbl_disaster_info');
	         $this->db->where($condition);
	         $query = $this->db->get();

	         $ret = $query->row();

	         return $ret->name;
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


                case 'all' :

                    $this->db->select('*');
                    $this->db->from('tbl_disaster_info');
                    

                break;
  
            }
            

            $query = $this->db->get();

            return $query->result();  
	    }

	

	}

?>