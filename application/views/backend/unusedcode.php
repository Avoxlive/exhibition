
<!--
<section id="wrapper" class="login-register">
        <div class="box-width">
            <div class="box-wrapper">
                <div class="box-in">

                    <h4 class="box-title m-b-20" align="center">Sign in
                        <img src="<?php echo base_url() ?>uploads/logo.png" class="img-circle" width="70" height="70" />
                    </h4>
                    <h5 align="center"><a href=""><?php echo $system_name;?></a></h5>

                    <form method="post" role="form" id="loginform" class="form-horizontal form-material"
                        action="<?php echo base_url();?>login/validate_login">

                        <div class="form-group ">
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
                                    class="fa fa-lock m-r-5"></i> <?php echo get_phrase('forgot_password?');?></a>
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
                                        style="color:white"> <i class="fa fa-key"></i>&nbsp;
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
        </div>
    </section> -->

<!-- <section class="hero-bottom">
<h5>Great meeting are just the <span>beginning</span></h5>
<img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-02.png" href="#" alt="image1" class="img-fluid image2">

<div class="bottom-button">
    <a href="<?php echo base_url(); ?>home/signup"><button type="submit" class="btn btn-primary">Host an Event</button></a>
        <button type="submit" class="btn btn-info">Join an Event</button>
</div>
    </section> -->

    <!-- <hr> -->

   <section class="why-avox background">
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
                   <h2>The host can do branding for their brands, they can use banners and posters.</h2>
               </div>
           </div>

       </div>
   </section>

   <section class="avox-feature background" id="feature">
       <div class="container">
           <div class="header">
           <h2>Features</h2>
           </div>
           <table class="feature-table">
  <tr>
    <th>Company</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td><i class="fa fa-check-circle-o" aria-hidden="true"></i></td>
  </tr>
   </table>
           <div class="feature-box">
               <div class="feature-box-content">
               <h2>???One can talk to people and see them at the same time???so it is <span>Video Conferencing???</span></h2>
               <h3>Engage a global audience in exhibitions/events like never before.</h3>
                <!-- <img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image2"> -->
                </div>
                <div class="feature-box-image">
                    <img src="<?php echo base_url(); ?>optimum/plugins/images/feature1.jpeg" href="#" alt="image1" class="img-fluid image1">
                </div>
           </div>
           <div class="feature-box">
               <div class="feature-box-image2">
                   <img src="<?php echo base_url(); ?>optimum/plugins/images/feature2.jpeg" href="#" alt="image1" class="img-fluid">
               </div>
               <div class="feature-box-content">
              <h2>???One can talk to people and see them at the same time???so it is <span>Video Conferencing???</span></h2>
              <h3>Engage a global audience in exhibitions/events like never before.</h3>
              <!-- <img src="<?php echo base_url();?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image-second"> -->
               </div>
           </div>
           <div class="feature-box">
               <div class="feature-box-content">
              <h2>???One can talk to people and see them at the same time???so it is <span>Video Conferencing???</span></h2>
              <h3>Engage a global audience in exhibitions/events like never before.</h3>
              <!-- <img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image2"> -->
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
                    <div class="owl-carousel owl-theme owl-loaded testimonial-client-details">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                    <div class="owl-item" style="width: 140.563px!important; margin-right: 20px;">
                                        <div class="service-text">
                                        <a href="#"><img src="<?php echo base_url(); ?>optimum/plugins/images/13.jpg" class="hvrbox-layer_bottom img-rounded"></a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 140.563px!important; margin-right: 20px;">
                                        <div class="service-text">
                                        <a href="#"><img src="<?php echo base_url(); ?>optimum/plugins/images/13.jpg" class="hvrbox-layer_bottom img-rounded"></a>
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


<section class="get-in-touch background" id="contactus">
    <div class="container">
        <div class="heading">
            <h2>Get in touch</h2>
            <!-- <img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image2"> -->
        </div>
        <div class="contact-us">
            <div class="contact-us-form">
                <h2>You are welcome to write to us with your inputs, suggestions, proposals etc. We value every input.</h2>
                <form method="post" role="form" action="<?php echo base_url(); ?>admin/contactus/add/" class="form-horizontal form-material">
                    <!-- <form> -->
                    <div class="contact-fill">
                    <?php
                        // echo form_open(base_url() . 'admin/contactus/add/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="touch-name">Name</label><br>
                                    <input type="text" class="form-control" name="touch_name"  placeholder="Enter your full name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="touch-email">Email address</label><br>
                                    <input type="email" class="form-control" name="touch_email"  placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="touch-phone">Phone number</label><br>
                                    <input type="number" class="form-control" name="touch_phone"  placeholder="Enter your phone">
                                </div>
                            </div>
                        </div><br>
                <div class="form-group">
                    <label for="message">Message</label><br>
                    <textarea class="form-control" name="touch_message"  placeholder="Enter your message" rows="3"></textarea>
                </div>
                <div class="submit-icon">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php
                // echo form_close();?>
                    </div>
                    </div>
                </form>

            </div>
            <!-- <div class="contact-us-image">
                <img src="<?php echo base_url(); ?>optimum/plugins/images/contact-img.jpeg" alt="image" class="img-fluid">
            </div> -->
        </div>
    </div>

</section>

<!--
<section class="touch-details">
<div class="container">
<div class="heading">
            <h2>Get in touch</h2>
            <img src="<?php echo base_url(); ?>optimum/plugins/images/shapes-01.png" href="#" alt="image1" class="img-fluid image2">
        </div>
        <div class="contact-us">
        <form>
            <div class="form-data">
                <div class="form-group">
                    <label for="touch-name">Name</label><br>
                    <input type="text" class="form-control" id="touch-name"  placeholder="Enter your full name">
                </div>
            </div>
            <div class="form-data">
                            <div class="form-group">
                                <label for="touch-email">Email address</label><br>
                                <input type="email" class="form-control" id="touch-email"  placeholder="Enter your email">
                            </div>
            </div>
            <div class="form-data">
                            <div class="form-group">
                                <label for="touch-phone">Phone number</label><br>
                                <input type="email" class="form-control" id="touch-phone"  placeholder="Enter your email">
                            </div>
            </div>
                <div class="form-group">
                    <label for="message">Message</label><br>
                    <textarea class="form-control" id="message"  placeholder="Enter your message" rows="3"></textarea>
                </div>
                <div class="submit-icon">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </form>
        </div>
</div>
</section> -->

<section class="bottom background">
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
                        <a href="#">Home</a><br>
                        <a href="<?php echo base_url(); ?>login#feature">Features</a><br>
                        <!-- <a href="#">Pricing</a><br> -->
                        <a href="<?php echo base_url(); ?>login#contactus" id="contactus">Contact us</a>
                    </div>
                    <div>
                        <h2>Social media</h2>
                        <a href="#">Linked In</a><br>
                        <a href="#">Twitter</a><br>
                        <a href="#">Instagram</a>
                    </div>
                    <div>
                        <h2>Use Cases</h2>
                        <a href="#">Conferences</a><br>
                        <a href="#">Events</a>
                    </div>
                </div>
            </div>
            <div class="footer-right">
                <h2>AVOX.LIVE</h2>
                <h3>???Focus on the core problem your business solves and put out lots of content and enthusiasm and ideas about how to solve that problem.???</h3>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-play" aria-hidden="true"></i> Play Demo</button>
                </div>
                <h4><i class="fa fa-creative-commons" aria-hidden="true"></i>2020. All Rights Reserved by AVOX.LIVE</h4>
            </div>
        </div>
    </div>
</section>

<section class="lastest-news background">
        <div class="container">
            <div class="heading">
                <h2>LATEST <span>NEWS</span></h2>
            </div>
<div class="lastest-news-in">
<div class="box1">
<div class="box1-image">
<img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid">
<div class="button-on-image">
    <button>JUL 12, 2022</button>
    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt</h2>
</div>
</div>
</div>
<div class="box2">
<div class="box-top">
<img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid">
<div class="button-on-image">
    <button>JUL 12, 2022</button>
    <h2>Lorem ipsum dolor sit amet,</h2>

</div>
</div>
<div class="box-bottom">
<img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid">
<div class="button-on-image">
    <h2>nmnmn</h2>
    <button>JUL 12, 2022</button>
    <h2>Lorem ipsum dolor sit amet,</h2>

</div>
</div>
</div>
</div>
</div>
    </section>

    <section class="block-sec background">
        <div class="container">
           <div class="block-sec-in">
               <div class="block-sec-left">
               <?php include 'block_sec_left_in.php';?>
               </div>
               <div class="block-sec-right">
               <?php include 'block_sec_right_in.php';?>
               </div>
           </div>
        </div>
    </section>