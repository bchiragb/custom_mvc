<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    
        
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="mobile-only-brand pull-left">
            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <a href="<?php echo base_url(); ?>">
                        <img class="brand-img" src="<?php echo base_url("assets/logo.png"); ?>" alt="brand"/>
                        <span class="brand-text" style="vertical-align: top;">KGK</span>
                    </a>
                </div>
            </div>  
            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
            <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        </div>
        <div id="mobile_only_nav" class="mobile-only-nav pull-right">
            <ul class="nav navbar-right top-nav pull-right">
                <li class="dropdown auth-drp">
                    <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?php echo base_url("assets/client/dist/img/user1.png"); ?>" alt="user_auth" class="user-auth-img img-circle"/></a>
                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <!-- <li>
                            <a href="<?php //echo base_url("client/changepassword/"); ?>"><i class="zmdi zmdi-account"></i><span>Change Password</span></a>
                        </li>
                        <li class="divider"></li> -->
                        <li>
                            <a href="<?php echo base_url("logout/"); ?>"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>  
    </nav>

         