<!--models that have function for the goals-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goals extends CI_Model{
 	function __construct()
	{
		parent::__construct();

		$this->load->database();

	}
 

	public function suggestedGoals($user_id)
	{
		$sql="SELECT DISTINCT goalTitle, goalDescription 
		FROM goals, tasks, program
			WHERE program.userID =".$userID."
			AND program.taskID != tasks.taskID 
			AND tasks.goalID = goals.goalID";
		$r = $this->db->query($sql);
		if ($r->num_rows() > 0) {
			return $r->result_array();
		} else {
			return false;
		}
	}


	public function all_goals($user_id)
	{
		$sql="SELECT DISTINCT goalTitle, goalDescription 
		FROM goals, tasks, program
			WHERE program.userID =".$userID."
			AND program.taskID != tasks.taskID 
			AND tasks.goalID = goals.goalID";
		$r = $this->db->query($sql);
		if ($r->num_rows() > 0) {
			return $r->result_array();
		} else {
			return false;
		}
	}

	public function goals_user($userID)
	{
		$sql="SELECT DISTINCT goalTitle, goalDescription, goals.goalID FROM goals, tasks, program
			WHERE program.userID =".$userID."
			AND tasks.taskID = program.taskID
			AND tasks.goalID= goals.goalID";
		$results = mysql_query($sql);
		while ($element=mysql_fetch_array($results))
		{
		 $goal["title"][]= $element["goalTitle"];
		 $goal["description"][] = $element["goalDescription"];
		 $goal["goalID"][] = $element["goalID"];
		}
		 return $goal; 
	}



	public function goals_user($userID)
	{
		$sql="SELECT DISTINCT goalTitle, goalDescription, goals.goalID FROM goals, tasks, program
			WHERE program.userID =".$userID."
			AND tasks.taskID = program.taskID
			AND tasks.goalID= goals.goalID";
		$results = mysql_query($sql);
		while ($element=mysql_fetch_array($results))
		{
		 $goal["title"][]= $element["goalTitle"];
		 $goal["description"][] = $element["goalDescription"];
		 $goal["goalID"][] = $element["goalID"];
		}
		 return $goal; 
	}
	
	public function goals_tasks($goalid)
	{
		$sql="SELECT taskTitle, taskDescription
			FROM tasks
			WHERE tasks.goalID= ".$goalid;
		$results = mysql_query($sql);
		while ($element = mysql_fetch_array ($results))
		{
		 $task_from_goal[]=$element["taskTitle"];
		}
		 	return $task_from_goal;
	}
	
	public function insert_goal()
	{
		//form not created yet, that is why it is not working with this names goaltitle and goaldescription
		$goaltitle= $_POST['goaltitle'];
		$goaldesc= $_POST['goaldescription'];
		$this->db->query("INSERT INTO users VALUES ('','$goaltitle','$goaldesc')");
		
	}
}
?>
