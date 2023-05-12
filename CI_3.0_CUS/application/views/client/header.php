<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="refresh" content="300;url=<?php echo base_url("logout/"); ?>" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php echo $title; ?></title>
        <link rel="icon" href="<?php echo base_url("assets/favicon.png"); ?>" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400&display=swap" rel="stylesheet">
        <?php foreach ($css as $key => $value) { if(!empty($value)) { //ASSETS_PATH   CSS_PATH  JS_PATH ?>
        <link href="<?php echo ASSETS_PATH.'client/'.$value; ?>" rel="stylesheet">
        <?php } } foreach ($dcss as $key => $value) { if(!empty($value)) { ?>
        <link href="<?php echo $value; ?>" rel="stylesheet">
        <?php } } foreach ($js as $key => $value) { if(!empty($value)) { ?>
        <link href="<?php echo ASSETS_PATH.'client/'.$value; ?>" rel="stylesheet">
        <?php } } foreach ($djs as $key => $value) { if(!empty($value)) { ?>
            <link href="<?php echo 'client/'.$value; ?>" rel="stylesheet">
        <?php } } if(!empty($jse)) { ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <?php foreach ($jse as $key => $value) { ?>
            <script src="<?php echo JS_PATH.'client/'.$value; ?>"></script>
        <?php } ?>
        <![endif]--> <?php } ?>
    </head>
    <body>
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <div class="wrapper theme-1-active pimary-color-red slide-nav-togglex">    
            