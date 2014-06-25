<!--Controller for the matcher, possible to change location-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Matcher extends CI_Controller {
	
	public function form()
	{
		$this->load->view('header');
		$this->load->view('matcher_form');
	}
	
	public function matching()
	{
		$userID = 2;
		$this->load->model('matcher_model');
		
		if(isset($_POST['accFinance'])){
			$this->matcher_model->insert_expertise($userID, $_POST['accFinance']);
		}
		
		if(isset($_POST['arch'])){
			$this->matcher_model->insert_expertise($userID, $_POST['arch']);
		}
		
		if(isset($_POST['artsHist'])){
			$this->matcher_model->insert_expertise($userID, $_POST['artsHist']);
		}
		
		if(isset($_POST['eco'])){
			$this->matcher_model->insert_expertise($userID, $_POST['eco']);
		}
		
		if(isset($_POST['engi'])){
			$this->matcher_model->insert_expertise($userID, $_POST['engi']);
		}
		
		if(isset($_POST['enviro'])){
			$this->matcher_model->insert_expertise($userID, $_POST['enviro']);
		}
		
		if(isset($_POST['lang'])){
			$this->matcher_model->insert_expertise($userID, $_POST['lang']);
		}
		
		if(isset($_POST['law'])){
			$this->matcher_model->insert_expertise($userID, $_POST['law']);
		}
		
		if(isset($_POST['math'])){
			$this->matcher_model->insert_expertise($userID, $_POST['math']);
		}
		
		if(isset($_POST['media'])){
			$this->matcher_model->insert_expertise($userID, $_POST['media']);
		}
		
		if(isset($_POST['med'])){
			$this->matcher_model->insert_expertise($userID, $_POST['med']);
		}
		
		if(isset($_POST['religion'])){
			$this->matcher_model->insert_expertise($userID, $_POST['religion']);
		}
		
		if(isset($_POST['sci'])){
			$this->matcher_model->insert_expertise($userID, $_POST['sci']);
		}
		
		if(isset($_POST['other1'])){
			$this->matcher_model->insert_expertise($userID, $_POST['text1']);
		}
		
		if(isset($_POST['other2'])){
			$this->matcher_model->insert_expertise($userID, $_POST['text2']);
		}
		
		if(isset($_POST['other3'])){
			$this->matcher_model->insert_expertise($userID, $_POST['text3']);
		}
		
		$skills = array(
        'busAnalysis' => $_POST['businessAnalysis']
		);
		
		$this->matcher_model->insert_skills($userID,$skills);
		
		$this->load->view('thankyou');
	}
}
?>

		

