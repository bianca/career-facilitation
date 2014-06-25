<!--Model for the queries in the dashboard.-->

	<?php class Dashboard_model extends CI_Model {
	
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
	
	public function load_user($userID)
	{
		$sql = "SELECT usarName, userCareer, userLocation, userComment FROM users WHERE userID=".$userID;
		$result= mysql_query($sql);
		
		while ($element=mysql_fetch_array($result))
		{
			$mainuser = $element; 
		}
		return $mainuser;
	}

	public function load_progressbar($userID, $goal){
		
		$sql = "SELECT DISTINCT tasks.taskID, taskCheck
		FROM tasks, program, goals
		WHERE tasks.taskID = program.taskID
		AND program.userID =".$userID."
		AND tasks.goalID =".$goal;
		
		$results = mysql_query($sql);
		//var_dump($results);
		
		$progress["total"] = 0;
		$progress["tasks"] = 0;
	
		while($element = mysql_fetch_array($results))
		{
			$progress["total"]++;
			if($element["taskCheck"] == 1 ){
				$progress["tasks"]++;
			}
		}
		
		$progress["percentage"] = $progress["tasks"] / $progress["total"] *100;
			
		return $progress;
	}	
}
?>
