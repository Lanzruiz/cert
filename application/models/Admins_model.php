<?php
class Admins_model extends CI_Model {
	


	public function add($data) {


		 $tbl_admin = array(

             'email'     => $data['email'],
             'password'  => $data['password']

		 );

		 $this->db->insert('tbl_admin', $tbl_admin);

         $condition = "email =" . "'" . $data['email'] . "'";

         $this->db->select('*');
         $this->db->from('tbl_admin');
         $this->db->where($condition);
         $query = $this->db->get();

         $ret = $query->row();

         date_default_timezone_set('America/Los_Angeles');

         $user_details = array(

              'firstname'      => $data['firstname'],
             
              'lastname'       => $data['lastname'],
              'level'          => $data['level'],
              'date_created'   => $data['date_created'],
              'admin_id'       => $ret->id,
              'status'         => 1

         );

         $this->db->insert('tbl_admin_info', $user_details);

         return ($this->db->affected_rows() != 1) ? false : true;
	}


    public function sort() {

         
         $this->db->select('*');
         $this->db->from('tbl_admin');
         $this->db->join('tbl_admin_info', 'tbl_admin_info.admin_id = tbl_admin.id'); 


        $query = $this->db->get();

        return $query->result();  

    }    

	public function find($data) {

        $condition = "user_email =" . "'" . $data . "'";

        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where($condition);
        $this->db->limit(1);

        $query = $this->db->get();

		if ($query->num_rows() == 1) {

            return true;

        } else {
             
            return false;
        }


	}

	public function login($data) {


        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . md5($data['password']) . "'";

         

	    $this->db->select('*');
	    $this->db->from('tbl_admin');
		$this->db->where($condition);
		$this->db->limit(1);
			
		$query = $this->db->get();

		if ($query->num_rows() == 1) {

            return true;

        } else {
             
            return false;
        }

	}
}
?>