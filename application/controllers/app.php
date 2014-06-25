<!--all queries controller-->
<!--Loads all objects that make the template.-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class App extends CI_Controller {
			
	public function profile()
	{}
	
	//loads the function to visualize tasks in the main task page.
	public function tasks()
	{
		
		$this->load->view('header');
		
		$userID=1;
		
		//Load all tasks from one user
		$this->load->model('task_model');
		$data['wtask'] = $this->task_model->weekly_tasks($userID);
		
		//Load all tasks from the month
		$this->load->model('task_model');
		$data['mtask'] = $this->task_model->monthly_tasks($userID);
				
		//Load tasks that were checked
		$this->load->model('task_model');
		$data['oldtask'] = $this->task_model->previous_tasks($userID);
		
		//Loading the view
		$this->load->view('tasks',$data);
		
	}
	
	//function to insert a new task from a popover view.
	public function insertTask(){
	
		 $newtask = array(
			 'goal' => $_POST['goal'],
			 'title' => $_POST['taskTitle'],
			 'description' => $_POST['taskDescription'],
			 'begin' => $_POST['taskBegin'],
			 'end' => $_POST['taskEnd']
		 );
		  
		 $this->load->model('task_model');
		 $this->task_model->insert_task($newtask);
		 $this->task_model->insert_program_date(1,$newtask);
		 
		 $this->load->view('thankyou');
		 
	}
	
	//function to change task date from a popover view.
	public function change_task_date() {}
	
    //loads the function to visualize goals in the main goal page.
	public function goals()
	{
		//All goals in the database are loaded
		$this->load->model('goal_model');
		$data['allgoals']=$this->goal_model->all_goals(1);
		
		//All goals from one user
		$this->load->model('goal_model');
		$data['goal']=$this->goal_model->goals_user(1);
		
		$this->load->view('header');
		$this->load->view('goals',$data);
		
		// //All tasks from one goal 
		// $this->load->model('goal_model');
		// $data=$this->goal_model->goals_tasks($goalID);
		
		
		// //Add a new goal
		// $this->load->model('goal_model');
		// $this->goal_model->insert_goal();
		// $this->load->view('thankyou');
	}
	
	public function assignments()
	{
		$this->load->view('header');
		
		$userID = 1;
		
		//Load old assignments
		$this->load->model('assign_model');
		$data['assignment'] = $this->assign_model->old_assign($userID);
		
		
		$this->load->view('assignments', $data);
	}
	
	public function insert_ass()
	{
		$userID = 1;
		$assignment = array(
			'assTitle' => $_POST['title'],
			'assText' => $_POST['text'],
			'assDate' => $_POST['date']
		);
	
	    $this->load->model('assign_model');
		$this->assign_model->save_assign($userID,$assignment);
		$this->load->view('thankyou');
	}
	
	public function show_oldass()
	{
		
	}
 
	
}
?>

