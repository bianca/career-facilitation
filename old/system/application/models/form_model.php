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
			$this->db->query("INSERT INTO users VALUES ('','$fullname', '$email','$birthday', '$phone', '$location', '$career')");
			
		
			
			
	}
	
} 
?>
	($user['fullname'],$user['email'],$user['birthday'],$user['phone'],$user['location'],$user['career'])");