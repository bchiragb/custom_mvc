<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Custom404 extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->helper('url');
	}
 
	public function index(){ 
		$this->output->set_status_header('404');
		//$data = array('title' => 'My Title',);
		//$this->load->view('error404', $data);
		echo "404---page <br>";
	}
}