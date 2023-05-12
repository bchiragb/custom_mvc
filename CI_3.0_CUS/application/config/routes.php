<?php defined('BASEPATH') OR exit('No direct script access allowed');

//======================================================================= client side
$route['default_controller'] = 'client/login/login'; 
$route['login'] = 'client/login/login';
$route['client/login'] = 'client/login/login';
$route['logout'] = 'client/login/logout';
$route['dashboard'] = 'client/dashboard';
$route['dashboard/view/:num'] = 'client/dashboard/view/$1';

$route['finalesti'] = 'client/finalesti/index';
$route['finalesti/:num'] = 'client/finalesti/index/$1';
$route['finalesti/add'] = 'client/finalesti/add';
$route['finalesti/edit/:num'] = 'client/finalesti/edit/$1';

$route['uexcel'] = 'client/Uexcel/index';
$route['allesti'] = 'client/allesti/index';

//======================================================================= 404 page
$route['404_override'] = 'custom404';
$route['translate_uri_dashes'] = TRUE;

