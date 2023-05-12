<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Base controllers for different purposes
 *  - Admin_Controller: for Admin Panel 
 *  - Public_Controller: for Frontend site
 */

//master
class MY_Controller extends CI_Controller {
  public function __construct(){
    parent::__construct();
      $this->load->database();
      $this->load->helper('url');
  } 
}

//front side -- public
class Public_Controller extends MY_Controller {
  function __construct() {
    parent::__construct();
    if(!$this->session->has_userdata('login_esti_local')){
        header('Location:'.base_url('login/'));
        exit;
    }
  }
}

