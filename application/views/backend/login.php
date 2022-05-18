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

<section class="banner-image">
    <img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid">
</section>
    <section class="lastest-news background">
        <div class="container">
            <div class="heading">
                <h2>heading</h2>
            </div>
<div class="lastest-news-in">
<div class="box1">
<div class="box1-image">
<img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid">
<div class="button-on-image">
    <!-- <h2>“One can talk to people and see them at the same time—so it is Video Conferencing”</h2> -->
    <button>view</button>
</div>
</div>
</div>
<div class="box2">
<div class="box-top">
<img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid">
<div class="button-on-image">
    <!-- <h2>nmnmn</h2> -->
    <button>view</button>
</div>
</div>
<div class="box-bottom">
<img src="<?php echo base_url() ?>optimum/plugins/images/ex.png" alt="img1" class="img-fluid">
<div class="button-on-image">
    <!-- <h2>nmnmn</h2> -->
    <button>view</button>
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
        <div class="name">Lorem Ipsum simply text Technologies pvt ltd</div>
        <div class="phone-numbar">
            <button>phone number</button>
        </div>
        <div class="submit-form-button">
        <button>Submit</button>
        </div>
        </div>
    </div>
    </section>

    <section class="footer-bottom background">
        <div class="container">
            <div class="footer-bottom-in">
                <div class="footer-bottom-in-first">
                    <h2>Lorem Ipsum simply text <span>Technologies pvt ltd</span></h2>
                    <!-- <h3>njjllk</h3> -->
                </div>
                <div class="footer-bottom-in-second">
                    <div class="footer-bottom-grid">
                        <div class="footer-content">
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  +91 9912345678</a><br>
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>loremipsum@gmail.com</a><br>
                        </div>
                        <div class="footer-content-mid">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="footer-content-left">
                            <a href="#">loremtechnologiespvtltd@gmail.com</a><br>
                            <a href="#">abcd | lorem | ipsum </a><br>
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