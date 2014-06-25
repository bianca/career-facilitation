<!--Model for all the queries in the app. should be separated in the right models.-->
    
	
	<?php class Allqueries extends CI_Model {

	public function tasks_user($userid)
	{
		$sql="SELECT taskTitle, taskDescription
			 FROM tasks
			 INNER JOIN program ON tasks.taskID = program.taskID
			 WHERE userID =".$userid;
			 $results = $this->db->query($sql);
             return $results;
	}
	
	public function task_time($userid)
		{
		$sql="SELECT taskTitle, taskDescription
			FROM tasks
			INNER JOIN program ON tasks.taskID = program.taskID
			WHERE DATEDIFF( taskBegin, taskEnd ) <=7
			AND userID=".$userid;
			$results = $this->db->query($sql);
            return $results;			//but i cant convert the date in order to make the math 
	}
	
	public function add_tasks()
	{
		//We won't be using $_POST in models because... we will have already pulled the values out of $POST in the controller and then passed the value as a parameter to the model. Remember, you will call these from the controller
		    $tasktitle= $_POST['tasktitle'];
			$taskdesc= $_POST['taskdescription'];
			$goalID = $_POST['goalID']; //radio button in the form 
			$results = $this->db->query("INSERT INTO tasks VALUES ('','$tasktitle','$taskdesc','$goalID)");
			return $results;
			
	}
	
	public function previous_tasks($userid)
	{	
		$sql="SELECT taskTitle, taskDescription
			FROM tasks
			INNER JOIN program ON tasks.taskID = program.taskID
			WHERE userID=".$userid." AND taskCheck=TRUE";
		$results = $this->db->query($sql);
        return $results;
	}
	
	public function load_tasks()
	{
			$sql="SELECT taskTitle, taskDescription
			FROM tasks
			INNER JOIN program ON tasks.taskID = program.taskID
			WHERE userID =1";
	}
	
	public function change_date_tasks($userid,$taskid)
	{
		$sql="UPDATE program 
			SET taskBegin=2013-08-20, taskEnd=2013-08-27
			WHERE userID=".$userid." AND taskID=".$taskid;
		$results = $this->db->query($sql);
        return $results;
	}
	
	
	
	public function goals_tasks($goalid)
	{
		$sql="SELECT taskTitle, taskDescription
			FROM tasks
			WHERE tasks.goalID=".$goalid;
		$results = $this->db->query($sql);
		return $results;
	}
	
	public function add_goals()
	{
		    $goaltitle= $_POST['goaltitle'];
			$goaldesc= $_POST['goaldescription'];
			$results = $this->db->query("INSERT INTO users VALUES ('','$goaltitle','$goaldesc')");
			return $results;
	}
	
	public function load_events()
	{
		$sql = "SELECT * FROM events";
		$results = mysql_query($sql);		
		while ($element=mysql_fetch_array($results))
		{
		$event_title[]= $element["eventTitle"];
		}
		return $event_title;
	}

	public function load_user($userid)
	{
		$sql = "SELECT usarName, userCareer, userLocation FROM users WHERE userID=".$userid;
		$result= mysql_query($sql);
		
		while ($element=mysql_fetch_array($result))
		{
		$mainuser = $element; 
		}
		return $mainuser;
	}		
		
}	
?>
				  