<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url'));
		$this->load->library("tank_auth");
		$this->user_id = $this->tank_auth->boot();
	}		

	public function index()
	{		
		// First, check if you've filled out skills inventory
		$this->load->model(array('user','skills'));
		// ,'events', 'tasks', 'assignments','goals'
		$columns = array("first_name", "last_name", "photo_url","title","description","linkedin_url");
		$data['profile'] = $this->user->getUserInfo($this->user_id, $columns);
		$data['hasSI'] = $this->skills->hasSI($this->user_id);
		
		
		//Load User Goals
		/*
		$this->load->model('goals');

		$data['goals']=$this->goals->currentGoals($user_id);
		if ($data['goals'] == false) {
			$data['suggested_goals'] = $this->goals->suggestedGoals($user_id);
		} else {
			$data['tasks']=$this->tasks->currentTasks($user_id);
			if ($data['tasks'] == false) {
				$data['suggested_tasks'] = $this->goals->suggestedTasks($data['goals']);
			} else {
			
			}		
		}
		*/

		$data['admin'] = $this->tank_auth->is_admin();
		$data['goals'] = false;
		//Load number of tasks
		/*
		$j = count($data['goal']['goalID']);
				
		for ($i = 0 ; $i < $j ; $i++) 
		{
			$data['progress'][$i] = $this->dashboard_model->load_progressbar(1,$data['goal']['goalID'][$i]);
			
		}
		*/
		
		//Loading the view
		$this->load->view('dashboard', $data);
	}	

	public function skillsInventory() {
		if (empty($_POST) == false) {
			// To database
			$this->load->model("skills");
			$this->skills->newSIAssessment($this->user_id ,$_POST);
			$data = array(
				"site_title" => "Thank you!",
				"message" => 'Thanks for filling out the form! We\'ll let you know when we find a great match for you! <br /><br /><a href="/dashboard">Return to dashboard &laquo;</a>'
			);
			$this->load->view('message', $data);
		} else {
			$this->load->view('skills_inventory');
		}
	}
}
?>