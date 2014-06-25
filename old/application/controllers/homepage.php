<!--all queries controller-->
<!--Loads all objects that make the template.-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Homepage extends CI_Controller {
			
	public function index()
	{
		$this->load->view('home');
	}	
	
	public function profile()
	{
		$this->load->view('menteeprofile');
	}
	
	public function alltasksfromuser()
	{	
	//fake userid for now, but ill get it out of the session 
	//remember to check if they are logged in
		$userid=1;
		$this->load->model('task_model');
		$data=$this->task_model->tasks_user($userid);
	}
	
	public function alltasksfromgoal()
	{
	 $goalid=2;
	 $this->load->model('goal_model');
	 $data=$this->goal_model->goals_tasks($goalid);
	 var_dump($data);
	 
	}
	
	public function allgoalsfromuser()
	 {
		$userid=3;
		$this->load->model('goal_model');
		$data=$this->goal_model->goals_user($userid);
		var_dump($data);
	}
	
	
	public function newgoal()
	{
	 $this->load->model('goal_model');
	 $this->goal_model->insert_goal();
	 $this->load->view('thankyou');
	}
		 
	public function user()
	{
		
		$this->load->model('allqueries');
		$data['user']=$this->allqueries->load_user(1);
		var_dump($data);
		$this->load->view('home',$data);
		
	}
}
?>

