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







<section id="wrapper" class="login-register">

  <?php include 'header-head.php';?>

        <div class="box-width">
            <div class="box-wrapper">
                <div class="box-in">

                    <h4 class="box-title m-b-20" align="center">Sign in
                        <!-- <img src="<?php echo base_url() ?>uploads/logo.png" class="img-circle" width="70" height="70" /> -->
                    </h4>
                    <h5 align="center"><a href=""><?php echo $system_name;?></a></h5>

                    <form method="post" role="form" id="loginform" class="form-horizontal form-material"
                        action="<?php echo base_url();?>login/validate_login">

                        <div class="form-group ">
                            <div class="col-xs-12">
                    <label for="name">Name</label><br>

                                <input class="form-control" type="email" name="email" required=""
                                placeholder="<?php echo get_phrase('email');?>" style="width:100%">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                    <label for="name">Password</label><br>

                                <input class="form-control" type="password" name="password" required=""
                                    placeholder="<?php echo get_phrase('password');?>" style="width:100%">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <!-- <div class="checkbox checkbox-primary pull-left">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> <?php echo get_phrase('remember_me');?> </label>

                                </div> -->
                                &nbsp;<a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                                        class="fa fa-lock m-r-5"></i> <?php echo get_phrase('forgot_password?');?></a>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">

                                <button
                                    class="btn btn-infoo btn-rounded btn-sm btn-block text-uppercase waves-effect waves-light"
                                    type="submit" style="width:50%; color:white">
                                    <?php echo get_phrase('Sign_in');?>
                                </button>

                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                <div align="center"><img id="install_progress"
                                        src="<?php echo base_url() ?>assets/images/preloader.gif"
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
        </div>







        <!-- <div class="login-wrapper">




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
                                        style="margin-left: 20px; display: none" /></div>

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



    </section>

    <section class="hero-bottom">
<h5>Great meeting are just the <span>beginning</span></h5>
<img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-02.png" href="#" alt="image1" class="img-fluid image2">

<div class="bottom-button">

<a href="<?php echo base_url(); ?>home/signup"><button type="submit" class="btn btn-primary">Host an Event</button></a>
                <button type="submit" class="btn btn-info">Join an Event</button>
</div>
    </section>

    <hr>

   <section class="why-avox">
       <div class="container">
       <div class="heading">
<h2>Why</h2>
<h2>AVOX.LIVE</h2>
       </div>
           <div class="why-avox-block">
               <div class="avox-block-in">
                   <div class="avox-block-img">
                   <img src="<?php echo base_url(); ?>optimum/plugins/images/img1.png" href="#" alt="image1">
                   </div>

                   <h2>The host can do branding for their brands, they can use banners and posters.</h2>
               </div>

               <div class="avox-block-in">
                   <div class="avox-block-img">
                   <img src="<?php echo base_url(); ?>optimum/plugins/images/img2.png" href="#" alt="image1">
                   </div>

                   <h2>The host can do branding for their brands, they can use banners and posters. </h2>
               </div>
               <div class="avox-block-in">
                   <div class="avox-block-img">
                   <img src="<?php echo base_url(); ?>optimum/plugins/images/img3.png" href="#" alt="image1" class="img-fluid">
                   </div>

                   <h2>The host can do branding for their brands, they can use banners and posters. </h2>
               </div>
           </div>

       </div>
   </section>

   <section class="avox-feature" id="feature">
       <div class="container">
           <div class="header">
           <h2>Features</h2>
           </div>
           <div class="feature-box">
               <div class="feature-box-content">
              <h2>“One can talk to people and see them at the same time—so it is <span>Video Conferencing”</span></h2>
              <h3>Engage a global audience in exhibitions/events like never before.</h3>

              <img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image2">
               </div>


               <div class="feature-box-image">
                   <img src="<?php echo base_url(); ?>optimum/plugins/images/feature1.jpeg" href="#" alt="image1" class="img-fluid image1">
               </div>

           </div>

           <div class="feature-box">


               <div class="feature-box-image">
                   <img src="<?php echo base_url(); ?>optimum/plugins/images/feature2.jpeg" href="#" alt="image1" class="img-fluid">
               </div>
               <div class="feature-box-content">
              <h2>“One can talk to people and see them at the same time—so it is <span>Video Conferencing”</span></h2>
              <h3>Engage a global audience in exhibitions/events like never before.</h3>
              <img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image-second">

               </div>

           </div>

           <div class="feature-box">
               <div class="feature-box-content">
              <h2>“One can talk to people and see them at the same time—so it is <span>Video Conferencing”</span></h2>
              <h3>Engage a global audience in exhibitions/events like never before.</h3>
              <img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image2">

               </div>

               <div class="feature-box-image">
                   <img src="<?php echo base_url(); ?>optimum/plugins/images/feature3.jpeg" href="#" alt="image1" class="img-fluid">
               </div>

           </div>

       </div>

   </section>


   <!-- <section class="testimonial">
<div class="container">
    <div class="heading">
        <h2>Client Testimonial</h2>
    </div>
    <div class="testimonial-block">
        <div class="testimonial-content">
            <h2>What Our</h2>
            <h2>Customers</h2>
            <h2>Are Saying</h2>
        </div>
        <div class="client-testimonial">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </h2>
            <hr>
            <div class="client-details">

            <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    <div class="owl-carousel owl-theme owl-loaded testimonial">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">

                                    <div class="owl-item">
                                        <div class="service-text">
                                        <a href="#"><img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" class="hvrbox-layer_bottom img-rounded"></a>
                                        </div>

                                    </div>
                                    <div class="owl-item">
                                        <div class="service-text">
                                        <a href="#"><img src="#" class="hvrbox-layer_bottom img-rounded"></a>
                                        </div>

                                    </div>
                                    <div class="owl-item">
                                        <div class="service-text">
                                        <a href="#"><img src="#" class="hvrbox-layer_bottom img-rounded"></a>
                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
   </section> -->


<section class="get-in-touch" id="contactus">
    <div class="container">
        <div class="heading">
            <h2>Get in touch</h2>
            <img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image2">

        </div>
        <div class="contact-us">
            <div class="contact-us-form">
                <h2>Contact us</h2>
                            <form>
                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" id="name"  placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label><br>
                    <input type="email" class="form-control" id="email"  placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label><br>
                    <textarea class="form-control" id="message"  placeholder="Enter your message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <div class="contact-us-image">
                <img src="<?php echo base_url(); ?>optimum/plugins/images/contact-img.jpeg" alt="image" class="img-fluid">
            </div>
        </div>
    </div>

</section>


<section class="bottom">
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
                        <h3>Home</h3>
                        <h3>Features</h3>
                        <h3>Pricing</h3>
                        <h3>Contact us</h3>
                    </div>
                    <div>
                    <h2>Social media</h2>
                        <h3>Linked in</h3>
                        <h3>Twitter</h3>
                        <h3>Instagram</h3>
                    </div>
                    <div>
                    <h2>Use Cases</h2>
                        <h3>Conferences</h3>
                        <h3>Events</h3>
                    </div>
                </div>
            </div>
            <div class="footer-right">
               <h2>AVOX.LIVE</h2>
               <h3>“Focus on the core problem your business solves and put out lots of content and enthusiasm and ideas about how to solve that problem.”</h3>
               <div class="text-center">
               <button type="submit" class="btn btn-primary" ><i class="fa fa-play" aria-hidden="true"></i> Play Demo</button>
               </div>
               <h4><i class="fa fa-creative-commons" aria-hidden="true"></i> 2020. All Rights Reserved by AVOX.LIVE</h4>
            </div>
        </div>
    </div>

</section>

   <?php include 'js-ui.php'; ?>

</body>

</html>