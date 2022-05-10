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



    <!-- <section class="get-in-touch">
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
</section> -->


<!-- <section class="signup">
    <div class="container">
        <div class="signup-sec">
            <div class="signup-left">
        <div class="signup-left-in">

                <div class="pricing-sec">
                    <div class="pricing-img">
                        <img src="<?php echo base_url();?>optimum/plugins/images/price1.png" alt="image1" class="img-fluid">
                    </div>
                    <h2>Prefect for one quick projects</h2>
                    <h3>$0</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
                </div>
                <div class="pricing-sec">
                    <div class="pricing-img">
                        <img src="<?php echo base_url();?>optimum/plugins/images/price1.png" alt="image1" class="img-fluid">
                    </div>
                    <h2>Prefect for one quick projects</h2>
                    <h3>$0</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
                </div>
                <div class="pricing-sec">
                    <div class="pricing-img">
                        <img src="<?php echo base_url(); ?>optimum/plugins/images/price1.png" alt="image1" class="img-fluid">
                    </div>
                    <h2>Prefect for one quick projects</h2>
                    <h3>$0</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
                </div>
            </div>
            <div class="pricing-content">
    <h2>With the price of life these days, you've got to get everything for free you can.</h2>
    <ul>
        <li>The host can do branding for their brands, they can use banners and posters. </li>
        <li>The host can customize the color theme of their brand.</li>
        <li>The host and guest have the chat support.</li>
    </ul>
</div>
            </div>
            <div class="signup-right">
sds
            </div>
        </div>
    </div>
</section> -->

<section class="signup-sec">
    <div class="container">
        <div class="box1">
        <div class="box-left">
        <div class="boxes-three">
        <div class="pricing-sec">
                    <div class="pricing-img">
                        <img src="<?php echo base_url(); ?>optimum/plugins/images/price1.png" alt="image1" class="img-fluid">
                        <div class="text-on-image">BASIC</div>
                    </div>
                    <h2>Prefect for one quick projects</h2>
                    <h3>$0</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
                </div>
                <div class="pricing-sec">
                    <div class="pricing-img">
                        <img src="<?php echo base_url(); ?>optimum/plugins/images/price2.png" alt="image1" class="img-fluid">
                        <div class="text-on-image">MEDIUM</div>
                    </div>
                    <h2>Prefect for one quick projects</h2>
                    <h3>$0</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
                </div>
                <div class="pricing-sec">
                    <div class="pricing-img">
                        <img src="<?php echo base_url(); ?>optimum/plugins/images/price3.png" alt="image1" class="img-fluid">
                        <div class="text-on-image">ADVANCED</div>
                    </div>
                    <h2>Prefect for one quick projects</h2>
                    <h3>$0</h3>
                    <div class="btn-center">
                    <button class="btn btn-primary">Buy now</button>
                    </div>
                </div>
        </div>
        <div class="box-content">
        <h2>With the price of life these days, you've got to get everything for free you can.</h2>
    <ul>
        <li>The host can do branding for their brands, they can use banners and posters. </li>
        <li>The host can customize the color theme of their brand.</li>
        <li>The host and guest have the chat support.</li>
    </ul>
        </div>
        </div>
        <div class="box-right">
        <div class="sign-up-form">
                <h2>Sign up</h2>
                            <form method="post" role="form" action="<?php echo base_url(); ?>admin/signup/add/" class="form-horizontal form-material">
                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" name="name"  placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label><br>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="company">Company name</label><br>
                    <input type="text" class="form-control" name="company" placeholder="Enter your company name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label><br>
                    <input type="number" class="form-control" name="phone"  placeholder="Enter your phone number">
                </div>
                <!-- <div class="form-group">
                    <label for="host">select as a host</label><br>
                    <input type="text" class="form-control" name="host"  placeholder="--select--">
                </div> -->

                <div class="form-group">
                <label for="host">select as a host</label><br>
                    	<div class="col-sm-12">
							<select name="exhibitor_id" class="form-control select2" style="width:100%"id="exhibitor_id" onchange="return get_group_sub_groups(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php
								$classes = $this->crud_model->get_exhibitors(); foreach($classes as $row):?>
                            		<option value="<?php echo $row['exhibitor_id'];?>"><?php echo $row['name'];?></option>
                                <?php endforeach; ?>
                          </select>
						</div>
					</div>
                <!-- <div class="form-group">
                    <label for="price">select the price</label><br>
                    <input type="price" class="form-control" name="price"  placeholder="--select--">
                </div> -->

                <div class="form-group">
                <label for="price">select the price</label><br>
                    <div class="col-sm-12">
		                <select name="price" class="form-control">
		                            <option value=""><?php echo get_phrase('select_price');?></option>
                                    <option value="1000">1000</option>
                                    <option value="2000">2000</option>
                        </select>
			            </div>
					</div>

                <!-- <div class="form-group">
                    <label for="message">Message</label><br>
                    <textarea class="form-control" id="message"  placeholder="Enter your message" rows="3"></textarea>
                </div> -->
                <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
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
                        <a href="#">Home</a><br>
                        <a href="<?php echo base_url(); ?>login#feature">Features</a><br>
                        <!-- <a>Pricing</a><br> -->
                        <a href="<?php echo base_url(); ?>login#contactus">Contact us</a>
                    </div>
                    <div>
                    <h2>Social media</h2>
                        <a href="#">Linked in</a><br>
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