<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
			
	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper(array('url'));
		$this->load->library("tank_auth");
		$this->tank_auth->boot(true);
	}

	public function index()
	{		
		$this->load->view('admin');
	}	

	public function possibleMentees($user_id) {
		$this->load->model("user");
		$u = $this->user->getUserInfo($user_id,array());
		$data = array();
		$data['site_title'] = "Possible Mentees for ".$u["first_name"]." ".$u["last_name"];

		
		$this->load->model("mentorship");
		$data['hasMentee'] = $this->mentorship->hasMentee($user_id);
		if ($data['hasMentee'] == false) {
			$this->load->model("skills");
			$data['hasSI'] = $this->skills->hasSI($user_id);
			if ($data['hasSI'] == true) {
				// get people that have the greatest summation of the kls
				$data['profiles'] = $this->skills->getPossibleMentees($user_id);
				$data['profile_insert'] = "match_mentor";
				$data['hidden'] = array(
					"mentor_id" => $user_id
					);
				$this->load->view("listofprofiles", $data);
			} else {
				$data['message'] = "This user hasn't filled out a skills inventory yet. You might want to gently remind them to do so.";
				$this->load->view("message", $data);
			}
		} else {
			$data['message'] = 'This user already has a Mentee. <a href="/admin/status">Navigate to the status page</a> to end their current mentorship.';
			$this->load->view("message", $data);
		}
	}

	public function possibleMentors($user_id) {
		$this->load->model("user");
		$u = $this->user->getUserInfo($user_id,array());
		$data = array();
		$data['site_title'] = "Possible Mentors for ".$u["first_name"]." ".$u["last_name"];

		
		$this->load->model("mentorship");
		$data['hasMentor'] = $this->mentorship->hasMentor($user_id);
		if ($data['hasMentor'] == false) {
			$this->load->model("skills");
			$data['hasSI'] = $this->skills->hasSI($user_id);
			if ($data['hasSI'] == true) {
				// get people that have the greatest summation of the kls
				$data['profiles'] = $this->skills->getPossibleMentors($user_id);
				$data['profile_insert'] = "match_mentor";
				$data['hidden'] = array(
					"mentee_id" => $user_id
					);
				$this->load->view("listofprofiles", $data);
			} else {
				$data['message'] = "This user hasn't filled out a skills inventory yet. You might want to gently remind them to do so.";
				$this->load->view("message", $data);
			}
		} else {
			$data['message'] = 'This user already has a Mentor. <a href="/admin/status">Navigate to the status page</a> to end their current mentorship.';
			$this->load->view("message", $data);
		}		
	}

	public function match() {
		if (isset($_POST['mentee_id']) == true and isset($_POST['mentor_id']) == true) {
			$this->load->model("mentorship");
			$this->mentorship->begin(array("mentee_id" => $_POST['mentee_id'], "mentor_id" => $_POST['mentor_id']));
			echo "true";
		}
	}

	public function end($mentorship_id) {
		$this->load->model("mentorship");
		$this->mentorship->end(array("id" =>$mentorship_id));
		redirect("/admin/status");
	}

	public function status () {
		// get all people, current mentee, current mentor
		$this->load->model("mentorship");
		$data = array();
		$data['site_title'] = "Mentorship Status";
		$data["list"] = $this->mentorship->all();
		$this->load->view("full", $data);

	}
/*
	public function upload() {
		// get files
		$this->load->library('excel');
		$this->load->model("skills");
		$files = scandir("assets/data/");
		$p = 1;
		foreach ($files as $file) {
			$values = array("id" => $p);
			$objPHPExcel = PHPExcel_IOFactory::load("assets/data/".$file);
			for ($i = 29; $i<62; $i++) {
				$skill = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();
				$ranking = $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();
				$kls = $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();
    			$e = $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();
    			if ($e == "x") {
    				$ranking = 5;
    			} 
    			$nsn = str_replace(" ", "_", strtolower($skill));
    			$values["skill_".$nsn] = $ranking;
    			$values[$nsn."_kls"] = $kls == "x" ? 1 : 0;

			}
			//var_dump($values);
			$this->skills->newSIAssessmentwithID($values);
			$p++;
		}
		
	}
	*/

}
?>