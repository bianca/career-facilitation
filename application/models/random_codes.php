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

<form role="form">


<!-- Form Name -->
<legend>Welcome to the MATCHER!</legend>
<h4> Here we will see who matches you for a mentor or mentee.</br>
Honest answer guys, we want to find you the perfect match!</h4>

<!-- Multiple Checkboxes -->
<div class="control-group">
  <label class="control-label" for="checkboxes">Multiple Checkboxes</label>
  <div class="controls">
    <label class="checkbox" for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one">
      Option one
    </label>
    <label class="checkbox" for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="Option two">
      Option two
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="radios">Inline Radios</label>
  <div class="controls">
    <label class="radio inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label>
    <label class="radio inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label>
    <label class="radio inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label>
    <label class="radio inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="radios">Inline Radios</label>
  <div class="controls">
    <label class="radio inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label>
    <label class="radio inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label>
    <label class="radio inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label>
    <label class="radio inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="radios">Inline Radios</label>
  <div class="controls">
    <label class="radio inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label>
    <label class="radio inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label>
    <label class="radio inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label>
    <label class="radio inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
  </div>
</div>


</form>

	