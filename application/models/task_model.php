<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Task_model extends CI_Model{

	//shows all tasks from one user, current and old. 
	public function tasks_user($userID)
	{
		$sql="SELECT taskTitle, taskDescription FROM tasks
			 INNER JOIN program ON tasks.taskID = program.taskID
			 WHERE userID =".$userID;
			 $results = mysql_query($sql);
			
	}
	
	//based on the current day, it show tasks that the begin date is 7 or less days before today. 
	public function weekly_tasks($userID)
	{	
		
		$sql="SELECT taskTitle, taskDescription
			FROM tasks, program
			WHERE tasks.taskID = program.taskID
			AND taskBegin >= DATE_SUB(NOW(),INTERVAL 7 DAY) 
			AND userID=".$userID;
			
		$results = mysql_query($sql);
		
		 if($element = mysql_fetch_array($results)){
				$wtask["title"][] = $element["taskTitle"];
				$wtask["description"][] = $element["taskDescription"];
			while ($element = mysql_fetch_array($results))
			 {
				$wtask["title"][] = $element["taskTitle"];
				$wtask["description"][] = $element["taskDescription"];
			 }
		 } else{
			$wtask["title"][] = "No tasks for this week!";
			$wtask["description"][] = "";
		 }
		 
		   
		return $wtask;
			
	}
	
	
	//based on the current day, it shows tasks that the begin date is set as 30 days before today.
	public function monthly_tasks($userID)
	{	
		$sql="SELECT taskTitle, taskDescription
			FROM tasks, program 
			WHERE tasks.taskID = program.taskID
			AND taskBegin >= DATE_SUB(NOW(),INTERVAL 30 DAY) 
			AND userID=".$userID;

			$results = mysql_query($sql);
			
			if($element = mysql_fetch_array($results)){
				$mtask["title"][] = $element["taskTitle"];
				$mtask["description"][] = $element["taskDescription"];
				while ($element = mysql_fetch_array($results))
				 {
					$mtask["title"][] = $element["taskTitle"];
					$mtask["description"][] = $element["taskDescription"];
				 }
			} else{
				$mtask["title"][] = "No tasks for later this month!";
				$mtask["description"][] = "";
			}
				return $mtask;			
	}
	
	//function that inserts tasks in the table tasks.
	 public function insert_task($newtask)
	{
		    $tasktitle= $newtask['title'];
			$taskdesc= $newtask['description'];
			$goalID = $newtask['goal']; 
			
			$this->db->query("INSERT INTO tasks VALUES ('','$tasktitle','$taskdesc','$goalID')");
			
	}
	
	//function taht inserts tasks in the table program.
	public function insert_program_date($userID,$taskdate)
	{	
		$taskTitle = $taskdate['title'];
		$taskbegin = $taskdate['begin'];
		$taskend = $taskdate['end'];
		
		$sql="SELECT taskID
			FROM tasks
			WHERE taskTitle='$taskTitle'";
		
		$result = mysql_query($sql);
		
		while ($element=mysql_fetch_array($result))
		{
			$taskID = $element; 
		}

		$this->db->query("INSERT INTO program VALUES ('$userID','$taskID[0]','$taskbegin','$taskend','0')");
		
		}
	
	//shows user all tasks that were already done.
	public function previous_tasks($userID)
	{	
		$sql="SELECT taskTitle, taskDescription
			FROM tasks
			INNER JOIN program ON tasks.taskID = program.taskID
			WHERE userID=".$userID." AND taskCheck=1";
		$results = mysql_query($sql);
		
		while ($element = mysql_fetch_array($results))
		{
			$oldtask["title"][] = $element["taskTitle"];
			$oldtask["description"][] = $element["taskDescription"];
		}
        return $oldtask;
	}
	
	//changes the date in the program table.
	public function change_date_tasks($userID,$taskID)
	{
		$sql="UPDATE program 
			SET taskBegin=2013-08-20, taskEnd=2013-08-27
			WHERE userID=".$userID." AND taskID=".$taskID;
		$results = $this->db->query($sql);
        return $results;
	}
}
?>



				 
