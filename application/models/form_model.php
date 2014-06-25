<!--Model for the new user form-->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_model extends CI_Model {
	
	public function insert_user($user)
	{
			
		    $fullname= $user['fullname'];
			$email= $user['email'];
			$birthday = $user['birthday'];
			$phone = $user['phone'];
			$location = $user['location'];
			$career = $user['career'];
			$comment=$user['comment'];
			
			$this->db->query("INSERT INTO users VALUES ('','$fullname', '$email','$birthday', '$phone', '$location', '$career','$comment')");
			
			
	}
	
} 
?>
	