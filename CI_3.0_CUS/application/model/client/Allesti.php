<?php defined('BASEPATH') OR exit('No direct script access allowed');

class allesti extends Public_Controller {

  function __construct() {
    parent::__construct();
  }

  public function index() {
    $data                = array();
    $data['title']       = 'All Estimation - Admin Panel';
    $data['js']          = array();
    $data['jse']         = array();
    $data['djs']         = array();
    $data['css']         = array(
      'vendors/bower_components/datatables/media/css/jquery.dataTables.min.css', 
      'vendors/bower_components/sweetalert/dist/sweetalert.css',
      'dist/css/style.css');
    $data['dcss']        = array();
    $this->load->view('client/header', $data);

    $this->load->view('client/navbar');
    $this->load->view('client/sidebar');
    $this->load->view('client/allestim');
    
    $fdata  = array();
    $fdata['js'] = array(
      'vendors/bower_components/jquery/dist/jquery.min.js', 
      'vendors/bower_components/bootstrap/dist/js/bootstrap.min.js', 
      'dist/js/jquery.slimscroll.js', 
      'vendors/bower_components/datatables/media/js/jquery.dataTables.min.js', 
      'vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js',
      'vendors/bower_components/jszip/dist/jszip.min.js',
      'vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js',
      'dist/js/dataTables-data.js',
      'vendors/bower_components/owl.carousel/dist/owl.carousel.min.js',
      'vendors/bower_components/sweetalert/dist/sweetalert.min.js',
      'dist/js/sweetalert-data.js',
      'dist/js/init.js', 
      'custom.js',
      'custom5.js');
    $fdata['djs']   = array();
    $fdata['css']    = array('custom.css');
    $fdata['dcss']   = array();
    $this->load->view('client/footer', $fdata);
  }

}