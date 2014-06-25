<?php class Form extends CI_Controller
{
	
	function index()
	{ 
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		
		$this->load->model('mysqldb');
		
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('birthday', 'Birthday', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
	    $this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('position', 'Position', 'required');
		
			if ($this->form_validation->run()== FALSE)
			{
				$this->load->view('myform'); //if it is not valid, it sends back to form page
			}
			else
			{
			 
			 $insert_string = array(    
			 
				'id'       => NULL,
				'fullname' => $this->input->post('fullname'),
				'birthday'     => $this->input->post('birthday'),
				'email'   => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'city'     => $this->input->post('city'),
				'position' => $this->input->post('position'),
				
				);
				
				
				$insert = $this->mysqldb->insert($insert_string); //$insert_string is an array that needs to be sent to mysqldb and be saved in user, the table. 
				
				$this->load->view('formsuccess');
				
				}
				
			
	}
	
}
?>		