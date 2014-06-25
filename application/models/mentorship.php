<?php class Mentorship extends CI_Model {

	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library("tank_auth");

	}
	
	public function hasMentor($user_id) {
		$sql = "select * from mentorship where mentee_id=".$user_id." and end IS NULL";
		$r = $this->db->query($sql);
		if ($r->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function hasMentee($user_id) {
		$sql = "select * from mentorship where mentor_id=".$user_id." and end IS NULL";
		$r = $this->db->query($sql);
		if ($r->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function begin($data) {
		$data["begin"] = date("Y-m-d H:i:s");
		$r = $this->db->insert("mentorship", $data);
		return true;
	}


	public function end($data) {
		$update = array ( 
			"end" => date("Y-m-d H:i:s")
			);
		$this->db->where($data);
		$r = $this->db->update("mentorship", $update);
		return true;
	}

	public function all() {
		$sql = "select 
				users.id as user_id, 
				users.first_name as user_first_name, 
				users.last_name as user_last_name,  
				mentor.id as mentor_id,
				mentor.first_name as mentor_first_name, 
				mentor.last_name as mentor_last_name,
				mentor_mentorship.id as mentor_mentorship_id,
				mentor_mentorship.end as mentor_mentorship_end,
				mentee.id as mentee_id,
				mentee.first_name as mentee_first_name, 
				mentee.last_name as mentee_last_name,
				mentee_mentorship.id as mentee_mentorship_id,
				mentee_mentorship.end as mentee_mentorship_end
				from ((((users as users
				left outer join mentorship as mentor_mentorship on users.id=mentor_mentorship.mentee_id and mentor_mentorship.end IS NULL)
				left outer join users as mentor on mentor.id=mentor_mentorship.mentor_id )

				left outer join mentorship as mentee_mentorship on users.id=mentee_mentorship.mentor_id and mentee_mentorship.end IS NULL)
				left outer join users as mentee on mentee.id=mentee_mentorship.mentee_id)";
		$r = $this->db->query($sql);
		return $r->result_array();
	}
	
}