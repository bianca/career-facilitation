class Loginmodel extends CI_Model {

    
    function auth_info()
    {
        $token = $_POST['token'];
		require $this->config->load('janrain_js');
 
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'https://rpxnow.com/api/v2/auth_info');
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS,
			array('token' =>  $token,
				  'apiKey' => $apiKey));
		curl_setopt($curl, CURLOPT_FAILONERROR, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$resultString = curl_exec($curl);
    }

    function check_user()
    {
        if (!$profileString){
        echo '<p>Curl error: ' . curl_error($curl);
        echo '<p>HTTP code: ' . curl_errno($curl);
			} 	
		else 
		{
        $profile = json_decode($profileString);
			if (property_exists($profile, 'err')) {
				echo '<p>Engage error: ' . $profile->err->msg;
			 } 
			else {
				session_start();
					if (property_exists($profile->profile, 'displayName')) {
						$_SESSION['userName'] = $profile->profile->displayName;
						} 
					else {
						$_SESSION['userName'] = '(Anonymous Coward)';
						}
				echo '<p>Hi there ' . $_SESSION['userName'] . '!';
				}
 
		}	
		curl_close($curl);
	
    }

}