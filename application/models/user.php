<?php class User extends CI_Model {

	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library("tank_auth");

	}
	
	public function getUserInfo($id, $columns) {	
		$this->db->select($columns);	
		$r = $this->db->get_where('users', array("id" => $id));
		if ($r->num_rows() > 0) {
			$row = $r->result_array();
			return $row[0];
		}
		else {
			return false;
		}
		

	}
}