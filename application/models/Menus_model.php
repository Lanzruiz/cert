<?php
class Menus_model extends CI_Model {
	

	    public function add($data) {

	   

	         $this->db->insert('tbl_menu', $data);

	         return ($this->db->affected_rows() != 1) ? false : true;
	    }

	    public function update($data) {

	    	 $community_id = $data['community_id'];

	   
             $this->db->where('community_id', $community_id);
	         $this->db->update('tbl_menu', $data);

	         return ($this->db->affected_rows() != 1) ? false : true;
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

	  

	    function sort($command) {


	    	$condition = "community_id =" . "'" . $command. "'";


            Switch($command) {


                case 'all' :

                    $this->db->select('*');
                    $this->db->from('tbl_menu');
                    

                break;

                default :


                    $this->db->select('*');
                    $this->db->from('tbl_menu');
                    $this->db->where($condition);


  
            }
            

            $query = $this->db->get();

            return $query->result();  
	    }

	   
	   

	

	}

?>