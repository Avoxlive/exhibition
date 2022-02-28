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
    <?php include 'header-head.php';?>



    <section class="pricing">
        <div class="container">
            <div class="heading">
                <h2>Pricing</h2>
            </div>
            <div class="pricing-sec">
                <div class="price-one">
                    <div class="price-img">
                        <img src="<?php echo base_url(); ?>optimum/plugins/images/price1.png" alt="img1" class="img-fluid">
                    </div>
                    <h2>Prefect for one quick projects</h2>
                    <h3>$0</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
                </div>

                <div class="price-one">
                    <div class="price-img">
                        <img src="<?php echo base_url(); ?>optimum/plugins/images/price2.png" alt="img1" class="img-fluid">
                    </div>
                    <h2>For individuals and small teams</h2>
                    <h3>$10</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
                </div>

                <div class="price-one">
                    <div class="price-img">
                        <img src="<?php echo base_url(); ?>optimum/plugins/images/price3.png" alt="img1" class="img-fluid">
                    </div>
                    <h2>Prefect for one quick projects</h2>
                    <h3>$0</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
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

    <?php include 'js-ui.php'; ?>

</body>

</html>