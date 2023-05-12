<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Uexcel extends Public_Controller {

  function __construct() {
    parent::__construct();
  }

  public function index() {
    $data                = array();
    $data['title']       = 'Upload Excel - Admin Panel';
    $data['js']          = array();
    $data['jse']         = array();
    $data['djs']         = array();
    $data['css']         = array('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css', 'dist/css/style.css');
    $data['dcss']        = array();
    $this->load->view('client/header', $data);

    $this->load->view('client/navbar');
    $this->load->view('client/sidebar');
    $this->load->view('client/uexcel');
    
    $fdata  = array();
    $fdata['js']    = array(
      'vendors/bower_components/jquery/dist/jquery.min.js', 
      'vendors/bower_components/bootstrap/dist/js/bootstrap.min.js', 
      'vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',
      'dist/js/jquery.slimscroll.js', 
      'dist/js/dropdown-bootstrap-extended.js',
      'vendors/bower_components/owl.carousel/dist/owl.carousel.min.js',
      'vendors/bower_components/switchery/dist/switchery.min.js',
      'dist/js/init.js', 
      'custom.js');
    $fdata['djs']   = array();
    $fdata['css']    = array('custom.css');
    $fdata['dcss']   = array();
    $this->load->view('client/footer', $fdata);
  }

}