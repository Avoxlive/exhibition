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
<div id="wrappers">

  <?php include 'header-blue.php';?>

<section class="banner-sec">

<div class="fill"  style="background-image:url('<?php echo base_url() ?>optimum/plugins/images/ex.png');">
<div class="container">
<div class="caption">
    <h2>VEDIO CONFERENCE</h2>
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt ut labore et dolore magna aliqua.
    </h3>
</div>
</div>
    </div>
    <!-- <img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid"> -->
</section>

<section class="about-avox">
    <div class="container">
        <div class="heading">
            <h2>AVOX<span>.LIVE</span></h2>
        </div>
        <div class="data">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt ut labore et dolore magna aliqua.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</h2>
        </div>
    </div>
</section>

<section class="key-feature" id="feature">
    <div class="container">
        <div class="heading">
        <h2>KEY <span>FEATURES</span></h2>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Moderator can mute individual participant</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Control the volume</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Chat with Moderator</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Schedule meetings</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Brand up the meeting experience</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Choose colors of your choice</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Display logos of your company</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Display banners during the meeting</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Invite only meetings</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
        <div class="key-feature-list">
            <div class="feature-list-image">
                <img src="<?php echo base_url() ?>optimum/plugins/images/feature1.png" alt="#">
            </div>
            <div class="feature-list-content">
            <h2>Allow attendance only on scheduled time</h2>
            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h3>
            </div>
        </div>
    </div>
</section>


<section class="product-pages" id="productpages">
        <div class="container">
            <div class="heading">
                <h2>PRODUCT <span>PAGES</span></h2>
            </div>

            <div class="product-block">
            <div class="owl-carousel owl-theme owl-loaded product-block-in">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                    <div class="owl-item">
                                        <div class="service-text">
                                            <a href="#"><img src="<?php echo base_url() ?>optimum/plugins/images/dashboard.webp" class="hvrbox-layer_bottom "></a>
                                            <h2>Dashboard page</h2>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="service-text">
                                            <a href="#"><img src="<?php echo base_url() ?>optimum/plugins/images/dashboard1.jpg" class="hvrbox-layer_bottom "></a>
                                            <h2>Dashboard page</h2>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="service-text">
                                            <a href="#"><img src="<?php echo base_url() ?>optimum/plugins/images/dashboard2.jpg" class="hvrbox-layer_bottom "></a>
                                            <h2>Dashboard page</h2>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="service-text">
                                            <a href="#"><img src="<?php echo base_url() ?>optimum/plugins/images/dashboard1.jpg" class="hvrbox-layer_bottom "></a>
                                            <h2>Dashboard page</h2>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</section>

<section class="testimonial-sec" id="customerstories">
        <div class="container">
                    <div class="testimonial-heading">
                        <h1>CUSTOMER <span>STORIES</span></h1>
                    </div>
        </div>

        <div class="container">
                    <div class="testimonial-content">
                        <div class="owl-carousel owl-theme owl-loaded testimonial-sec-in">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">

                                        <div class="destination-options">
                                            <div class="overlay">
                                                <div class="overlay-text">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <img src="<?php echo base_url() ?>optimum/plugins/images/13.jpg" class="img-fluid" />

                                            </div>
                                            <div class="avatar-txt">
                                                <h3>John smith</h3>
                                                <p>Customer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">

                                        <div class="destination-options">
                                            <div class="overlay">
                                                <div class="overlay-text">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <img src="<?php echo base_url() ?>optimum/plugins/images/13.jpg" class="img-fluid" />

                                            </div>
                                            <div class="avatar-txt">
                                                <h3>John smith</h3>
                                                <p>Customer
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="owl-item">

                                        <div class="destination-options">
                                            <div class="overlay">
                                                <div class="overlay-text">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <img src="<?php echo base_url() ?>optimum/plugins/images/13.jpg" class="img-fluid" />

                                            </div>
                                            <div class="avatar-txt">
                                                <h3>John smith</h3>
                                                <p>Customer
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="owl-item">
                                        <div class="destination-options">
                                            <div class="overlay">
                                                <div class="overlay-text">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim venia
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="avatar">
                                                <img src="<?php echo base_url() ?>optimum/plugins/images/13.jpg" class="img-fluid" />
                                            </div>
                                            <div class="avatar-txt">
                                                <h3>John smith</h3>
                                                <p>Customer
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>

    <section class="aboutus" id="aboutus">
        <div class="container">
            <div class="heading">
                <h2>ABOUT <span>US</span></h2>
            </div>
            <div class="aboutus-data">
                <h2>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</h2>
            </div>
        </div>
    </section>


    <section class="centered-box" id="contactus">
        <div class="container">
            <div class="heading">
                <h2>GET IN <span>TOUCH</span></h2>
            </div>
            <form method="post" role="form" action="<?php echo base_url(); ?>admin/contactus/add/" class="form-horizontal form-material">
<div class="centered-box-block">
            <div class="centered-box-content">
                <div class="box1">
                <div class="form-group">
                                    <label for="touch-name">Name</label><br>
                                    <input type="text" class="form-control" name="touch_name"  placeholder="Enter your full name">
                                </div>
                </div>
                <div class="box1">
                <div class="form-group">
                                    <label for="touch-email">Email address</label><br>
                                    <input type="email" class="form-control" name="touch_email"  placeholder="Enter your email">
                                </div>
                </div>
                <div class="box1">
                <div class="form-group">
                                    <label for="touch-phone">Phone number</label><br>
                                    <input type="number" class="form-control" name="touch_phone"  placeholder="Enter your phone">
                                </div>
                </div>
            </div>
            <div class="message">
            <div class="form-group">
                    <label for="message">Message</label><br>
                    <textarea class="form-control" name="touch_message"  placeholder="Enter your message" rows="3"></textarea>
                </div>
            </div>
            <div class="centered-submit">
            <button type="submit" class="btn btn-primary">SUBMIT</button>

            </div>
</div>
            </form>
        </div>
    </section>














    <!-- <section class="form-block block_bkg">
        <div class="container">
            <div  class="form-block-in">
        <div class="name">
            <h2>Subscribe our newsletter to get latest updates</h2>
            <h3>SIGN UP TO OUR NEWSLETTER</h3>
        </div>
        <div class="phone-numbar">
            <button><i class="fa fa-envelope-o" aria-hidden="true"></i> Your Email Address</button>
        </div>
        <div class="submit-form-button">
        <button>SUBMIT</button>
        </div>
        </div>
    </div>
    </section> -->

    <section class="footer-bottom background">
        <div class="container">
            <div class="footer-bottom-in">
                <div class="footer-bottom-in-first">
                    <h2>FOUNTAIN <span>OR DRAIN</span></h2>
                    <h3><a href="#">HOME</a> | <a href="<?php echo base_url(); ?>login#feature">KEY FEATURES</a> |
                    <a href="<?php echo base_url(); ?>login#productpages">PRODUCT PAGES</a> |
                    <a href="<?php echo base_url(); ?>login#customerstories">CUSTOMER STORIES</a> |
                    <a href="<?php echo base_url(); ?>login#aboutus">ABOUT US</a> |
                    <a href="<?php echo base_url(); ?>login#contactus">CONTACT US</a> |
                    TERMS & CONDITIONS | FAQs</h3>
                </div>
                <div class="footer-bottom-in-second">
                    <div class="footer-bottom-grid">
                        <div class="footer-content">
                           <h2> <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  +91 9912345678</a></h2>
                            <h2><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@fount.org</a></h2>
                        </div>
                        <div class="footer-content-mid">
                            <!-- <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> -->
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                        <div class="footer-content-left">
                        <h2><a href="#"><i class="fa fa-copyright" aria-hidden="true"></i>copyright 2021 Fountain or drain</a></h2>
                        <h2><a href="#">All Rights Reserved</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
   <?php include 'js-ui.php'; ?>
   <?php include 'js.php'; ?>
</body>

</html>