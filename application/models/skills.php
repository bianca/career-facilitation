<?php class Skills extends CI_Model {

	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library("tank_auth");

	}
	
	public function hasSI($user_id) {
		$r = $this->db->get_where('skills', array("user_id" => $user_id));
		return ($r->num_rows() > 0);
	}

	public function newSIAssessment($user_id, $values) {
		$this->closeLatest($user_id);
		foreach($values as $skill_name=>$rating) {
			if (strpos($skill_name,"skill_") !== false && strpos($skill_name,"_kls") === false) {
				$sk_nm = str_replace("skill_","",$skill_name);
				$kls = $values[$sk_nm."_kls"] == "on" ? 1 : 0;
				$this->db->insert("skills", array("latest" => 1, "user_id" => $user_id, "date" => date("Y-m-d H:i:s"), "skill" => $sk_nm, "rating" => $rating, "kls" => $kls));
			} else if (strpos($skill_name,"expertise_") !== false) {
				$this->db->insert("skills", array("latest" => 1, "user_id" => $user_id, "date" => date("Y-m-d H:i:s"), "skill" => $skill_name, "rating" => 5, "kls" => 1));
			}
		}

	}


	public function closeLatest($user_id) {
		$data = array(
               'latest' => 0
            );

		$this->db->where('user_id', $user_id);
		$this->db->where('user_id', $user_id);
		$this->db->update('skills', $data); 
	}

	public function newSIAssessmentwithID($values) {
		foreach($values as $skill_name=>$rating) {
			if (strpos($skill_name,"skill_") !== false && strpos($skill_name,"_kls") === false) {
				$sk_nm = str_replace("skill_","",$skill_name);
				$kls = $values[$sk_nm."_kls"] == "on" ? 1 : 0;
				$x = $this->db->insert("skills", array("user_id" => $values['id'], "date" => date("Y-m-d H:i:s"), "skill" => $sk_nm, "rating" => $rating, "kls" => $kls));
			}
		}

	}

	public function getPossibleMentors($user_id) {
		$key_skills = $this->keySkills($user_id);
		$sql = "select users.id, users.photo_url, users.linkedin_url, users.first_name, users.last_name, users.title, users.description, sum(skills.rating) as match_score from (users join skills on skills.user_id = users.id and skills.latest = 1 and ("; 
		foreach ($key_skills as $ks) {
			$sql .= "skills.skill='".$ks['skill']."' or ";
		}
		$sql = substr ( $sql , 0 , strlen($sql)-3 );
		$sql .= ") and skills.rating IS NOT NULL and users.id !=".$user_id.") ";
		$sql .= "where NOT EXISTS (select mentorship.mentor_id from mentorship where mentorship.mentor_id=skills.user_id and mentorship.end is not null) ";
		$sql .= " GROUP BY users.id ";
		$sql .= "ORDER BY match_score DESC";

		$r = $this->db->query($sql);
		if ($r->num_rows() > 0) {
			return $r->result_array();
		} else {
			return false;
		}
	}


	public function getPossibleMentees($user_id) {
		$sql = "select users.id, users.photo_url, users.linkedin_url, users.first_name, users.last_name, users.title, users.description, sum(mentor_skills.rating) as match_score from ((users left outer join skills on skills.user_id = users.id and skills.latest = 1 and skills.kls = 1 ) left outer join skills as mentor_skills on mentor_skills.skill = skills.skill and mentor_skills.user_id=".$user_id." and mentor_skills.rating IS NOT NULL) where users.id !=".$user_id;
		$sql .= " and NOT EXISTS (select mentorship.mentee_id from mentorship where mentorship.mentor_id=skills.user_id and mentorship.end is not null) ";
		$sql .= " GROUP BY users.id having match_score IS NOT NULL";
		$sql .= " ORDER BY match_score DESC";

		$r = $this->db->query($sql);
		if ($r->num_rows() > 0) {
			return $r->result_array();
		} else {
			return false;
		}

		$r = $this->db->query($sql);
		if ($r->num_rows() > 0) {
			return $r->result_array();
		} else {
			return false;
		}
	}

	public function keySkills($user_id) {
		$key_skills = $this->db->get_where("skills", array("user_id" => $user_id, "kls" => 1));
		if ($key_skills->num_rows() > 0) {
			return $key_skills->result_array();
		} else {
			return false;
		}
	}
	public function expertSkills($user_id) {
		$expert_skills = $this->db->get_where("skills", array("user_id" => $user_id, "rating" => 5));
		if ($expert_skills->num_rows() > 0) {
			return $expert_skills->result_array();
		} else {
			return false;
		}
	}
}