<?php
class Users_model extends CI_Model {
	


	public function register($data) {

		$this->db->insert('tbl_user_login', $data);

		 return ($this->db->affected_rows() != 1) ? false : true;
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