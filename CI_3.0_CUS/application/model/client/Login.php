<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

  function __construct() {
    parent::__construct();
  }

  public function login(){  
    if(isset($this->session->userdata['login_esti_local'])) { redirect(base_url().'dashboard/', 'refresh'); }
    $data                = array();
    $data['title']       = 'Login - Admin Panel';
    $data['js']          = array();
    $data['jse']         = array();
    $data['djs']         = array();
    $data['css']         = array('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css', 'dist/css/style.css');
    $data['dcss']        = array(); 
    $this->load->view('client/header', $data);
    $this->load->view('client/login');

    $fdata  = array();
    $fdata['js']    = array(
      'vendors/bower_components/jquery/dist/jquery.min.js', 
      'vendors/bower_components/bootstrap/dist/js/bootstrap.min.js', 
      'vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js', 
      'dist/js/jquery.slimscroll.js', 
      'dist/js/init.js', 
      'custom.js'
    );
    $fdata['djs']   = array();
    $fdata['css']    = array('custom.css');
    $fdata['dcss']   = array();
    $this->load->view('client/footer', $fdata);
  }

  public function logout(){
    $sess_array = array('username' => 'guest' );
    $this->session->unset_userdata('login_esti_local', $sess_array);
    redirect(base_url(), 'refresh');
  }
}