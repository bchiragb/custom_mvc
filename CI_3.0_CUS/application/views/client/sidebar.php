<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
$sesacc1 = $this->session->userdata('login_esti_local');  
$usrx = $sesacc1['user_iad']; ?>

    <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar">
            <li class="aa0">
                <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr">
                    <div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div>
                </a>
                <ul id="dashboard_dr" class="collapse collapse-level-1">
                    <li class="bb1"><a class="active-page" href="<?php echo base_url('dashboard/'); ?>">All Compare Data</a></li>
                    <li class="bb2"><a class="active-page" href="<?php echo base_url('allesti/'); ?>">All Data</a></li>
                </ul>
            </li>
            <li><hr class="light-grey-hr mb-10"/></li>
            <li class="aa1">
                <a class="" href="javascript:void(0);" data-toggle="collapse" data-target="#si_fiesti">
                    <div class="pull-left"><i class="fa fa-bars mr-20"></i><span class="right-nav-text">Final Data</span></div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div>
                </a>
                <ul id="si_fiesti" class="collapse collapse-level-1">
                    <li class="bb1"><a class="" href="<?php echo base_url('finalesti/'); ?>">All Final Data</a></li>
                    <li class="bb2"><a class="" href="<?php echo base_url('finalesti/add/'); ?>">Add New</a></li>
                </ul>
            </li>
            <li><hr class="light-grey-hr mb-10"/></li>
            <li class="aa5">
                <a class="" href="javascript:void(0);" data-toggle="collapse" data-target="#si_pages">
                    <div class="pull-left"><i class="fa fa-user mr-20"></i><span class="right-nav-text">Profile</span></div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div>
                </a>
                <ul id="si_pages" class="collapse collapse-level-1">
                    <li class="bb2"><a class="" href="<?php echo base_url("logout/"); ?>">Log Out</a></li>
                </ul>
            </li>
            <li><hr class="light-grey-hr mb-10"/></li>
        </ul>
    </div>

            