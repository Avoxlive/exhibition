<?php
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="We ddevelop creative software, eye catching software. We also train to become a creative thinker">
    <meta name="author" content="OPTIMUM LINKUP COMPUTERS">
    <link rel="icon" sizes="16x16" href="<?php echo base_url() ?>uploads/logo.png">
    <title><?php echo $system_title;?></title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css"
        rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>optimum/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>optimum/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>optimum/css/home.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>optimum/css/colors/megna.css" id="theme" rel="stylesheet">
    <link href="<?php echo base_url();?>optimum/plugins/bower_components/toast-master/css/jquery.toast.css"
        rel="stylesheet">

        	 <!--Owl carousel CSS -->
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>js/font-awesome-icon-picker/fontawesome-four-iconpicker.min.css" type="text/css" />

    <script src="<?php echo base_url(); ?>optimum/js/jquery-1.11.3.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>







<!-- <section class="hero-section">
    <div class="hero-image">
        <img src="#" alt="hero-img" class="img-fluid">

        <div class="hero-login-sec">
kkokoko
        </div>
    </div>
</section> -->



    <section id="wrapper" class="login-register">

    <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
      <div class="home-header-left">
<a class="home-logo" href="#">
<img src="<?php echo base_url(); ?>optimum/plugins/logo/logo-avox.png" alt="home-logo">

</a>

</div>
      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Sign up</a></li>

      </ul>
    </div>
  </div>
</nav>

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
                                    type="submit" style="width:40%; color:white">
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

                <button type="submit" class="btn btn-primary">Host an Event</button>
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

                   <h2>The host can do branding for their brands, they can use banners and posters. </h2>
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

   <section class="avox-feature">
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


   <section class="testimonial">
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
                                        <a href="#"><img src="#" class="hvrbox-layer_bottom img-rounded"></a>
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
   </section>


<section class="get-in-touch">
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
               <button type="submit" class="btn btn-primary text-center" ><i class="fa fa-play" aria-hidden="true"></i> Play Demo</button>
               <h4><i class="fa fa-creative-commons" aria-hidden="true"></i> 2020. All Rights Reserved by AVOX.LIVE</h4>
            </div>
        </div>
    </div>

</section>

    <script src="js/index.js"></script>


    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>optimum/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>optimum/bootstrap/dist/js/bootstrap.min.js"></script>
    <script
        src="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js">
    </script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js">
    </script>


    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>optimum/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>optimum/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>optimum/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/styleswitcher/jQuery.style.switcher.js">
    </script>

    <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/toast-master/js/jquery.toast.js"></script>

    <?php if (($this->session->flashdata('error_message')) !=''):?>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Error Message',
            text: '<?php echo $this->session->flashdata('error_message');?>',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'warning',
            hideAfter: '3500',
            stack: 6

        });

    });
    </script>

<script>
         $(document).ready(function() {
            $('.testimonial').owlCarousel({



            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 20,
            autoplaySpeed: 12000,
            fluidSpeed: true,
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            /*navText: [
              "<i class='fa fa-chevron-left'></i>",
              "<i class='fa fa-chevron-right'></i>"
              ], */
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
         });
</script>

<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/js/owl-carousel-min.js"></script>

    <?php endif;?>




</body>

</html>