<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donations || TechneRepublic</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">



</head>
<body>

<?php
include 'inc/nav.php'
?>

	
	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Donation</h2>
					<ul class="breadcumb">
						<li><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Donation</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>

	<section class="sec-padding donation-section">
    	<div class="container">
    		<h2 class="text-thm">Make a Donation</h2>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate adipisci neque eius quod, fugiat saepe unde. In quibusdam, cum sit blanditiis explicabo rerum. Ipsa fugit, aspernatur quo at velit ex.</p>
    		<hr>
        	<div class="donation-form-outer">
            	<form action="contact.html" method="post">
                	
                    <!--Form Portlet-->
                    <div class="form-portlet">
                    	<h3>Donation Amount</h3>
                        
                        <div class="row clearfix">
                        	<div class="form-group col-lg-7 col-md-12 col-xs-12 clearfix">
                            	
                                <div class="radio-select">
                                	<input type="radio" id="amount-1" name="sel-amount">
                                    <label for="amount-1">$10</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" checked="" id="amount-2" name="sel-amount">
                                    <label for="amount-2">$25</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" id="amount-3" name="sel-amount">
                                    <label for="amount-3">$50</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" id="amount-4" name="sel-amount">
                                    <label for="amount-4">$100</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" id="amount-5" name="sel-amount">
                                    <label for="amount-5">$150</label>
                                </div>
                                
                                <div class="radio-select">
                                	<input type="radio" id="amount-6" name="sel-amount">
                                    <label for="amount-6">$200</label>
                                </div>
                                
                                <div class="radio-select">
                                	OR
                                </div>
                                
                            </div>
                            
                            <div class="form-group col-lg-5 col-md-8 col-xs-12 padd-top-20">
                            	
                                <input type="text" placeholder="Other Amount" value="" name="other-amount">
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <hr>
                    
                    <!--Form Portlet-->
                    <div class="form-portlet">
                    	<h3>Billing Information</h3>
                        
                        <div class="row clearfix">
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Card Number <span class="required">*</span></div>
                                <input type="text" required="" placeholder="Card Number" value="" name="name">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Security Code (CVC) <span class="required">*</span></div>
                                <input type="text" required="" placeholder="Security Code" value="" name="name">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Name <span class="required">*</span></div>
                                <input type="text" required="" placeholder="First Name" value="" name="name">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Email <span class="required">*</span></div>
                                <input type="email" required="" placeholder="Email" value="" name="name">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Phone <span class="required">*</span></div>
                                <input type="text" required="" placeholder="Phone" value="" name="name">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Address <span class="required">*</span></div>
                                <input type="text" required="" placeholder="Address 1" value="" name="name">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">City <span class="required">*</span></div>
                                <select>
                                	<option>City</option>
                                    <option>City Name</option>
                                    <option>City Other</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Zip / Postal Code <span class="required">*</span></div>
                                <input type="text" required="" placeholder="Zip Code" value="" name="name">
                            </div>
                    
		                    <hr>
		                    
		                    <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Submit Now</button></div>
                            
                        </div>
                    </div>
                    
                    <hr>
                    
                    <!--Form Portlet-->
                    <div class="form-portlet">
                    	<h3>Online Payment Information</h3>
                        
                        <div class="payment-option-logo"><img alt="" src="img/resources/payment-logos.png" class="img-responsive"></div>
                        <br>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>


	<section class="overlay-white sec-padding parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 promote-project text-center">
					<h3>Save Children From Hunger</h3>
					<div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<h2>Became a part of the world lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>
					<a href="#" class="thm-btn">Donate Now</a>
                    <a href="#" class="thm-btn inverse">Read More</a>
				</div>
			</div>
		</div>
	</section>


	<section class="p_40" data-bg-color="#eee">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel owl-carousel owl-theme">
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-6.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-7.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-8.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-9.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-10.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-7.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-7.png" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="img/clients/logo-10.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer class="footer sec-padding">

<?php
include 'inc/footer.php'
?>

</footer>


	<!-- main jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- bx slider -->
	<script src="js/jquery.bxslider.min.js"></script>
	<!-- owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script src="js/validate.js"></script>
	<!-- mixit up -->
	<script src="js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- circle progress -->
	<script src="js/circle-progress.js"></script>
	<!-- appear js -->
	<script src="js/jquery.appear.js"></script>
	<!-- count to -->
	<script src="js/jquery.countTo.js"></script>
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->
	<script src="js/gmap.js"></script>

	<!-- isotope script -->
	<script src="js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>


	<!-- thm custom script -->
	<script src="js/custom.js"></script>



</body>
</html>