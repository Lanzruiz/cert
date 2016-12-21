<?php
class Resources_model extends CI_Model {


	    public function add($data) {



		 $this->db->insert('tbl_resources', $data);

        

		 return ($this->db->affected_rows() != 1) ? false : true;

	    }

	

	    public function get_name($data) {


	    	 $id = $data['id'];

	    	 $condition = "id =" ."'".$id."'";

	    	

	         $this->db->select('*');
	         $this->db->from('tbl_resources');
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


	    	 $condition = "community_id =" . "'" . $command. "'";


            Switch($command) {


                case 'all' :

                    $this->db->select('*');
                    $this->db->from('tbl_resources');
                    

                break;

                default :

                    $this->db->select('*');
                    $this->db->from('tbl_resources');
                    $this->db->where($condition);

                break;    
  
            }
            

            $query = $this->db->get();

            return $query->result();  
	    }

	

	}

?>