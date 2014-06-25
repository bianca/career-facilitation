<!--random codes-->

<!--Model for Tasks. 
    It should insert new data in the table, select from those datas and print them. -->
	
	<?php //class Tasking extends CI_Model {

	 public function __construct()
	{
	 $this->load->database($config);
			
	}
	
	public function get_tasks($slug = FALSE)
 {
	 if ($slug === FALSE)
	{
		 $query = $this->db->get('tasks');
		 return $query->result_array();
	}

	 $query = $this->db->get_where('tasks', array('taskID' => $slug));
	return $query->row_array();
}

}
?>
<!----------------------------------->

<?php
 class Tasksdisplay extends CI_Controller {
 
 public function tasks()
 {
		$this->load->model('task_model');
		
		$data['tasks']=$this->task_model->load_tasks();
}	
 public function index()
	{
	 $data['tasks']=$this->tasking->get_tasks();
 }
	
	public function view($slug)
	 {
		$data['tasks']=$this->tasking->get_tasks($slug);
}
}
?>

<!------------------------------------------->

<?php
class Task_model extends CI_Model{

	
	// public function alltasks() //shows all tasks from especific user
	// {
		// $con=mysqli_connect("127.0.0.1","root","","csciap");
		
		// $sql='SELECT * FROM tasks'
		// $result=mysqli_query($con,$sql);
		// var_dump($result);
	// }
	
	// public function goaltasks()
	// {
		// $con=mysqli_connect("127.0.0.1","root","","csciap");
		
		// $sql='SELECT taskID FROM tasks WHERE goalID=1';
		// $result=mysqli_query($con,$sql);
		// var_dump($result);
	// }
	
		
	// public function taskdate()
	// {
		// $con=mysqli_connect("127.0.0.1","root","","csciap");
		
		// $sql='SELECT * FROM tasks
			// WHERE taskEnd-taskBegin = 7';
			// $result=mysqli_query($con,$sql); 
		// var_dump($result);
	// }
	
	// public function taskmonth()
	// {	
		// $con=mysql_connect("127.0.0.1","root","","csciap");
		
		// $sql='SELECT * FROM tasks
			// WHERE taskEnd - taskBegin = 30';
		// $result=mysqli_query($con,$sql); 
		// var_dump($result);
	// }
	
	public function load_tasks()
	{
			$sql="SELECT taskTitle, taskDescription
			FROM tasks
			INNER JOIN program ON tasks.taskID = program.taskID
			WHERE userID =1";
		
		
		 // $tasks= $this->db->query($sql,array($userID));
		// $taskdetails= array();
		
		// foreach($tasks->result() as $row){
		 // $taskid = $row->taskid
		
			
	}
}
?>

	