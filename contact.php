<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact || TechneRepublic</title>

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
					<h2>Contact</h2>
					<ul class="breadcumb">
						<li><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Contact</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>


	<section class="contact-content sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, when an unknownto </p>
			</div>
			<iframe src="https://www.google.com/maps/d/embed?mid=1pt-OY4eADZ0f5jdRqbxey455uWM&hl=en" width="100%" height="400px"></iframe>
			<div class="row">
				<div class="col-md-8">
					<h2>Contact Form</h2>
					<form action="inc/sendemail.php" class="contact-form row" id="contact-page-contact-form">
						<div class="col-md-6">
							<input type="text" name="name" placeholder="Name" required>
							<input type="text" name="email" placeholder="Email" required>
							<input type="text" name="phone" placeholder="Phone" required>
							
						</div>
						<div class="col-md-6">
							<textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
						</div>
						<div class="col-md-12"><button class="thm-btn" type="submit">Send Message</button></div>
					</form>
				</div>
				<div class="col-md-4">
					<h2>Contact Details</h2>
					<ul class="contact-info">
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Address</h4>
								<p>Somewhere in Wakanda, Africa.</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Phone</h4>
								<p>(+234) 8109445504</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Email</h4>
								<p>info@technerepublic.org</p>
							</div>
						</li>
					</ul>
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