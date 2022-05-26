<?php
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <?php include 'css-ui.php'; ?>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <?php include 'header-blue.php';?>

    <section id="wrapper" class="login-register">
    <div class="box-width">
            <div class="box-wrapper">
                <div class="box-in">
                    <h4 class="box-title m-b-20" align="center">SIGN IN
                        <!-- <img src="<?php echo base_url()?>uploads/logo.png" class="img-circle" width="70" height="70" /> -->
                    </h4>
                    <h5 align="center"><a href=""><?php echo $system_name;?></a></h5>

                    <form method="post" role="form" id="loginform" class="form-horizontal form-material"
                        action="<?php echo base_url();?>login/validate_login">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="email">Name</label><br>
                                <input class="form-control" type="email" name="email" required=""
                                placeholder="<?php echo get_phrase('email');?>" style="width:100%">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="password">Password</label><br>
                                <input class="form-control" type="password" name="password" required=""
                                placeholder="<?php echo get_phrase('password');?>" style="width:100%">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                &nbsp;<a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                                    class="fa fa-lock m-r-5"></i><?php echo get_phrase('forgot_password?');?></a>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-infoo btn-rounded btn-sm btn-block text-uppercase waves-effect waves-light"
                                    type="submit" style="width:50%; color:white">
                                    <?php echo get_phrase('Sign_in');?>
                                </button>
                                <div align="center"><img id="install_progress" src="<?php echo base_url() ?>assets/images/preloader.gif"
                                style="margin-left: 20px; display: none" /></div>
                            </div>
                        </div>
                        <?php echo form_close();?>
                        <form method="post" role="form" id="recoverform" class="form-horizontal form-material"
                            action="<?php echo base_url();?>login/reset_password">
                            <input type="email" name="email" class="form-control"
                                placeholder="<?php echo get_phrase('email');?>" style="width:100%" required>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-6">
                                    <a href="<?php echo base_url();?>"><button
                                        class="btn btn-info btn-rounded btn-sm text-uppercase" type="button"
                                        style="color:white"><i
                                        class="fa fa-mail-reply-all"></i>&nbsp;<?php echo get_phrase('back_to_login');?></button></a>
                                    <button class="btn btn-success btn-rounded btn-sm text-uppercase" type="submit"
                                        style="color:white"><i class="fa fa-key"></i>&nbsp;
                                        <?php echo get_phrase('reset_password');?>
                                    </button>
                                </div>
                            </div>
                            <?php echo form_close();?>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </section>



<!--
<div class="login-wrapper">
            <div class="login-box-left login-sidebar login-box-left-img">
                <h2>WELCOME</h2>
                <div class="user">
                    <h3>
                        New User?
                    </h3>
                    <div class="text-center">
                        <button class="btn btn-infoo btn-rounded text-center" type="submit"
                            style="width:40%; color:white">
                            <?php echo get_phrase('Register');?>
                        </button>
                    </div>
                </div>
            </div>
            <div class="login-box login-sidebar">
                <div class="white-box-login p-40">
                    <h4 class="box-title m-b-20" align="center">
                        <img src="<?php echo base_url() ?>uploads/logo.png" class="img-circle" width="70" height="70" />
                    </h4>
                    <h5 align="center"><a href=""><?php echo $system_name;?></a></h5>
                    <form method="post" role="form" id="loginform" class="form-horizontal form-material"
                        action="<?php echo base_url();?>login/validate_login">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" required=""
                                    placeholder="<?php echo get_phrase('email');?>" style="width:100%">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required=""
                                    placeholder="<?php echo get_phrase('passord');?>" style="width:100%">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button
                                    class="btn btn-infoo btn-rounded btn-sm btn-block text-uppercase waves-effect waves-light"
                                    type="submit" style="width:40%; color:white">
                                    <?php echo get_phrase('log_in');?>
                                </button>
                                <div align="center"><img id="install_progress"
                                src="<?php echo base_url() ?>assets/images/preloader.gif"
                                style="margin-left: 20px; display: none"/></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-primary pull-left">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> <?php echo get_phrase('remember_me');?> </label>
                                </div>
                                &nbsp;<a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                                        class="fa fa-lock m-r-5"></i> <?php echo get_phrase('forgot_password?');?></a>
                            </div>
                        </div>
                        <?php echo form_close();?>
                        <form method="post" role="form" id="recoverform" class="form-horizontal form-material"
                            action="<?php echo base_url();?>login/reset_password">
                            <input type="email" name="email" class="form-control"
                                placeholder="<?php echo get_phrase('email');?>" style="width:100%" required>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-6">
                                    <a href="<?php echo base_url();?>"><button
                                            class="btn btn-info btn-rounded btn-sm text-uppercase" type="button"
                                            style="color:white"><i
                                                class="fa fa-mail-reply-all"></i>&nbsp;<?php echo get_phrase('back_to_login');?></button></a>
                                    <button class="btn btn-success btn-rounded btn-sm  text-uppercase" type="submit"
                                        style="color:white"><i
                                        class="fa fa-key"></i>&nbsp;<?php echo get_phrase('reset_password');?></button>
                                </div>
                            </div>
                            <?php echo form_close();?>
                        </form>
                    </form>
                </div>
            </div>
        </div> -->

<!-- <section class="bottom">
    <div class="container">
        <div class="footer-in">
            <div class="footer-left">
                <div class="footer-about">
                    <div class="logo">
                        <img src="<?php echo base_url(); ?>optimum/plugins/logo/logo-avox.png" alt="logo" class="img-fluid">
                    </div>
                    <div class="logo-content">
                        <h2>We are AVOX.LIVE provides a delightful video conferencing event platform with an immersive experience.</h2>
                    </div>
                </div>
                <div class="footer-link">
                    <div>
                        <h2>Useful links</h2>
                        <a>Home</a><br>
                        <a>Features</a><br>
                        <a>Pricing</a><br>
                        <a>Contact us</a>
                    </div>
                    <div>
                    <h2>Social media</h2>
                        <a>Linked in</a><br>
                        <a>Twitter</a><br>
                        <a>Instagram</a>
                    </div>
                    <div>
                    <h2>Use Cases</h2>
                    <a>Conferences</a><br>
                    <a>Events</a>
                    </div>
                </div>
            </div>
            <div class="footer-right">
               <h2>AVOX.LIVE</h2>
               <h3>“Focus on the core problem your business solves and put out lots of content and enthusiasm and ideas about how to solve that problem.”</h3>
               <div class="text-center">
               <button type="submit" class="btn btn-primary text-center"><i class="fa fa-play" aria-hidden="true"></i>Play Demo</button>
               </div>
               <h4><i class="fa fa-creative-commons" aria-hidden="true"></i> 2020. All Rights Reserved by AVOX.LIVE</h4>
            </div>
        </div>
    </div>
</section> -->

    <?php include 'js-ui.php'; ?>

</body>

</html>