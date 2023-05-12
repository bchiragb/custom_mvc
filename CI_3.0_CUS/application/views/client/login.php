<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
             
<header class="sp-header">
    <div class="sp-logo-wrap pull-left">
        <a href="<?php echo base_url("login/"); ?>">
            <img class="brand-img mr-10" src="<?php echo base_url("assets/logo.png"); ?>" alt="brand"/>
            <span class="brand-text">Proloop</span>
        </a>
    </div>
    <div class="clearfix"></div>
</header>

<div class="container-fluid">
    <div class="table-struct full-width full-height">
        <div class="table-cell vertical-align-middle auth-form-wrap">
            <div class="auth-form  ml-auto mr-auto no-float">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="mb-30">
                            <h3 class="text-center txt-dark mb-10">::: INVENTORY SYSTEM :::</h3>
                            <h6 class="text-center txt-dark mb-10">Welcome to Proloop (V.1)</h6>
                        </div>
                        <div class="form-wrap">
                            <form class="login-wrap" id="login_fo1" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label mb-10">EID</label>
                                    <input type="text" class="form-control" id="empid1" placeholder="Enter ID" name="empid" required>
                                </div>
                                <div class="form-group">
                                    <label class="pull-left control-label mb-10">Password</label>   
                                    <input type="password" class="form-control" id="emppas1" placeholder="Enter pwd" name="pass" required>
                                </div>
                                <div class="form-group text-center">
                                    <input class="btn btn-lg btn-login btn-block btn-info" type="button" id="loginbtn1" value="Login"/>
                                    <div class="errormsg"></div>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
           