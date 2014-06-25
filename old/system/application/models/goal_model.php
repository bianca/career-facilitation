<!--models that have function for the goals-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goal_model extends CI_Model{
 
	public function goals_user($userid)
	{
		$sql="SELECT goalTitle, goalDescription
			FROM goals
			INNER JOIN tasks,program
			WHERE program.userID =".$userid."
			AND tasks.taskID = program.taskID
			AND tasks.goalID=goals.goalID";
		$results = $this->db->query($sql);
		return $results;
	}
	
	public function goals_tasks($goalid)
	{
		$sql="SELECT taskTitle, taskDescription
			FROM tasks
			WHERE tasks.goalID= ".$goalid;
		$results = $this->db->query($sql);
		return $results;
	}
	
	public function insert_goal()
	{
		echo "hi";
		//form not created yet, that is why it is not working with this names goaltitle and goaldescription
		$goaltitle= $_POST['goaltitle'];
		$goaldesc= $_POST['goaltescription'];
		$this->db->query("INSERT INTO users VALUES ('','$goaltitle','$goaldesc')");
		
	}
}
?>
