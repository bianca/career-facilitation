<!--controller for the profile-->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Intro extends CI_Controller {
	
	public function introduction()
	{
		$this->load->view('intro');
	}
	
}
?>