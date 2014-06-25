<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Janrain extends CI_Model {
	
	public function getUserInfo($token) {
		$this->config->load('janrain', true);
	    ob_start();
	    $rpx_api_key = 'ad8ffb5c2d8afe2bf7ab1c76bac9e8ded07d6a32';
	    $engage_pro = false;
	    if(strlen($token) == 40) {//test the length of the token; it should be 40 characters
	      $post_data = array('token'  => $token,
	                         'apiKey' => $rpx_api_key,
	                         'format' => 'json',
	                         'extended' => 'false'); //Extended is not available to Basic.
	      $curl = curl_init();
	      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	      curl_setopt($curl, CURLOPT_URL, 'https://rpxnow.com/api/v2/auth_info');
	      curl_setopt($curl, CURLOPT_POST, true);
	      curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
	      curl_setopt($curl, CURLOPT_HEADER, false);
	      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	      curl_setopt($curl, CURLOPT_FAILONERROR, true);
	      $result = curl_exec($curl);
	      if ($result == false){
	        return false;
	      } 
	      curl_close($curl);

	      $auth_info = json_decode($result, true);
	      $debug_out = ob_get_contents();
			ob_end_clean();
	      if ($auth_info['stat'] == 'ok') {
		        /*
					{
						"stat":"ok",
						"profile":
						{
							"providerName":"LinkedIn",
							"identifier":"http:\/\/www.linkedin.com\/profile?viewProfile=HRgLPzOjjg",
							"verifiedEmail":"bianca.sayan@gmail.com",
							"preferredUsername":"Bianca Sayan",
							"displayName":"Bianca Sayan",
							"name":{
								"formatted":"Bianca Sayan",
								"givenName":"Bianca",
								"familyName":"Sayan"
							},
							"email":"bianca.sayan@gmail.com",
							"url":"http:\/\/www.biancasayan.com",
							"photo":"http:\/\/m.c.lnkd.licdn.com\/mpr\/mprx\/0_in1UQZP1fI1s1pEZ3cGkQRzrfa3clxsZ3BFXQR1hrIz6mRS47KiBHUba38Td-ZUNGvA5WyTR5VAZ",
							"providerSpecifier":"linkedin"}}
		        } 
		        */
	          $values = array(
	          	'email' => $auth_info['profile']['verifiedEmail'],
	            'first_name' => $auth_info['profile']['name']['givenName'],
	            'last_name' => $auth_info['profile']['name']['familyName'],
	            'photo_url' => $auth_info['profile']['photo'],
	            'linkedin_url' => $auth_info['profile']['identifier']
	          );

	          return $values;
	        } else {
	          return false;
	        }
	    } else {
	        return false;
	    }
	  	return false;
	}

}
