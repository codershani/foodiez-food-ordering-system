<?php include('header.php'); ?>
        <div class="slider-area">
            <div class="slider-active owl-dot-style owl-carousel">
                <?php
				$banner_res=mysqli_query($con,"select * from banner where status='1' order by order_number");
				while($banner_row=mysqli_fetch_assoc($banner_res)){
				?>
				<div class="single-slider pt-150 pb-145 bg-img" style="background-image:url(<?php echo SITE_BANNER_IMAGE.$banner_row['image']?>);">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <h1 class="animated"><?php echo $banner_row['heading']?></h1>
                            <h3 class="animated"><?php echo $banner_row['sub_heading']?></h3>
                            <div class="slider-btn mt-90">
                                <a class="animated" href="<?php echo $banner_row['link']?>"><?php echo $banner_row['link_txt']?></a>
                            </div>
                        </div>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>

        <!-- About section -->
        <div class="about-section">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-img">
                        <img alt="" src="<?php echo FRONT_SITE_PATH?>assets/img/about-img.png">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-desc">
                        <h3>Welcome To <span class="text-danger">Food Ordering</span> Store !</h3>
                        <span class="bottom-line"></span>
                        <p>Savor convenience with our online food ordering platform. Explore diverse menus, place orders effortlessly, and enjoy swift delivery to your doorstep. Elevate your dining experience, one click at a time.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="container-fluid contact-section-bg">
            <div class="contact-heading-container">
                <h2 class="contact-heading">How to <span class="text-danger">Connect</span>?</h2>
                <span class="bottom-line"></span>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-info-wrapper text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="ion-ios-location-outline"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Our Location</h4>
                            <p>012 345 678 / 123 456 789</p>
                            <p><a href="#">info@example.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-info-wrapper text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="ion-ios-telephone-outline"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Contact us Anytime</h4>
                            <p>Mobile: 012 345 678</p>
                            <p>Fax: 123 456 789</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-info-wrapper text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="ion-ios-email-outline"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Write Some Words</h4>
                            <p><a href="#">Support24/7@example.com </a></p>
                            <p><a href="#">info@example.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
