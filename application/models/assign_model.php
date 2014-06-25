<!--assignments model-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assign_model extends CI_Model{
 
 
	public function save_assign($userID, $assignment)
	{
		$title = $assignment['assTitle'];
		$text = $assignment['assText'];
		$date = $assignment['assDate'];
		
		
		$this->db->query("INSERT INTO assignments VALUES ('','$title','$text','$date','$userID')");	
		
	}
	
	public function old_assign($userID)
	{
		$sql="SELECT assTitle, assText, assDate
		FROM assignments 
		WHERE userID=".$userID;
		
		$results= mysql_query($sql);
		
		if($element = mysql_fetch_array($results)){
			 $assign["title"][]= $element["assTitle"];
			 $assign["text"][]= $element["assText"];
			 $assign["date"][]= $element["assDate"];
				while ($element = mysql_fetch_array($results))
				 {
					 $assign["title"][]= $element["assTitle"];
					 $assign["text"][]= $element["assText"];
					 $assign["date"][]= $element["assDate"];
				 }
			} else{
				 $assign["title"][]= "No assignments written yet";
				 $assign["text"][]= "";
				 $assign["date"][]= "";
			}
				return $assign;			
	}

}
?>
	
	
