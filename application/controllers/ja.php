<!-- Janrain Controller -->

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Ja extends CI_Controller {
      
  public function index() {
    $this->config->load('janrain', true);
    //ob_start();
    $rpx_api_key = 'ad8ffb5c2d8afe2bf7ab1c76bac9e8ded07d6a32'; //$this->config->item('jainrain', 'apikey');
    $engage_pro = false;
    $token = $_POST['token'];
    var_dump($_POST);
    if(strlen($token) == 40) {//test the length of the token; it should be 40 characters
      $post_data = array('token'  => $token,
                         'apiKey' => $rpx_api_key,
                         'format' => 'json',
                         'extended' => 'true'); //Extended is not available to Basic.
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
        // throw error
      } else {
        var_dump($result);
      }
      curl_close($curl);

      $auth_info = json_decode($result, true);
      if ($auth_info['stat'] == 'ok') {
        //great, figure out whether this person is in the db
        $this->load->database();
        $r = $this->db->get_where('users', array("linkedin_url" => $auth_info['profile']['identifier']));
        if ($r->num_rows() == 0) {
        // What we get from linkedin:
        /*
          {
          "stat":"ok",
          "profile":{ 
            "providerName":"LinkedIn",
            "identifier":"http:\/\/www.linkedin.com\/profile?viewProfile=HRgLPzOjjg",
            "preferredUsername":"Bianca Sayan",
            "displayName":"Bianca Sayan",
            "name":{
              "formatted":"Bianca Sayan",
              "givenName":"Bianca",
              "familyName":"Sayan"
              },
            "url":"http:\/\/www.biancasayan.com",
            "photo":"http:\/\/m.c.lnkd.licdn.com\/mpr\/mprx\/0_in1UQZP1fI1s1pEZ3cGkQRzrfa3clxsZ3BFXQR1hrIz6mRS47KiBHUba38Td-ZUNGvA5WyTR5VAZ",
            "providerSpecifier":"linkedin"
          }
        } 
        */
          $values = array(
            'first_name' => $auth_info['profile']['name']['givenName'],
            'last_name' => $auth_info['profile']['name']['familyName'],
            'photo_url' => $auth_info['profile']['photo'],
            'linkedin_url' => $auth_info['profile']['identifier']
          );
          $this->db->insert("users", $values);

        } else {
          // Log this person in
          // if no referrer, bring to dashboard
          $this->load->helper('url');
          redirect('/dashboard');
        }
      } else {

        // throw error
      }
    }else{
      // Gracefully handle the missing or malformed token.  Hook this into your native error handling system.
      echo 'Authentication canceled.';
    }
    //$debug_out = ob_get_contents();
    //ob_end_clean();
  }

    public function getProfile($token) {
    $this->config->load('janrain', true);
    //ob_start();
    $rpx_api_key = $this->config->item('jainrain', 'apikey');
    $engage_pro = false;
    $token = $_POST['token'];
    if(strlen($token) == 40) {//test the length of the token; it should be 40 characters
      $post_data = array('token'  => $token,
                         'apiKey' => $rpx_api_key,
                         'format' => 'json',
                         'extended' => 'true'); //Extended is not available to Basic.
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
        // throw error
      } else {
        var_dump($result);
      }
      curl_close($curl);

      $auth_info = json_decode($result, true);
      if ($auth_info['stat'] == 'ok') {
        //great, figure out whether this person is in the db
        $this->load->database();
        $r = $this->db->get_where('users', array("linkedin_url" => $auth_info['profile']['identifier']));
        if ($r->num_rows() == 0) {
        // What we get from linkedin:
        /*
          {
          "stat":"ok",
          "profile":{ 
            "providerName":"LinkedIn",
            "identifier":"http:\/\/www.linkedin.com\/profile?viewProfile=HRgLPzOjjg",
            "preferredUsername":"Bianca Sayan",
            "displayName":"Bianca Sayan",
            "name":{
              "formatted":"Bianca Sayan",
              "givenName":"Bianca",
              "familyName":"Sayan"
              },
            "url":"http:\/\/www.biancasayan.com",
            "photo":"http:\/\/m.c.lnkd.licdn.com\/mpr\/mprx\/0_in1UQZP1fI1s1pEZ3cGkQRzrfa3clxsZ3BFXQR1hrIz6mRS47KiBHUba38Td-ZUNGvA5WyTR5VAZ",
            "providerSpecifier":"linkedin"
          }
        } 
        */
          $values = array(
            'first_name' => $auth_info['profile']['name']['givenName'],
            'last_name' => $auth_info['profile']['name']['familyName'],
            'photo_url' => $auth_info['profile']['photo'],
            'linkedin_url' => $auth_info['profile']['identifier']
          );
          //$this->db->insert("users", $values);

        } else {
          // Log this person in
          // if no referrer, bring to dashboard
          $this->load->helper('url');
          redirect('/dashboard');
        }
      } else {

        // throw error
      }
    }else{
      // Gracefully handle the missing or malformed token.  Hook this into your native error handling system.
      echo 'Authentication canceled.';
    }
    //$debug_out = ob_get_contents();
    //ob_end_clean();
  }
}
