<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'storefad.com', 
    'smtp_port' => 465,
    'smtp_user' => 'admin@storefad.com',
    'smtp_pass' => '9zJkm50-=nSY',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '1', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);



/*$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.example.com', 
    'smtp_port' => 465,
    'smtp_user' => 'no-reply@example.com',
    'smtp_pass' => '12345!',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'text', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);*/