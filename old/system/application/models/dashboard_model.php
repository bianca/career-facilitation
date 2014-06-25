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
