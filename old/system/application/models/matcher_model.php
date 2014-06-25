<!--model for the matcher-->

	<?php class Matcher_model extends CI_Model {
	
		public function insert_expertise($userID, $expertise)  //$expertise receives the $_POST value
		{
		 
			$this->db->query("INSERT INTO userexpertise VALUES ('$userID','$expertise')");
		 		 
		}
		
		public function insert_skills($userID, $skills)
		{
			
			$busAnalysis = $skills['busAnalysis'];
			$this->db->query("INSERT INTO userskills VALUES ('$userID','$busAnalysis')");
		}
}
?>
