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

	    function sort($community) {

	    	 $condition = "community_id =" . "'" . $community . "'";


             $this->db->select('*');
	         $this->db->from('tbl_community_page');
	         $this->db->where($condition);
	         $query = $this->db->get();

	         return $query->result();

	    }

	   
	   

	

	}

?>