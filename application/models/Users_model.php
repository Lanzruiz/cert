<?php
class Users_model extends CI_Model {
	


	public function register($data) {


		 $user_login = array(

             'user_email'     => $data['user_email'],
             'user_password'  => $data['user_password']

		 );

		 $this->db->insert('tbl_user_login', $user_login);

         $condition = "user_email =" . "'" . $data['user_email'] . "'";

         $this->db->select('*');
         $this->db->from('tbl_user_login');
         $this->db->where($condition);
         $query = $this->db->get();

         $ret = $query->row();

         date_default_timezone_set('America/Los_Angeles');

         $user_details = array(

              'first_name'    => $data['firstname'],
              'middle_name'   => $data['middlename'],
              'last_name'     => $data['lastname'],
              'position'      => $data['position'],
              'date_created'  => $data['date_created'],
              'user_id'       => $ret->user_id

         );

         $this->db->insert('tbl_user_info', $user_details);

         $app_details = array(

             'community_name'     => $data['team'],
             'community_creator'  => $data['user_email'],
             'community_number'   => $data['code'],
             'user_id'            => $ret->user_id

         );

         $this->db->insert('tbl_community', $app_details);



		 return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function find($data) {

        $condition = "user_email =" . "'" . $data . "'";

        $this->db->select('*');
        $this->db->from('tbl_user_login');
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


        $condition = "user_email =" . "'" . $data['user_email'] . "' AND " . "user_password =" . "'" . md5($data['user_password']) . "'";

         

	    $this->db->select('*');
	    $this->db->from('tbl_user_login');
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