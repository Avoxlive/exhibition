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

    <!-- <section class="avox-feature">
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

   </section> -->




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
               <button type="submit" class="btn btn-primary text-center" ><i class="fa fa-play" aria-hidden="true"></i> Play Demo</button>
               </div>
               <h4><i class="fa fa-creative-commons" aria-hidden="true"></i> 2020. All Rights Reserved by AVOX.LIVE</h4>
            </div>
        </div>
    </div>

</section>

    <?php include 'js-ui.php'; ?>

</body>

</html>