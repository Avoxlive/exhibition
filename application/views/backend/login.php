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
    <h2>FOUNTAIN OR DRAIN</h2>
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, incididunt ut labore et dolore magna aliqua.
    </h3>
</div>
</div>
    </div>
    <!-- <img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid"> -->
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
    <!-- <h2>nmnmn</h2> -->
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

    <section class="form-block">
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
    </section>

    <section class="footer-bottom background">
        <div class="container">
            <div class="footer-bottom-in">
                <div class="footer-bottom-in-first">
                    <h2>FOUNTAIN <span>OR DRAIN</span></h2>
                    <h3>Home | About | Newsletter | Feature | Contact Us | Terms and conditions | FAQs</h3>
                </div>
                <div class="footer-bottom-in-second">
                    <div class="footer-bottom-grid">
                        <div class="footer-content">
                           <h2> <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  +91 9912345678</a></h2>
                            <h2><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@fountainordrain.org</a></h2>
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
                           <h2> <a href="#"><i class="fa fa-copyright" aria-hidden="true"></i> copyright 2021 Fountain or drain</a></h2>
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