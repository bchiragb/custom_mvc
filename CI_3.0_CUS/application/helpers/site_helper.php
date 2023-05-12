<?php defined('BASEPATH') OR exit('No direct script access allowed');
//custom function listed that use in view pages

//view
if(!function_exists('view')) {
	function view($nm = ''){
		$CI =& get_instance();
		$CI->output->set_status_header(200);
		$CI->load->view($nm);
		echo $CI->output->get_output();
    }
}

//show memory both function work together - part 1
if(!function_exists('showmemory')) {
	function showmemory(){
		return convert(memory_get_usage(true));
	}
}

//memory usage - part 2
if(!function_exists('convert')) {
	function convert($size) {
	    $unit = array('B','KB','MB','GB','TB','PB');
	    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
	}
}

