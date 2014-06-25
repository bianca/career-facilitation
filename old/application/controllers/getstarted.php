
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Getstarted extends CI_Controller {

	public function form()
	{	
		$this->load->view('form');
	}
		
	public function newuser()
	{
		$user = array(
		'fullname' => $_POST['fullname'],
		'email' => $_POST['email'],
		'birthday' => $_POST['bday'],
		'phone' => $_POST['phone'],
		'location' => $_POST['location'],
		'career' => $_POST['career']
		);
		
		$this->load->model('form_model');
		$this->form_model->insert_user($user);
		$this->load->view('thankyou');
	}
}
?>