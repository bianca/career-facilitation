<!--Loads all objects that make the template.-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Dashboard extends CI_Controller {
			
	public function index()
	{
	    //Load Event 
		$this->load->model('allqueries');
		$data['event_title'] = $this->allqueries->load_events();
		
		//Load User 
		$this->load->model('allqueries');
		$data['user']=$this->allqueries->load_user(1);
		
		//Loading the view
		$this->load->view('home', $data);
	}	
}
?>

